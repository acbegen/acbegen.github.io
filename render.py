import os
import glob
import shutil

STATIC_FOLDERS = ["courses", "css", "files", "img", "js"]
PHP_FILES = "*.php"
BUILD_DIR = "build"

# Create build directory
if os.path.exists(BUILD_DIR):
    shutil.rmtree(BUILD_DIR)
os.mkdir(BUILD_DIR)

# Copy static folders
for folder in STATIC_FOLDERS:
    shutil.copytree(folder, os.path.join(BUILD_DIR, folder))

# Copy PHP files
for php_file in glob.glob(PHP_FILES):
    # change the extension to .html
    html_file = os.path.splitext(php_file)[0] + ".html"
    os.system(f"php {php_file} > {BUILD_DIR}/{html_file}")

# Rewrite links in HTML files
for html_file in glob.glob(os.path.join(BUILD_DIR, "*.html")):
    with open(html_file, "r") as f:
        content = f.read()
    # Change links to other HTML files
    content = content.replace(".php", ".html")
    with open(html_file, "w") as f:
        f.write(content)