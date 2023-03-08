import os
import glob
import shutil

EXCLUDE_DIRS = [".github", ".git", "build", "*.py"]
BUILD_DIR = "build"

# Create build directory
if os.path.exists(BUILD_DIR):
    shutil.rmtree(BUILD_DIR)

# Copy all files
shutil.copytree(".", BUILD_DIR, ignore=shutil.ignore_patterns(*EXCLUDE_DIRS))

# Render all PHP files, walk
script_dir = os.getcwd()
for root, dirs, files in os.walk(BUILD_DIR):
    os.chdir(root)
    for file in files:
        if file.endswith(".php"):
            # Render PHP file
            os.system(f"php {file} > {file[:-4]}.html")

            # Rewrite links
            with open(f"{file[:-4]}.html", "r") as f:
                content = f.read()

            content = content.replace(".php", ".html")

            with open(f"{file[:-4]}.html", "w") as f:
                f.write(content)

            # Remove PHP file
            os.remove(file)
    os.chdir(script_dir)
