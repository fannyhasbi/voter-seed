<?php
defined('_BASEURL') or exit('No direct access allowed');

class Voter {
  public static function autoload(){
    require_once _BASEURL.'/core/Home.php';
    Home::view();
  }
}