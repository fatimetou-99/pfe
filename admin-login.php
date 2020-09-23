<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js"></script>
</head>

<body>
    <div class="container">
   
        <form action="logAcod.php" method="POST" class="form">
        <img class="logo" src="images/logo.png"  alt="LOGO" >
       <br> 
        <?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
{
    echo '<div class="error"> '.$_SESSION['status'].' </div>';
    unset($_SESSION['status']);
}
?>
            <div class="form-group">
                <label for="name" class="form-label">Login </label>
                <input type="text" class="form-control" id="name" name="login" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="email" name="pwd" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="butn">
                <button type="submit" >Login </button>
            </div>
        </form>
    </div>
  
</body>

</html>