<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
   
   
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/info.css">

    
  <title>Document</title>
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


<div class="card">
  <div class="circle">
    <h2 id="Rcounter">01</h2>
  </div>
  <div class="content">
    <p>Voici votre Numero 
      <br>Bienvenue Dans Notre service
    </p>
    <a href="index.php" class="" id="">Page Principale </a>
  </div>
</div>
</div> 

<script>


document.getElementById('Rcounter').innerHTML = localStorage.getItem('retrait',localStorage.r);

</script>
</body>
</html>

