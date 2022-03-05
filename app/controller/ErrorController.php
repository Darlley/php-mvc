<?php 

  class ErrorController {
    public function index($urlGet){
      echo "<h1>Página <strong> " . ucfirst($urlGet['pagina']) . " </strong> não encontrada</h1>";
    }
  }