<?
include "cnx.php";

$Retrait = mysqli_query($con,"SELECT * FROM statistique where servic ='Retrait'");
$Versement = mysqli_query($con,"SELECT * FROM statistique where servic ='Versement' ");


?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Versement', 'Retrait'],
          <?php 
          
while ($rtr = mysqli_fetch_assoc($Retrait) && $vrs= mysqli_fetch_assoc($Versement)) {
    $totR =$rtr['total'];
    $totV =$vrs['total'];?>
          ['<?php echo $vrs["mois"];?>','<?php echo $totV;?>','<?php echo $totR;?>']
<?php } ?>
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
