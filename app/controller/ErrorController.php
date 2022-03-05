<?php 

  class ErrorController {
    public function index($urlGet){
      if(isset($urlGet['pagina'])){
        echo "<h1>Página <strong> " . ucfirst($urlGet['pagina']) . " </strong> não encontrada</h1>";
      }else{
        echo "valor ". var_dump($urlGet) ." não encontrado.";
      }
    }
  }