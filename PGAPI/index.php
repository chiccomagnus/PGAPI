<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require 'vendor/autoload.php';
error_reporting(E_ERROR);
require 'class.php';

Flight::route('/number/@number(/page/@page)', function($number, $page = false){
    $p = new PGAPI("telefono-".$number,$page);
});

Flight::route('/company/@name(/place/@place)(/page/@page)', function($name,$place = false, $page = false){
    $p = new PGAPI($name.(($place) ? "/".$place : ""), $page);
});

Flight::route('/place/@place(/page/@page)', function($place, $page = false){
    $p = new PGAPI("indirizzo-".$place, $page);
});

Flight::route('/category/@category(/page/@page)', function($category, $page = false){
    $p = new PGAPI("cat-".$category, $page);
});

Flight::route('/search/@term(/page/@page)', function($term, $page = false){
    $p = new PGAPI($term, $page);
});

Flight::route('/*',function(){
    echo json_encode(array("status" => "ERROR", "errorDescription" => "Invalid Path"),JSON_PRETTY_PRINT);
});

Flight::start();
?>