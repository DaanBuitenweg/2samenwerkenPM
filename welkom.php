<?php 

session_start();
  
	include("config.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//leest de database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
				
					if ($password === $user_data['password'])
					{   

						echo"Welkom het is gelukt om in te loggen";
					}
					else{
						echo "Verkeerde naam of wachtwoord of niet ingevuld";
					}
				}
			}
	}
}

?>