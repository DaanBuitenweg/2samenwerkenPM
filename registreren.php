<?php 
session_start();

	
	include("config.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name = $_POST['name'];
        $email = $_POST['email'];
		$password = $_POST['password'];
		$herhaalwachtwoord = $_POST['repeatpassword'];

		if ($_POST["password"] === $_POST["repeatpassword"]) {
			//gelukt
		 }
		 else {
			echo "Het wachtwoord komt niet overeen<br>";
		 }

		if(!empty($user_name) && !empty($password) && !is_numeric($name))
		{

			//save naar db
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email,repeatpassword) values ('$user_id','$user_name','$password','$email','$repeatpassword')";

			mysqli_query($con, $query);

			header("Location: inloggen.php");
			die;
		}else
		{
			echo "Niet ingevuld of gegevens bestaan niet of gegevens al gebruikt";
		}
	}
?>
