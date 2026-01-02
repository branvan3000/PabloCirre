#!/usr/bin/env python3
"""
Quick FTP Deployment Script for Specific Folders
================================================
Deploy a specific local folder to the corresponding remote directory.
Useful for updating just a Lab or a specific section without redeploying the whole site.

Usage:
    python deploy_folder.py <folder_path>

Example:
    python deploy_folder.py Labs/Lab5_SitemapExtractor
"""

import ftplib
import os
import json
import sys
import argparse

# Configure stdout for utf-8
if sys.platform == "win32":
    import io
    sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding='utf-8')

CONFIG_FILE = "config.json"

def load_config():
    """Load FTP configuration from JSON file (same as deploy.py)."""
    # Look for config in the same directory as this script
    script_dir = os.path.dirname(os.path.realpath(__file__))
    config_path = os.path.join(script_dir, CONFIG_FILE)
    
    if not os.path.exists(config_path):
        print(f"❌ Configuration file '{CONFIG_FILE}' not found in {script_dir}!")
        sys.exit(1)
    
    try:
        with open(config_path, 'r') as f:
            return json.load(f)
    except Exception as e:
        print(f"❌ Invalid JSON in {CONFIG_FILE}: {e}")
        sys.exit(1)

def upload_file(ftp, local_path, remote_path):
    """Upload a single file."""
    try:
        with open(local_path, 'rb') as f:
            print(f"  out Uploading: {os.path.basename(local_path)}")
            ftp.storbinary(f'STOR {os.path.basename(local_path)}', f)
    except Exception as e:
        print(f"  error Failed to upload {local_path}: {e}")

def upload_recursive(ftp, local_dir, remote_base):
    """Recursively upload a directory."""
    print(f"📂 Processing: {local_dir}")
    
    # Ensure remote directory exists and enter it
    try:
        ftp.cwd(remote_base)
    except ftplib.error_perm:
        # Create if it doesn't exist (assuming parent exists or we are at root)
        # Note: This is a simple script, might need recursion for nested non-existent dirs
        # But here we assume the structure largely exists or we create one level
        try:
           ftp.mkd(remote_base)
           ftp.cwd(remote_base)
        except Exception as e:
            print(f"❌ Could not access or create remote directory {remote_base}: {e}")
            return

    for item in os.listdir(local_dir):
        if item in ['.DS_Store', '.git', '__pycache__']:
            continue
            
        local_path = os.path.join(local_dir, item)
        
        if os.path.isdir(local_path):
            # Create remote subdir if needed
            try:
                ftp.mkd(item)
            except:
                pass 
            
            ftp.cwd(item)
            upload_recursive(ftp, local_path, ftp.pwd())
            ftp.cwd('..')
        else:
            upload_file(ftp, local_path, item)

def deploy_folder(target_folder):
    """Main deployment function."""
    config = load_config()
    
    # Calculate paths
    script_dir = os.path.dirname(os.path.realpath(__file__))
    project_root = os.path.dirname(os.path.dirname(script_dir)) # ../../
    
    # Normalize target folder
    # If user passes absolute path, make it relative to project root
    if os.path.isabs(target_folder):
        rel_path = os.path.relpath(target_folder, project_root)
    else:
        rel_path = target_folder
        
    full_local_path = os.path.join(project_root, rel_path)
    
    if not os.path.exists(full_local_path):
        print(f"❌ Local path does not exist: {full_local_path}")
        sys.exit(1)
        
    print(f"🚀 Quick Deploy: {rel_path}")
    print(f"📡 Connecting to {config['host']}...")
    
    try:
        ftp = ftplib.FTP(config['host'])
        ftp.login(config['user'], config['password'])
        print("✅ Connected!")
        
        # Navigate to the target parent directory on remote
        # We want to upload *contents* of target_folder TO target_folder on remote
        # OR upload target_folder ITSELF to parent?
        # Let's match behavior: we want to sync the folder.
        
        # Navigate to the PARENT directory on remote
        # We want to upload `target_folder` structure into `parent_of_target`
        
        parts = rel_path.strip(os.sep).split(os.sep)
        target_dir_name = parts[-1]
        parent_parts = parts[:-1]
        
        # Navigate to root first
        ftp.cwd('/')
        
        # Navigate to parent
        current_path = ""
        for part in parent_parts:
            try:
                ftp.cwd(part)
            except:
                print(f"  + Creating parent directory: {part}")
                ftp.mkd(part)
                ftp.cwd(part)
            current_path = os.path.join(current_path, part) if current_path else part
            
        print(f"📂 Remote Parent: /{(current_path if current_path else 'root')}")
        
        # Now upload the folder itself into the current directory
        # upload_recursive expects to START processing local_dir and put it into remote_base (subfolder of current)
        upload_recursive(ftp, full_local_path, target_dir_name)
        
        ftp.quit()
        print("\n✅ Quick deployment complete!")
        
    except Exception as e:
        print(f"\n❌ Error: {e}")
        sys.exit(1)

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Usage: python deploy_folder.py <folder_path_relative_to_root>")
        sys.exit(1)
        
    deploy_folder(sys.argv[1])
