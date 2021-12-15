<?php
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

// maak skillbar fuctie
// html tag openen
//html div tag openen
//variabelen injecteren in de html
//resultaat teruggeven
function createSkillbar($taal,$perc,$color){
  $html = "<p>$taal<p>";
  $html .= "<div class='container'>";
  $html .= "<div class='skills ".strtolower($taal)."' style='width:".$perc."%;
  background-color: ".$color.";'>".$perc."%</div>";
  $html .= "</div>";
  return $html;
}

// maak skillbar fuctie
function createCard($foto,$naam,$baan){
  // html tag openen
  $html = "<div class='card'>";
  // foto toevoegen en style geven
  $html .= "<img src='./media/$foto' style='width: 100%'>";
  $html .= "<div class='containercard'>";
  // naam en baan toevoegen
  $html .= "<h4><b>$naam</b></h4>";
  $html .= "<p>$baan</p>";
  //html tag afsluiten
  $html .= "</div>";
  $html .= "</div>";
  //resultaat teruggeven
  return $html;
}