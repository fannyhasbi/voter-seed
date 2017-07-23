<?php
defined('_BASEURL') or exit('No direct access allowed');

class Home {
  public static function view(){
    require_once _BASEURL."/static/home.php";
  }
}