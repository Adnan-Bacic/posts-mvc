<?php
//errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//load config
require_once 'config/config.php';

//helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

//autoload core libraries
spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
});