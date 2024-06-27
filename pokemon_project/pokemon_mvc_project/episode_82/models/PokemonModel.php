<?php
  class PokemonModel {
      private $pokemons = [];

      public function __construct() {
          if (file_exists('pokemons.json')) {
              $this->pokemons = json_decode(file_get_contents('pokemons.json'), true);
          }
      }

      public function getAllPokemons() {
          return $this->pokemons;
      }

      public function addPokemon($pokemon) {
          $this->pokemons[] = $pokemon;
          file_put_contents('pokemons.json', json_encode($this->pokemons));
      }

      public function updatePokemon($index, $pokemon) {
          $this->pokemons[$index] = $pokemon;
          file_put_contents('pokemons.json', json_encode($this->pokemons));
      }

      public function deletePokemon($index) {
          array_splice($this->pokemons, $index, 1);
          file_put_contents('pokemons.json', json_encode($this->pokemons));
      }
  }
