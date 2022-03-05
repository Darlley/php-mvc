<?php 

  require_once('app/Core/index.php');
  require_once('app/Controller/HomeController.php');
  require_once('app/Controller/ErrorController.php');

  $app_template = file_get_contents('app/index.html');

  ob_start();
    $core = new Core;
    $core->paramsTerms($_GET);

    $content = ob_get_contents();
  ob_end_clean();

  $app_template = str_replace("{{ area_dinamica }}", $content, $app_template);
  echo $app_template;