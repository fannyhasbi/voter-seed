<?php
defined('_BASEURL') OR exit('No direct access allowed');

function _site_url($req = FALSE){
  return $req ? _URL.$req.'/' : _URL;
}

function _base_url($req = FALSE){
  return $req ? _BASEURL.'/'.$req.'/' : _BASEURL.'/';
}

function _to_file($file_url){
  return _BASEURL.'/'.$file_url;
}

function redirect($url){
  header('Location: '. $url);
}

function go_404(){
  header('HTTP/1.0 404 Not Found');
  include _BASEURL.'/view/error/404.html';
  exit();
}

// $page_now : enum('login', 'vote')
function auth_check($page_now){
  switch($page_now){
    case 'login':
      if($_SESSION['login']){
        redirect(_site_url('vote'));
      }
      break;
    
    case 'vote':
      if(!$_SESSION['login']){
        redirect(_site_url('login'));
      }
      break;
  }
}