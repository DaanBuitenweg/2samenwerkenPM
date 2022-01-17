<?php


$dbhost       = "localhost";
$dbusername   = "Hardstore";
$dbpassword   = "dYn]6tcisw6ftlki";
$dbname     = "world";



if(!$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname))
{

	die("failed to connect!");
}
