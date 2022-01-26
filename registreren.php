<?php 
session_start();

	
	include("config.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name = $_POST['user_name'];
        $email = $_POST['email'];
		$password = $_POST['password'];
		$repeatpassword = $_POST['repeatpassword'];

		if ($_POST["password"] === $_POST["repeatpassword"]) {
			
		 }
		 else {
			echo "Het wachtwoord komt niet overeen<br>";
			exit;
		 }

		if(!empty($name) && !empty($password) && !is_numeric($name) && !empty($repeatpassword) && $repeatpassword === $password)
		{

			//save naar db
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email,repeatpassword) values ('$user_id','$name','$password','$email','$repeatpassword')";

			mysqli_query($con, $query);

			header("Location: inlogform.php" );
			die;
		}else
		{
			echo "Niet ingevuld of gegevens bestaan niet of gegevens al gebruikt";
		}
	}

?>