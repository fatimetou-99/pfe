<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">

<script>
function update() {
  $.get("insert.php", function(data) {
    $("#blog-posts").html(data);
    window.setTimeout(update, 10000);
  });
}
</script>
</head>
<body>
<div class="container" >

<div class="header" >
		<div class="navbar">
			<div class="logo"> <a  href="index.php"><img src="images/logo.png"  alt="LOGO" width="19%" height="70px"></a></div>
		    
			<img src="images/fr.png" width="50px" height="50px"></li>
	    </div>
	</div> 

<div class="cnt">


<div class="blog-posts">
    
    <div class="post">
         <div>
			<div class="titre" style="background-color:silver;color: white; height: 200px; text-align: center;">
			 <h1 style="text-align: center; padding-top: 20px;" >Numero<br> Actuelle</h1>
		     </div>
		 <div class="post-content"><h2>Retrait :<p  class="date" id="rsuiv"> 0</p> Versement : <p class="date" id="vsuiv"> 0</p>
		  </div> 
      </div>
	</div>

    <div class="post">
        <div class="contenue">
		 <div class="titre" style="background-color:powderblue;color: white; height: 200px; text-align: center;">
		 <h1 style="text-align: center; padding-top: 20px;">Longeur<br> De le File</h1>
		 </div>
		 <div class="post-content"><h2>Retrait :<p  class="date" id="rt" > 0</p> Versement : <p class="date" id="vr"> 0</p>
		  </div> 
      </div>
	</div>

    <div class="post">
	 <div class="contenue">
		 <div class="titre" style="background-color: wheat;color: white; height: 200px; text-align: center;">
		 <h1 style="text-align: center; padding-top: 20px;">Numero<br> Actuelle</h1>
		 </div>
		 <div class="post-content"><h2>Retrait :<p  class="date"  > 0</p> Versement : <p class="date" > 0</p>
			
			
		  </div> 
      </div>
	</div>
</div>

<div class="foot">
<a class="big pulse" id="myBtn" >Joindre la fle d'attente</a>
</div>


<div id="myModal" class="modal">
  
	<div class="modal-content">
		<span class="close">&times;</span>
		<h2>Veuiller Choisir</h2>
		<p style="font-size: large;"> Nos Services :</p>
	   <div >
			<a style="margin: 15px;" href="vrs.php"   class="button pulse">
				Versement
			</a>
			<a style="margin: 15px;" href="rtr.php"  class="button pulse">
				Retrait
			</a>
		</div>
		
	</div>
  
  </div>


</div>
</div>
<script>
   
	// Get the modal
	 var modal = document.getElementById("myModal");
    
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks the button, open the modal 
	btn.onclick = function() {
		modal.style.display = "block";
   
	}
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}

/*
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();

document.getElementById("date").innerHTML = d + " - " + m + " - " + y;
document.getElementById("date2").innerHTML = d + " - " + m + " - " + y;
document.getElementById("date3").innerHTML = d + " - " + m + " - " + y;
*/

document.getElementById('vr').innerHTML = localStorage.getItem('Versement',localStorage.v);
document.getElementById('vsuiv').innerHTML = localStorage.getItem("v-suiv", localStorage.vsv);


document.getElementById('rt').innerHTML = localStorage.getItem('retrait',localStorage.r);
document.getElementById('rsuiv').innerHTML = localStorage.getItem("r-suiv", localStorage.rsv);

</script>
</body>                  
</html>

