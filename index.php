<?php
require 'vendor/autoload.php';
Flight::route ('/', function(){ //define route and define function to handle request
  echo 'Hello Worldd!';
});

Flight::start();
?>
