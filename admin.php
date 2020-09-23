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
	
    $date = $_POST['date'];	
    $total = mysqli_query($con,"SELECT * FROM statistique where date='$date'");
    
  


function dateToFrench($datee, $format) 
{
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months , date($format, strtotime($datee) )  );
}
$sqlR = mysqli_query($con,"SELECT max(id_rt) as longR from temp_r");
if (mysqli_num_rows($sqlR)>0){
		 $rowR = mysqli_fetch_assoc($sqlR) ;
}

$sqlV = mysqli_query($con,"SELECT max(id_vers) as longV from temp_v");
if (mysqli_num_rows($sqlV)>0){
		 $rowV = mysqli_fetch_assoc($sqlV) ;
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
          title: 'Pourcentage De ' + '<?php echo dateToFrench($date, 'j F Y'); ?>',
          
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


<div class="cnt">

<div class="courses-container">
<div class="course">
		<div class="course-preview">
			<h2 ><?php echo $rowV['longV'];?></h2>
		</div>
		<div class="course-info">
	  <h3>Versement</h3>
		</div>
  </div>

  <div class="course">
		<div class="course-preview">
			<h2 ><?php echo $rowR['longR'];?></h2>
		</div>
		<div class="course-info">
    <h3>Retrait</h3>
		</div>
  </div>
  <p id="abs"></p>
</div>
  </div>
</div>

  <div class="cnt">
    <div class="form">
      <p>Pourcentage Quotidienne</p>
    <form action="admin.php" method="post">
  <select name="date" class="form__input" type="submit"><option name="date" value="">Selectionner La date</option>
  <?php echo $option; ?></select>
  <button type="submit">Afficher</button>
  </form>
    </div>
  <div id="piechart" class="pie" >
   </div>
  </div>


</div>
</body>
</html>














