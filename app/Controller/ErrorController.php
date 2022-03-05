<?php

  class ErrorController {
    public function index($urlGet){
      
      echo "<h1>A página <strong>". ucfirst($urlGet['pagina']) ."</strong> não existe.</h1>";
      // echo file_get_contents('app/pages/error404.php');
    }
  }