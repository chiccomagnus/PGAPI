<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require 'vendor/autoload.php';
error_reporting(E_ERROR);
require 'class.php';



$p = new PGAPI("telefono-0461913853",$page);


Flight::route('/*',function(){
    echo json_encode(array("status" => "ERROR", "errorDescription" => "Invalid Path"),JSON_PRETTY_PRINT);
});

Flight::start();
?>