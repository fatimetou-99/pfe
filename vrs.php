<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">


</head>
<body>
<div class="container" >

    <div class="header" >
        <div class="navbar">
            <div class="logo"> <a href="index.html"><img src="images/logo.png"  alt="LOGO" width="19%" height="70px"></a></div>
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
           
            
            <button type="submit" name="versement">Demander</button>           
            <button type="reset" class="bt-rs">Annuler</button>

        </form>
    </div>
    <script>
/*
const form = document.getElementById('form');
const username = document.getElementById('nom');
const phone = document.getElementById('tel');


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});



function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const phoneValue = phone.value.trim();
	
    
	if(usernameValue === '') {
    setErrorFor(username, 'Le champ doit etre remplis');
    return false;
    }
     else {
    setSuccessFor(username);
	}
		
    if(phoneValue === '') {
		setErrorFor(phone, 'Le champ doit etre remplis');
		} else if( phoneValue.length <8 ){
            setErrorFor(phone, 'Numero de telephone incorrect');
            return false;
		} else{
		setSuccessFor(phone);
		}
		
	
	function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'frm-control error';
	small.innerText = message;
	}
	
	function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'frm-control success';
	}}
    
  */  
    
  </script> 
</body>
</html>