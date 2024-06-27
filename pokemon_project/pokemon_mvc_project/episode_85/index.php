<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search Pokémon</title>
</head>
<body>
<div class="container mt-5">
    <h1>Search Pokémon</h1>
    <input type="text" id="searchInput" class="form-control" placeholder="Search Pokémon..." onkeyup="searchPokemon()">
    <div id="pokemonList" class="row mt-3">

<?php
    require 'models/PokemonModel.php';
    $model = new PokemonModel();
    $pokemons = $model->getAllPokemons();
    foreach ($pokemons as $index => $pokemon): ?>
    <div class="col-md-4 pokemon-item">
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

<script>
    function searchPokemon() {
        let input = document.getElementById('searchInput').value.toUpperCase();
        let items = document.getElementsByClassName('pokemon-item');
        for (let i = 0; i < items.length; i++) {
        let title = items[i].getElementsByClassName('card-title')[0];
        if (title.innerHTML.toUpperCase().indexOf(input) > -1) {
            items[i].style.display = "";
        } else {
            items[i].style.display = "none";
            }
            }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>