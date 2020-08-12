<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">


    
</head>
<body>
<div class="container">

    <div class="header">
        <div class="navbar">
            <div class="logo"><a href="index.html"><img src="images/logo.png"  alt="LOGO" width="19%" height="70px"></a></div>
            <img src="images/fr.png" width="50px" height="50px"></li>
        </div>
    </div> 
    <br><br>
    <div class="content">
        <div class="head">
            <h2>Passer la Demande</h2>
        </div>
        <form id="form" action="insert.php"  method="post"class="frm" >
            <div class="frm-control">
                <label for="nom">Nom Complet</label>
                <input type="text" name="nom"  id="nom" required/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="frm-control">
                <label for="tel">Telephone</label>
                <input type="number" name="tel" id="tel" required/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
           
            
            <button type="submit" name="retrait" >Demander</button>           
            <button type="reset" class="bt-rs">Annuler</button>

        </form>
    </div>
<script>
/* Counter
function rtCounter() {
   if(typeof(Storage) !== "undefined") {
   if (localStorage.count) {
  localStorage.count = Number(localStorage.count)+1;
 } else {
 localStorage.count = 1;
 }
 localStorage.setItem("r", localStorage.count);

} else {
 document.getElementById("result").innerHTML = "Dsl, votre navigateur ne support pas web storage...";
}

}
*/
  </script>
  </body>
</html>

