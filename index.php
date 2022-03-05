<?php 

  require_once('app/core/index.php');
  require_once('app/controller/HomeController.php');

  $indexTemplate = file_get_contents('app/index.html');

  $core = new Core;
  $core->start($_GET); // query strings x url amigáveis)

  echo $indexTemplate;