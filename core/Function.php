<?php

function go_404(){
  header('HTTP/1.0 404 Not Found');
  include _BASEURL.'/view/404.html';
  exit();
}