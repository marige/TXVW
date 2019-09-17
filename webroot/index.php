<?php  

//A commenter lorsqu'en production
//session time out setting
      
    if(!isset($_SESSION)){
        session_start();
    }
 
//error_reporting(E_ALL);
ini_set('display_errors',TRUE);
ini_set('display_startup_errors', TRUE); 

define ('WEBROOT',dirname(__FILE__));
define ('ROOT', dirname(WEBROOT));
define ('DS', DIRECTORY_SEPARATOR);
define ('CORE',ROOT.DS.'core');
define ('THEME', 'theme');
define ('DOMAINE', $_SERVER['SERVER_NAME'] );
define ('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
define ('BASE_URL_THEME', dirname(dirname($_SERVER['SCRIPT_NAME'])).''.THEME.'/' );

require CORE.DS.'includes.php';
new Dispatcher();
 ?>
