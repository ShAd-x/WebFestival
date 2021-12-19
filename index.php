<?php
require '../../includes/flight-master/flight/Flight.php';
// Load Smarty library
require '../../includes/smarty-3.1.35/libs/Smarty.class.php';
require 'pdo.php';

session_start();

if (isset($db)) {
    Flight::set('pdo', $db);
}

// Register Smarty as the view class
// Also pass a callback function to configure Smarty on load
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});

if (isset($_SESSION["user"])) {
    Flight::view()->assign("_session_", $_SESSION["user"]);
    Flight::view()->assign("_id_", $_SESSION["id"]);
    if (isset($_SESSION["admin"]))
        Flight::view()->assign("_admin_", $_SESSION["admin"]);
}

require "routes/routes.php";
Flight::start();