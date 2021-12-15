<?php

include_once 'functions.php';
$array = [
  'Home'=>'index.php',
  'Skills'=>'skills.php',
  'Opdrachten'=>'opdrachten.php',
  'Contact'=>'contact.php',
  'About'=>'about.php',
  'Admin'=>'Admin.php',
];

echo createlist($array, 'navbar');

?>