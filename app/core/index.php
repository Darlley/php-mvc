<?php


  class Core {
    public function start($urlGet){
      $controller = ucfirst($urlGet['pagina'])."Controller"; // NomeController
      
      if(!class_exists($controller)) $controller  = "ErrorController";
      echo $controller;
    }
  }