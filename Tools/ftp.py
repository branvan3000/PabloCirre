import os
import ftplib
import sys
import argparse
import time

# Default Configuration (Fallback / Primary)
FTP_HOST = "ftp.pablocirre.es"
FTP_USER = "pablocirrre"
FTP_PASS = "?De-(vJgBR*5"

LOCAL_ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__))) # Parent of Tools/
REMOTE_ROOT = "/"

# Exclusions
IGNORED_DIRS = {'.git', '.secrets', '.vscode', 'Tools', '__pycache__', '.gemini'}
IGNORED_FILES = {'.gitignore', 'deploy_ftp.ps1', 'deploy_ftp.py', '.DS_Store', 'ftp.py', 'list_ftp.ps1', 'task.md'}

class FTPClient:
    def __init__(self, host, user, password):
        self.host = host
        self.user = user
        self.password = password.strip() # Ensure no newlines
        self.ftp = None

    def connect(self):
        # Candidates to try:
        # 1. The provided (host, user, pass)
        # 2. Hardcoded fallback 1 ("pablocirrre")
        # 3. Hardcoded fallback 2 ("pablocirre")
        
        candidates = []
        candidates.append((self.host, self.user, self.password))
        
        # Add fallbacks if they differ
        def_pass = "?De-(vJgBR*5"
        if (self.user, self.password) != ("pablocirrre", def_pass):
             candidates.append((self.host, "pablocirrre", def_pass))
        if (self.user, self.password) != ("pablocirre", def_pass):
             candidates.append((self.host, "pablocirre", def_pass))
             
        for h, u, p in candidates:
            try:
                print(f"Connecting to {h} with user {u}...")
                p = p.strip() # Ensure no newlines
                if "\n" in p or "\r" in p:
                    print(f"Skipping invalid password with newlines for user {u}")
                    continue
                    
                self.ftp = ftplib.FTP_TLS(h)
                self.ftp.login(u, p)
                self.ftp.prot_p()  # Secure data connection
                print(f"Connected successfully as {u}.")
                self.host = h
                self.user = u
                self.password = p
                return # Success
            except ftplib.error_perm as e:
                print(f"Login failed for {u}: {e}")
            except Exception as e:
                print(f"Connection error for {u}: {e}")
            
            # Close if partially open
            try: 
                self.ftp.quit() 
            except: 
                pass
            self.ftp = None
            
        print("Error: All login attempts failed.")
        sys.exit(1)

    def close(self):
        if self.ftp:
            try:
                self.ftp.quit()
            except:
                pass

    def list_files(self, path=""):
        if not self.ftp: self.connect()
        print(f"Listing {path or '/'}:")
        try:
            self.ftp.retrlines(f'LIST {path}')
        except Exception as e:
            print(f"Error listing {path}: {e}")

    def ensure_remote_dir(self, remote_dir):
        if not self.ftp: self.connect()
        try:
            self.ftp.mkd(remote_dir)
            print(f"Created directory: {remote_dir}")
        except ftplib.error_perm as e:
            if "550" in str(e):
                pass  # Directory likely exists
            else:
                print(f"Error creating directory {remote_dir}: {e}")

    def upload_file(self, local_path, remote_path):
        if not self.ftp: self.connect()
        try:
            with open(local_path, 'rb') as f:
                print(f"Uploading {local_path} -> {remote_path}")
                self.ftp.storbinary(f'STOR {remote_path}', f)
        except Exception as e:
            print(f"Failed to upload {local_path}: {e}")

    def delete_all(self, path=""):
        """Recursively delete everything in path"""
        if not self.ftp: self.connect()
        
        # Simple safeguard
        if path == "" or path == "/":
            confirm = input("WARNING: You are about to DELETE EVERYTHING on the remote server root. Type 'DELETE' to confirm: ")
            if confirm != "DELETE":
                print("Operation cancelled.")
                return

        print(f"Deleting contents of {path or '/'}...")
        try:
            lines = []
            self.ftp.retrlines(f'LIST {path}', lines.append)
            
            for line in lines:
                parts = line.split(maxsplit=8)
                name = parts[-1]
                if name in ('.', '..'): continue
                
                remote_obj = f"{path}/{name}" if path and path != "/" else name
                
                # Crude detection of directory vs file based on permission string (drwx...)
                is_dir = line.startswith('d')
                
                if is_dir:
                    self.delete_all(remote_obj)
                    try:
                        self.ftp.rmd(remote_obj)
                        print(f"Removed dir: {remote_obj}")
                    except Exception as e:
                        print(f"Failed to remove dir {remote_obj}: {e}")
                else:
                    try:
                        self.ftp.delete(remote_obj)
                        print(f"Deleted file: {remote_obj}")
                    except Exception as e:
                        print(f"Failed to delete file {remote_obj}: {e}")
                        
        except Exception as e:
            print(f"Error during delete_all: {e}")

    def deploy(self, dry_run=False):
        if not self.ftp: self.connect()
        
        print(f"Deploying from {LOCAL_ROOT} to {REMOTE_ROOT}")
        
        for root, dirs, files in os.walk(LOCAL_ROOT):
            dirs[:] = [d for d in dirs if d not in IGNORED_DIRS]
            
            rel_path = os.path.relpath(root, LOCAL_ROOT)
            if rel_path == ".":
                remote_dir = REMOTE_ROOT
            else:
                remote_dir = os.path.join(REMOTE_ROOT, rel_path).replace("\\", "/")
            
            if not dry_run and remote_dir != "/":
                self.ensure_remote_dir(remote_dir)
            
            for file in files:
                if file in IGNORED_FILES:
                    continue
                
                local_file_path = os.path.join(root, file)
                remote_file_path = f"{remote_dir}/{file}" if remote_dir != "/" else f"/{file}"
                remote_file_path = remote_file_path.replace("//", "/")
                
                if dry_run:
                     print(f"[Dry Run] Upload {local_file_path} -> {remote_file_path}")
                else:
                    self.upload_file(local_file_path, remote_file_path)

    def upload_single(self, path):
        """Uploads a single file or directory recursively"""
        abs_path = os.path.abspath(path)
        if not abs_path.startswith(LOCAL_ROOT):
            print("Error: Can only upload files within the project root.")
            return

        rel_path = os.path.relpath(abs_path, LOCAL_ROOT)
        remote_path = rel_path.replace("\\", "/") # Initially assume it maps to same structure
        
        if os.path.isfile(abs_path):
             self.upload_file(abs_path, remote_path)
        elif os.path.isdir(abs_path):
             # Recursively upload directory
             for root, dirs, files in os.walk(abs_path):
                dirs[:] = [d for d in dirs if d not in IGNORED_DIRS]
                curr_rel = os.path.relpath(root, LOCAL_ROOT)
                curr_remote = curr_rel.replace("\\", "/")
                self.ensure_remote_dir(curr_remote)
                for file in files:
                    if file in IGNORED_FILES: continue
                    f_local = os.path.join(root, file)
                    f_remote = f"{curr_remote}/{file}".replace("//", "/")
                    self.upload_file(f_local, f_remote)


