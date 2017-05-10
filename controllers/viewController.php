<?php

  /**
   * Class PagesController
   */
  class ViewController {

    public function home() {
      $first_name = 'Estudiante';
      $last_name  = 'UCM';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }

  }

?>