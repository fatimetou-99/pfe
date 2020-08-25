<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
   
   
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/try.css">

    <style>
.btn{
    display:flex;
    justify-content:center;
    align-items:center;
}
button {

  background-color: teal;
  width:250px;
  height:50px;
  padding: 10px 10px;
  color :#fff;
  border-radius: 40px;
  font-size: 20px;
}

    </style>
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
    <h2 id="Rattente"></h2>
  </div>
  <div class="content">
    <p>Personnes en attente
    </p>
  </div>
</div>

<div class="card">
  <div class="circle">
    <h2 id="r-act"></h2>
  </div>
  <div class="content">
    <p>Numero Actuelle
      <br>
    </p>
  </div>
</div>
</div> 
<div class="btn">
<button onclick="R_act()" >Suivant</button>
</div>
<script>
function R_act(){
    if(typeof(Storage) !== "undefined") {
                if (localStorage.rsv) {
                  localStorage.rsv = Number(localStorage.rsv)+1;
                } 
                else {
                  localStorage.rsv = 1;
                }
                 
                localStorage.setItem("r-suiv", localStorage.rsv);
            } 
            else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
              }
}


var c = localStorage.getItem('retrait',localStorage.r);
var d = localStorage.getItem("r-suiv", localStorage.rsv);

document.getElementById('Rattente').innerHTML = c-d;

document.getElementById('r-act').innerHTML = localStorage.getItem("r-suiv", localStorage.vsv);

</script>
</body>
</html>

