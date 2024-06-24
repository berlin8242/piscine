#!/bin/bash

# Base directory for the project
BASE_DIR=$(pwd)/pokemon_project

# Create the base directory
mkdir -p $BASE_DIR

# Create common directories and files
COMMON_DIRS=("controllers" "models" "views" "public" "public/css" "public/js")
COMMON_FILES=("index.php" "router.php")

# Function to create common directories and files
create_common_structure() {
  for DIR in "${COMMON_DIRS[@]}"; do
    mkdir -p "$EPISODE_DIR/$DIR"
  done

  for FILE in "${COMMON_FILES[@]}"; do
    touch "$EPISODE_DIR/$FILE"
  done

  # Creating a sample CSS file
  echo "/* Main CSS */" > "$EPISODE_DIR/public/css/style.css"

  # Creating a sample JS file
  echo "// Main JS" > "$EPISODE_DIR/public/js/main.js"
}

# Create directories and files for each episode
for i in $(seq 1 90); do
  if (( i >= 77 && i <= 90 )); then
    EPISODE_DIR="$BASE_DIR/pokemon_mvc_project/episode_$i"
    mkdir -p "$EPISODE_DIR"
    create_common_structure
    echo "<?php\n// Controller code for Episode $i\n?>" > "$EPISODE_DIR/controllers/MainController.php"
    echo "<?php\n// Model code for Episode $i\n?>" > "$EPISODE_DIR/models/PokemonModel.php"
    echo "<!DOCTYPE html>\n<!-- View code for Episode $i -->" > "$EPISODE_DIR/views/home.php"
  else
    EPISODE_DIR="$BASE_DIR/episode_$i"
    mkdir -p "$EPISODE_DIR"
    case $i in
      1)
        echo "<!DOCTYPE html>" > "$EPISODE_DIR/index.html"
        echo "/* CSS for Episode 1 */" > "$EPISODE_DIR/style.css"
        ;;
      2)
        echo "<!DOCTYPE html>" > "$EPISODE_DIR/index.html"
        echo "/* CSS for Episode 2 */" > "$EPISODE_DIR/style.css"
        ;;
      *)
        echo "<!DOCTYPE html>" > "$EPISODE_DIR/index.html"
        echo "/* CSS for Episode $i */" > "$EPISODE_DIR/style.css"
        ;;
    esac
  fi

  # Create a README file for each episode with basic instructions
  echo "# Episode $i" > "$EPISODE_DIR/README.md"
  echo "Instructions and details for Episode $i." >> "$EPISODE_DIR/README.md"
done

echo "Project structure created successfully!"
