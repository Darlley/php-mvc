<?php 

  class HomeController {
    public function index(){
      echo file_get_contents('app/pages/home.html');
    }
  }