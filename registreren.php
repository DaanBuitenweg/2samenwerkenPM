<?php

if (isset($_POST["submit"])){
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeatpassword"];
$gender = $_POST["gender"];
$about = $_POST["about"];

require_once 'config.php';
require_once 'functions.php';
if(emptyInputSignup($name, $email, $password, $repeatPassword, $gender) !== false) {
    header("location: ../registreren.php?error=emptyinput");
    exit();

}
if(invaldName($name) !== false) {
    header("location: ../registreren.php?error=emptyname");
    exit();

}
if(invalidEmail($email) !== false) {
    header("location: ../registreren.php?error=emptyemail");
    exit();

}
if(pwdMatch($password, $repeatPassword) !== false) {
    header("location: ../registreren.php?error=passwordsdontmatch");
    exit();

}
if(invalidGender($gender) !== false) {
    header("location: ../registreren.php?error=emptygender");
    exit();

}
    createUser($dsn, $name, $email, $password, $gender);
}
else{
    header("location: ../registreren.php");
}
?>
