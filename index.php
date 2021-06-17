<?php
// làm bộ định tuyến (routes)
include_once "controllers/Controller.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller  = new Controller();

switch ($route){

    default:$controller->home();
}