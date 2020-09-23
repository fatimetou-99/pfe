<?php


include "cnx.php";

function dateToFrench($date, $format) 
{
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months , date($format, strtotime($date) )  );
}


$sql1=mysqli_query($con,"SELECT COUNT(id_rt) as total,date_r FROM retrait GROUP BY date_r");
$delet = mysqli_query($con,"DELETE FROM statistique ");

if (mysqli_num_rows($sql1)>0) {
  while ($row = mysqli_fetch_assoc($sql1)) {
    $tot1 =$row["total"];
    $dt1 =$row["date_r"];

    $jour = dateToFrench($dt1,'j');
    $mois = dateToFrench($dt1,'F');
    $annee = dateToFrench($dt1,'Y');

    $insr = mysqli_query($con,"INSERT INTO statistique (servic, totale, jour, mois, annee) 
    VALUES ('Retrait',$tot1,'$jour','$mois','$annee') ");
    
  }
}


  $sql2=mysqli_query($con,"SELECT COUNT(id_vers) as total,date_v FROM versement GROUP BY date_v");

  if (mysqli_num_rows($sql2)>0) {
    while ($row = mysqli_fetch_assoc($sql2)) {
      $tot2 =$row["total"];
      $dt2 =$row["date_v"];

      $jourV = dateToFrench($dt2,'j');
      $moisV = dateToFrench($dt2,'F');
      $anneeV = dateToFrench($dt2,'Y');
 echo $mois;
        $insr = mysqli_query($con,"INSERT INTO statistique ( servic, totale, jour, mois,annee) 
        VALUES ('Versement',$tot2,'$jourV','$moisV','$anneeV')");     
    }
  }


?>