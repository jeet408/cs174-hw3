<?php

//Start a Session
//if (session_id() === "") {
//    session_start();
//}

function find_by_id($id) {
    //GET ID FROM DB
}

//Error reporting
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

//Routes
//require 'src/views/landing_view.php';
//require_once 'src/controllers/landing.php';
//require_once 'src/views/writing_view.php';

include_once('src/controllers/Landing.php');

$controller = new Landing();
$controller->index();

?>