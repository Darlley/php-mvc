<?php


  class Core {
    public function start($urlGet){

      $controller = ucfirst($urlGet['pagina'])."Controller"; // NomeController

      $MethodController = "index";
      
      if(!class_exists($controller)) $controller  = "ErrorController";
       
      call_user_func_array(array(new $controller,$MethodController), array($urlGet)); // chama uma callback (controller) com um parametro (o metodo)

    }
  }