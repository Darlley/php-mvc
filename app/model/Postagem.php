<?php 

  class Postagem {
    
    public static function selecionarConteudo(){
      $connection = new PDO('mysql: host:localhost;dbname=serie-criando-site;','root','');
      var_dump($connection);
    }

  }