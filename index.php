<?php 

  require_once('app/core/index.php');
  require_once('app/controller/HomeController.php');
  require_once('app/controller/ErrorController.php');

  $indexTemplate = file_get_contents('app/index.html');

  ob_start();
    $core = new Core;
    $core->start($_GET); // query strings x url amigáveis)
    $saida = ob_get_contents();
    
    ob_end_clean();
    
  $indexTemplate = str_replace('{{ dinamic_content }}', $saida, $indexTemplate);
  echo $indexTemplate;