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
    <h2 id="Vattente"></h2>
  </div>
  <div class="content">
    <p>Personnes en attente
    </p>
  </div>
</div>

<div class="card">
  <div class="circle">
    <h2 id="v-act">01</h2>
  </div>
  <div class="content">
    <p>Numero Actuelle
      <br>
    </p>
  </div>
</div>
</div> 
<div class="btn">
<button onclick="Vsuivant()" >Suivant</button>
</div>
<script>
function Vsuivant(){
    if(typeof(Storage) !== "undefined") {
                if (localStorage.vsv) {
                  localStorage.vsv = Number(localStorage.vsv)+1;
                } 
                else {
                  localStorage.vsv = 1;
                }
                 
                localStorage.setItem("v-suiv", localStorage.vsv);
            } 
            else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
              }
}


var a = localStorage.getItem('Versement',localStorage.v);
var b = localStorage.getItem("v-suiv", localStorage.vsv);

document.getElementById('Vattente').innerHTML = a-b;

document.getElementById('v-act').innerHTML = localStorage.getItem("v-suiv", localStorage.vsv);

</script>
</body>
</html>

