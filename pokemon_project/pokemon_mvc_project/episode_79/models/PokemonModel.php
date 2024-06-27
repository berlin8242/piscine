<?php
  class UserModel {
      private $data = [
          ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
          ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com'],
      ];

      public function getAllUsers() {
          return $data;
      }
    }
?>
