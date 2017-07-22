<?php
$core = 'core';
$view = 'view';

define('_COREPATH', $core);
define('_VIEWPATH', $view);
define('_BASEURL', __DIR__);

// Protocol and URL
define('CURRENT_PROTOCOL', ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' ) );
define('_URL', ( (isset($_SERVER['HTTP_HOST']) && preg_match('/^((\[[0-9a-f:]+\])|(\d{1,3}(\.\d{1,3}){3})|[a-z0-9\-\.]+)(:\d+)?$/i', $_SERVER['HTTP_HOST'])) ? sprintf('%s://%s%s',CURRENT_PROTOCOL,$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] == 80 ? '' : ':'.$_SERVER['SERVER_PORT']), substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], basename($_SERVER['SCRIPT_FILENAME'])))) : 'http://localhost/') );

require_once "core/Voter.php";

echo Voter::autoload();