def load_credentials_from_file():
    # Try to find .secrets/ftp_credentials.txt
    secrets_path = os.path.join(LOCAL_ROOT, ".secrets", "ftp_credentials.txt")
    print(f"DEBUG: Looking for secrets at {secrets_path}")
    if os.path.exists(secrets_path):
        try:
            with open(secrets_path, "r") as f:
                content = f.read().strip()
                print("DEBUG: Found secrets file.")
                
                # Check for potential encoding issues (e.g. null bytes often mean UTF-16 read as ANSI/UTF-8)
                if "\x00" in content:
                    print("DEBUG: Detected null bytes, re-reading as UTF-16")
                    with open(secrets_path, "r", encoding="utf-16") as f2:
                         content = f2.read().strip()

                # Try parsing Key=Value or Key: Value
                lines = content.splitlines()
                creds = {}
                for line in lines:
                     if "=" in line:
                         k, v = line.split("=", 1)
                         creds[k.strip().upper()] = v.strip()
                     elif ":" in line:
                         k, v = line.split(":", 1)
                         k = k.strip()
                         # Map common names to our keys
                         if k.lower() == "host": k = "FTP_HOST"
                         if k.lower() == "user": k = "FTP_USER"
                         if k.lower() == "password": k = "FTP_PASS"
                         creds[k.strip().upper()] = v.strip()
                
                if creds:
                    h = creds.get("FTP_HOST", FTP_HOST)
                    u = creds.get("FTP_USER", FTP_USER)
                    p = creds.get("FTP_PASS", FTP_PASS)
                    print(f"DEBUG: Loaded from file (KV/Header) - Host: {h}, User: {u}, PassLen: {len(p) if p else 'None'}")
                    return h, u, p

                # Fallback: Assume entire content is password
                # Sanity check: Passwords shouldn't be massive blobs unless it's a key
                # Increased limit to 200 to allow for long tokens
                if len(content) > 200:
                    print(f"DEBUG: Secrets file content len {len(content)} is suspicious. Content start: {repr(content[:20])}")
                    # Don't return here, try to use it anyway if fallback fails? 
                    # Or return default. Let's return default for safety but log loud.
                    print("DEBUG: Ignoring file due to length.")
                    return FTP_HOST, FTP_USER, FTP_PASS

                print(f"DEBUG: Loaded from file (Raw) - PassLen: {len(content)}")
                return FTP_HOST, FTP_USER, content
        except Exception as e:
            print(f"Warning: Could not read secrets file: {e}")

    print("DEBUG: Using default fallback credentials.")
    return FTP_HOST, FTP_USER, FTP_PASS # Fallbacks

def main():
    parser = argparse.ArgumentParser(description="Unified FTP Tool for PabloCirre")
    subparsers = parser.add_subparsers(dest="command", required=True)
    
    # Deploy
    parser_deploy = subparsers.add_parser("deploy", help="Upload changed files (Smart Sync-ish)")
    parser_deploy.add_argument("--dry-run", action="store_true", help="Simulate upload")
    
    # List
    parser_list = subparsers.add_parser("list", help="List remote files")
    parser_list.add_argument("path", nargs="?", default="", help="Remote path to list")

    # Upload
    parser_upload = subparsers.add_parser("upload", help="Upload specific file or folder")
    parser_upload.add_argument("path", help="Local path to upload")
    
    # Delete All
    parser_nuke = subparsers.add_parser("delete-all", help="Delete EVERYTHING on remote")

    args = parser.parse_args()

    # Load credentials
    host, user, password = load_credentials_from_file()
    if not host or not user or not password:
         print("Error: Missing credentials.")
         sys.exit(1)

    client = FTPClient(host, user, password)

    try:
        if args.command == "deploy":
            client.deploy(dry_run=args.dry_run)
        
        elif args.command == "list":
            client.list_files(args.path)
            
        elif args.command == "upload":
            client.upload_single(args.path)
            
        elif args.command == "delete-all":
            client.delete_all()
            
    finally:
        client.close()

if __name__ == "__main__":
    main()
