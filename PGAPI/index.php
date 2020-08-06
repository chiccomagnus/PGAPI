<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require 'vendor/autoload.php';
error_reporting(E_ERROR);
require 'class.php';

if ($argv[1]) {
  $number = (int) $argv[1];
  $p = new PGAPI("telefono-$number", $page);
}




Flight::route('/*', function() {
  echo json_encode(array("status" => "ERROR", "errorDescription" => "Invalid Path"), JSON_PRETTY_PRINT);
});

Flight::start();
?>