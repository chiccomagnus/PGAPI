<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require 'vendor/autoload.php';
error_reporting(E_ERROR);
require 'class.php';

if ($argv[1]) {
  $number = $argv[1];
  new PGAPI("telefono-$number", $page);
}

?>
