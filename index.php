<?php 
require_once "cnx.php";
require_once "header.php";


?>

<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<!-- A meta tag that redirects after 5 seconds to one of my PHP tutorials-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/font.css" />

</head>
<body>
<div class="container">

	
<div class="blog-posts">
    <div class="post">
         <div>
			<div class="titre1" >
			 <h1  class="txt1">Numero<br> Actuelle</h1>
		     </div>
		 <div class="post-content"><h2>Retrait :<p  class="date" id="act_R"> </p> Versement : <p class="date" id="act_V"></p>
		  </div> 
      </div>
	</div>

    <div class="post">
        <div class="contenue">
		 <div class="titre2" >
		 <h1 class="txt2">Longeur De <br>la File d'attente</h1>
		 </div>
		 <div class="post-content"><h2>Retrait :<p  class="date" id="longR"> </p> Versement : <p class="date" id="longV" > </p>
		  </div> 
      </div>
	</div>

    <div class="post">
	 <div class="contenue">
		 <div class="titre3" >
		 <h1 class="txt3">Numero<br> Actuelle</h1>
		 </div>
		 <div class="post-content"><h2>Retrait :<p  class="date"  > 0</p> Versement : <p class="date" > 0</p>
			
			
		  </div> 
      </div>
	</div>
</div>

<div class="foot">
<a class="big pulse"  data-toggle="modal" data-target="#myModal">Joindre la file d'attente</a>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <div class="bx"> 
			  <h2>Veuiller Choisir</h2>
			  <h4> Nos Services :</h4>
                <a href="vrs.php"  class="button pulse">Versement</a>
			   <a href="rtr.php"  class="button pulse">Retrait</a> 
			</div>    
        </div>
      </div>
    </div>
  </div>
 

</div>
</body>





<script type='text/JavaScript'>

function go(){
  $('#longV').load('ajax-long-v.php');
  $('#longR').load('ajax-long-r.php');
  $('#act_R').load('compt_r.txt');  
  $('#act_V').load('compt_v.txt');
  }
 setInterval(function(){ go(); }, 1000);

</script>

</html>


