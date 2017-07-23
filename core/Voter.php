<?php
defined('_BASEURL') or exit('No direct access allowed');

class Voter {
  public function __construct(){}

  public static function autoload(){
    require_once _BASEURL .'/core/Function.php';
    require_once _BASEURL .'/core/Route.php';
    Voter::view('home');
  }

  public static function view($file){
    $file = strtolower($file);
    $file = _BASEURL .'/view/'. $file .'.php';

    if(file_exists($file)){
      require_once $file;
    }
    else{
      go_404();
    }
  }
}