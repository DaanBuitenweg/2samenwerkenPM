<?php

include_once 'functions.php';
$array = [
  'Home'=>'index.php',
  'producten'=>'producten.php',
  'over ons'=>'overons.php',
  'contact'=>'contact.php',
];

echo createlist($array, 'navbar');

?>