<?php

class Core {
  public function start($urlGet){
    $controller = ucfirst($urlGet['pagina'])."Controller"; // NomeController
    echo $controller;
    // verificar qual controller chamar
  }
}