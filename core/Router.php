<?php
defined('_BASEURL') OR exit('No direct access allowed');

class Router {
  protected $url;
  protected $page;

  public function __construct(){
    $this->url = $_SERVER['REQUEST_URI'];
    $url = explode("/", $this->url);
    $this->page = $url[1];
  }

  public function route(){

    switch($this->page){
      case NULL:
        // Go to home view
        require_once _to_file('view/home.php');
        break;
      
      case 'login':
        auth_check('login');
        require_once _to_file('view/login.php');
        break;

      case 'vote':
        auth_check('vote');
        require_once _to_file('view/vote.php');
        break;
      
      default:
        $page_file = _base_url('view'). $this->page .'.php';

        if(file_exists($page_file)){
          require_once $page_file;
        }
        else {
          go_404();
        }
        break;
    }
  }
}