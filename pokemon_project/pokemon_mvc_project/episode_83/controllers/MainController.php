<?php
  class PokemonController {
      private $model;

      public function __construct($model) {
          $this->model = $model;
      }

      public function listPokemons() {
          $pokemons = $this->model->getAllPokemons();
          require 'views/pokemon_list.php';
      }

      public function addPokemon($pokemon) {
          $this->model->addPokemon($pokemon);
      }

      public function updatePokemon($index, $pokemon) {
          $this->model->updatePokemon($index, $pokemon);
      }

      public function deletePokemon($index) {
          $this->model->deletePokemon($index);
      }
  }
