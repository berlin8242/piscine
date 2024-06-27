<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Pokémon</title>
</head>
<body>
<div class="container mt-5">
    <h1>Update Pokémon</h1>

<?php
require 'models/PokemonModel.php';
$model = new PokemonModel();
$pokemon = $model->getAllPokemons()[$_GET['index']];
?>

<form action="update_pokemon.php" method="post">
    <input type="hidden" name="index" value="<?php echo $_GET['index']; ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $pokemon['name']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="<?php echo $pokemon['type']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <input type="number" class="form-control" id="level" name="level" value="<?php echo $pokemon['level']; ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Pokémon</button>
</form>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<?php
require 'models/PokemonModel.php';
$model = new PokemonModel();
$index = $_POST['index'];
$pokemon = [
    'name' => $_POST['name'],
    'type' => $_POST['type'],
    'level' => $_POST['level']
  ];
$model->updatePokemon($index, $pokemon);
header('Location: pokemon_list.php');
?>
</body>
</html>