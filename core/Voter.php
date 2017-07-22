<?php

class Voter {
  public static function autoload(){
    require_once _BASEURL.'/core/Home.php';
    Home::view();
  }
}