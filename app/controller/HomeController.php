<?php 

  class HomeController {
    public function index(){
      Postagem::selecionarConteudo();
      echo file_get_contents('app/pages/home.html');
    }
  }