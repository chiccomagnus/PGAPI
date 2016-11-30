<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require 'vendor/autoload.php';
error_reporting(E_ERROR);
require 'class.php';

Flight::route('/number/@number', function($number){
    $p = new PGAPI("telefono-".$number);
});

Flight::route('/company/@name(/place/@place)(/page/@page)', function($name,$place = false, $page = 1){
    $p = new PGAPI($name.(($place) ? "/".$place : ""), $page);
});

Flight::route('/company/@name(/place/@place)(/page/@page)', function($name,$place = false, $page = 1){
    $p = new PGAPI($name.(($place) ? "/".$place : ""), $page);
});

Flight::route('/place/@place', function($place){
    $p = new PGAPI("indirizzo-".$place);
});

Flight::route('/category/@category', function($category){
    $p = new PGAPI("cat/".$category);
});

Flight::route('/search/@term', function($term){
    $p = new PGAPI($term);
});

Flight::route('/*',function(){
    echo "{
    
    }";
});

Flight::start();
?>