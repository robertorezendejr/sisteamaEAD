<?php 
require 'environment.php';

define("BASE", "http://localhost:8888/ead/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
    $config['dbname'] = 'ead';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
} else {
    $config['dbname'] = 'ead';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}

?>