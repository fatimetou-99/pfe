<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	 
	<script src="script/script.js"></script>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">


</head>
<body>
<div class="container">

	
	<div class="header">
		<div class="navbar">
			<div class="logo"> <a href="#"><img src="images/logo.png"  alt="LOGO" width="25%" height="90px"></a></div>
		    
	    </div>
	</div> 
	
<div class="blog-posts" >
    
    <div class="post">
            <div >
			<div class="titre" style="background-color:silver;color: white; height: 200px; text-align: center;">
		 <h1 style="text-align: center; padding-top: 20px;">Numero<br> Actuelle</h1></div>
			<div class="post-content"><h2 >Retrait : 40<br> Versement : 40
			<br>
			 <span class="date">14-Juillet-2020</span>
		
		</div> 
        </div>
    </div>

    <div class="post" >
        <div class="contenue">
		 <div class="titre" style="background-color: wheat;color: white; height: 200px; text-align: center;">
		 <h1 style="text-align: center; padding-top: 20px;">Numero<br> Actuelle</h1></div>
            <div class="post-content"><h2>Retrait : 40<br> Versement : 40
			</h2>
			<br>
			   <span class="date">14-Juillet-2020</span>
			</div> 
        </div>
    </div>

    <div class="post">
        <div class="contenue">
		<div class="titre" style="background-color:powderblue;color: white; height: 200px; text-align: center;">
		 <h1 style="text-align: center; padding-top: 20px;">Numero<br> Actuelle</h1></div>
			<div class="post-content"><h2>Retrait : 40<br> Versement : 40 </h2>	
			<br>
			 <span class="date">14-Juillet-2020</span>
			</div> 
        </div>
	</div>
	

	<a href="info.php" style="color :rgb(24, 148, 80); text-decoration:none;"><button type="button">Joindre la file d'attente</button></a>
</h6>
</div>

</div>

<script>
	var b = localStorage.getItem("myValue");
    document.getElementById('first').innerHTML=b;
</script>
</body>
</html>

