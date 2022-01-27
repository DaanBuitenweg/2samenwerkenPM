<?php
//Check als je ingelogt bent
function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//Leid je om naar login
	header("Location: inloggen.php");
	die;

}
//genereerd random nummer
function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 

		$text .= rand(0,9);
	}

	return $text;
}


function createList($array, $classname)
{

    $html = '<ul class="'. $classname . '">';

    foreach ($array as $key => $val){
   $html .= "<li><a href='". $val ."'>".$key."</a></li>";
    }

    $html .='</ul>';
    return "$html";
}


function createTable($arr){

    $html = "<table>";
    foreach($arr as $row){
      $html .= "<tr>";
      foreach($row as $value){
        $html .= "<td> ".$value."<td>";
      }
      $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
    }


function createSkillbar($taal,$perc,$color){
  $html = "<p>$taal<p>";
  $html .= "<div class='container'>";
  $html .= "<div class='skills ".strtolower($taal)."' style='width:".$perc."%;
  background-color: ".$color.";'>".$perc."%</div>";
  $html .= "</div>";
  return $html;
}


function createCard($foto,$naam,$baan){
 
  $html = "<div class='card'>";

  $html .= "<img src='./media/$foto' style='width: 100%'>";
  $html .= "<div class='containercard'>";

  $html .= "<h4><b>$naam</b></h4>";
  $html .= "<p>$baan</p>";

  $html .= "</div>";
  $html .= "</div>";
 
  return $html;
}
                