<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:admin-login.php');
}
include "cnx.php";


//option values

			$resultat=mysqli_query($con,"SELECT DISTINCT mois from statistique ");
			$option="";
				while ($row=mysqli_fetch_assoc($resultat)) {
        $dt = $row['mois'];
				$option=$option."<option>".$dt."</option>";

				}
	
    $date = $_POST['date'];	
    $total = mysqli_query($con,"SELECT * FROM statistique where mois='$date'");
    
  


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['totale', 'servic'],
          <?php 
          while ($row = mysqli_fetch_assoc($total)) {
            echo "['".$row['servic']."',".$row['totale']."],"; 
          }?>
        ]);

        var options = {
          title: 'Pourcentage De ' + '<?php echo ''; ?>'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
    </head>

   <body>

  <?php require_once('navbar.php')?>

<div class="content">
<div class="card">
<form action="admin.php" method="post">
  <select name="date" type="submit"><option name="date" value="">Selectionner La date</option>
  <?php echo $option; ?></select>
  <button type="submit">Afficher</button>
  </form>
    <div id="piechart" style="width: 800px; height: 400px;"></div>
  </body>
</html>

















<?php
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:admin-login.php');
}
include "cnx.php";
//option values

			$resultat=mysqli_query($con,"SELECT DISTINCT date from statistique ");
			$option="";
				while ($row=mysqli_fetch_assoc($resultat)) {
        $dt = $row['date'];
				$option=$option."<option>".$dt."</option>";

				}
	
        $q1 = mysqli_query($con,"SELECT totale,jour from statistique WHERE servic='Retrait' and mois='septembre' GROUP BY(jour)");
         
  


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
  
    <link rel="stylesheet" href="css/admn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jour', 'Retrait'],
          <?php 
          while ($row = mysqli_fetch_assoc($q1)) {
            echo "['".$row['jour']."',".$row['totale']."],"; 
          }?>
        ]);

        var options = {
          chart: {
            title: 'Evolution Par jour',
            subtitle: 'Retrait le mois de Septembre',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    </head>

   <body>

  <?php require_once('navbar.php')?>

<div class="content">
<div class="card">


<div class="cnt">
<form action="admin.php" method="post">
  <select name="date" class= "form__input" type="submit"><option name="date" value="">Selectionner La date</option>
  <?php echo $option; ?></select>
  <button type="submit">Afficher</button>
  </form>
  
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
</div>

  <div class="cnt">
    
  </div>


</div>
</body>
</html>














