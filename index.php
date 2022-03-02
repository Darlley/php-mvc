<?php

  require_once 'app/Core/index.php';
  $template = file_get_contents('app/Template/index.html');
  
  ob_start();
  $core = new Core;
  $core->start($_GET);
  
  $saida = ob_get_contents();
  ob_end_clean();
  
  $template = str_replace('{{ area_dinamica }}', $saida, $template);
  echo $template;

