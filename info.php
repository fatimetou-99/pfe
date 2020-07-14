<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	 
    <link rel="stylesheet" type="text/css" href="css/sheet.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="script/script.js"></script>
	
</head>
<body>
	

	<div class="header">
		<div class="navbar">
			<div class="logo"> <a href="index.php"><img src="images/logo.png"  alt="LOGO" width="25%" height="90px"></a></div>
		    <div class="langue">
			    <ul>
				<li><img src="images/fr.png" width="50px" height="50px"></li>
				<li><span class="lng">Langue</span></li>
			    </ul>
		    </div>
	    </div>
	</div> 
	 
    <h1>Service de Versement</h1>
  <div class="container">
    <form class="login"  action="insert.php" method="POST">  
  <h1>Entrer Vos donnees S.V.P</h1>
  <label>Votre Nom</label><br>
  <input type="text" placeholder="nom" name="nom"><br>

  <label>Numero du telephone</label><br>

  <input type="text" placeholder="num telephone" name="tel"><br>
  
      <button name="vers" class="btn btn-success" >Versement</button>
      <button type="submit" name="retrait" class="btn btn-danger">Retrait</button>
  
  
  </form>
  </div>  
</body>
</html>

