<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pokémon List</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Pokémon List</h1>
        <div class="row">
            <?php foreach ($pokemons as $index => $pokemon): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pokemon['name']; ?></h5>
                            <p class="card-text">Type: <?php echo $pokemon['type']; ?></p>
                            <p class="card-text">Level: <?php echo $pokemon['level']; ?></p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<?php
require 'models/PokemonModel.php';
$model = new PokemonModel();
$pokemons = $model->getAllPokemons();
?>
</body>
</html>