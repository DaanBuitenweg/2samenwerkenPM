<?php


$dbhost       = "localhost";
$dbusername   = "Hardstore1";
$dbpassword   = "lN8jYFEdcOHGQ[*p";
$dbname     = "hardstore1";



if(!$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname))
{

	die("failed to connect!");
}