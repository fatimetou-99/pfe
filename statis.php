


<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:admin-login.php');
}
include "cnx.php";

			$resultat=mysqli_query($con,"SELECT DISTINCT mois from statistique ");
			$option="";
				while ($row=mysqli_fetch_assoc($resultat)) {
        $dt = $row['mois'];
				$option=$option."<option>".$dt."</option>";

        }
//option annee
        
			$resultat1=mysqli_query($con,"SELECT DISTINCT annee from statistique ");
			$option1="";
				while ($row1=mysqli_fetch_assoc($resultat1)) {
        $dt1 = $row1['annee'];
				$option1=$option1."<option>".$dt1."</option>";

        }

 $moisR =$_POST['moisR'] ; 
 $moisV =$_POST['moisV'] ; 
 $anneR =$_POST['anneR'] ; 
 $anneV =$_POST['anneV'] ; 

// Retrait	
$q1 = mysqli_query($con,"SELECT totale,jour from statistique WHERE servic='Retrait' and mois='$moisR' GROUP BY(jour)");
$q2 = mysqli_query($con,"SELECT SUM(totale) as sommR,mois from statistique WHERE servic='Retrait' and annee='$anneR' GROUP BY(mois)");
// Versement
$q3 = mysqli_query($con,"SELECT totale,jour from statistique WHERE servic='Versement' and mois='$moisV' GROUP BY(jour)");
$q4 = mysqli_query($con,"SELECT SUM(totale) as sommV,mois from statistique WHERE servic='Versement' and annee='$anneV' GROUP BY(mois)");
 

function dateToFrench($datee, $format) 
{
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months , date($format, strtotime($datee) )  );
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <style>

.charts{
  display :flex;
  justify-content:space-between;
  margin:10px;
}
.forms{
  display :flex;
  justify-content:space-between;
  margin:10px;
}
</style>
    <link rel="stylesheet" href="css/admn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </script>

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);


      function drawChart1() {
        var data = google.visualization.arrayToDataTable([
          ['Jour', 'Retrait'],
          <?php 
          while ($row = mysqli_fetch_assoc($q1)) {
            echo "['".$row['jour']."',".$row['totale']."],"; 
          }?>
        ]);

        var options = {
          chart: {
            title: 'Evolution Mensuelle',
            subtitle: 'Retrait le mois de Septembre',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['mois', 'Retrait'],
          <?php 
          while ($row2 = mysqli_fetch_assoc($q2)) {
            echo "['".$row2['mois']."',".$row2['sommR']."],"; 
          }?>
        ]);

        var options = {
          chart: {
            title: 'Evaluation Anuelle',
            subtitle: "Retrait L'année 2020",
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
      function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Jour', 'Versement'],
          <?php 
          while ($row3 = mysqli_fetch_assoc($q3)) {
            echo "['".$row3['jour']."',".$row3['totale']."],"; 
          }?>
        ]);

        var options = {
          chart: {
            title: 'Evolution Mensuelle',
            subtitle: 'Retrait le mois de Septembre',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material3'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawChart4() {
        var data = google.visualization.arrayToDataTable([
          ['mois', 'Versement'],
          <?php 
          while ($row4 = mysqli_fetch_assoc($q4)) {
            echo "['".$row4['mois']."',".$row4['sommV']."],"; 
          }?>
        ]);

        var options = {
          chart: {
            title: 'Evaluation Anuelle',
            subtitle: "Retrait L'année 2020",
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material4'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    </head>

   <body>

  <?php require_once('navbar.php')?>

<div class="content">
<div class="card">


<div class="cnt">
  <div class="forms">
  <form action="statis.php" method="post">
  <select name="moisR" class= "form__input" type="submit"><option id="moisR" name="moisR" value="">Selectionner La Mois</option>
  <?php echo $option; ?></select>
  <button type="submit" onclick="submit()">Afficher</button>
  </form>

  <form action="statis.php" method="post">
  <select name="anneR" class= "form__input" type="submit"><option name="anneR" value="">Selectionner L'année</option>
  <?php echo $option1; ?></select>
  <button type="submit">Afficher</button>
  </form>
  </div>

  <div class="charts">
    <div id="columnchart_material" style="width: 600px; height: 500px;"></div>
    <div id="columnchart_material2" style="width: 600px; height: 500px;"></div>
    </div>
</div>

  <div class="cnt">
  <div class="forms">
  <form action="statis.php" method="post">
  <select name="moisV"  class= "form__input" type="submit"><option name="moisV" value="">Selectionner La Mois</option>
  <?php echo $option; ?></select>
  <button type="submit">Afficher</button>
  </form>

  <form action="statis.php" method="post">
  <select name="anneV" class= "form__input" type="submit"><option name="anneV" value="">Selectionner L'année</option>
  <?php echo $option1; ?></select>
  <button type="submit">Afficher</button>
  </form>
  </div>

  <div class="charts">
    <div id="columnchart_material3" style="width: 600px; height: 500px;"></div>
    <div id="columnchart_material4" style="width: 600px; height: 500px;"></div>
    </div>
  </div>


</div>
</body>
</html>














