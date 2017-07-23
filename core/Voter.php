<?php
defined('_BASEURL') OR exit('No direct access allowed');

require_once _BASEURL .'/core/Function.php';
require_once _BASEURL .'/core/Router.php';

$router = new Router();
$router->route();