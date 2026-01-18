import os

def build_css():
    base_dir = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
    css_dir = os.path.join(base_dir, 'assets', 'css')
    modules_dir = os.path.join(css_dir, 'modules')
    output_file = os.path.join(css_dir, 'main.css')

    # Order matters!
    modules = [
        'variables.css',
        'base.css',
        'layout.css',
        'components.css',
        'sections.css',
        'projects-labs.css',
        'mobile-nav.css',
        'cookie-banner.css',
        'global-utilities.css',
        'utilities.css'
    ]

    print(f"Building {output_file} from modules...")

    with open(output_file, 'w') as outfile:
        for module in modules:
            module_path = os.path.join(modules_dir, module)
            if os.path.exists(module_path):
                print(f"  - Adding {module}")
                outfile.write(f"/* assets/css/modules/{module} */\n")
                with open(module_path, 'r') as infile:
                    outfile.write(infile.read())
                outfile.write("\n\n")
            else:
                print(f"  [WARNING] Module not found: {module}")

    print("Done!")

if __name__ == "__main__":
    build_css()
