import os
import shutil

base_dir = "images"
image_extensions = ('.jpg', '.jpeg', '.png', '.webp')

for subdir in os.listdir(base_dir):
    subdir_path = os.path.join(base_dir, subdir)
    if os.path.isdir(subdir_path):
        count = 1
        # Collect all image files first to avoid renaming conflicts
        image_files = [f for f in sorted(os.listdir(subdir_path)) if f.lower().endswith(image_extensions)]
        for filename in image_files:
            file_path = os.path.join(subdir_path, filename)
            ext = os.path.splitext(filename)[1]
            new_filename = f"{subdir}_{count}{ext}"
            new_file_path = os.path.join(subdir_path, new_filename)
            # If the new file exists and is not the same as the current file, remove it first
            if os.path.exists(new_file_path) and file_path != new_file_path:
                os.remove(new_file_path)
            # Rename (or move) the file
            if file_path != new_file_path:
                shutil.move(file_path, new_file_path)
                print(f"Renamed: {file_path} -> {new_file_path}")
            count += 1