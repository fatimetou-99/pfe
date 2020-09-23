<?php 
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:admin-login.php');
}
//$id_modif=$_GET['modif'];

//$search = mysqli_query($con,"SELECT * from agent where id ='$id_modif' ");

//if ( mysqli_num_rows($search) >0){
  //  $rw = mysqli_fetch_assoc($search);
 //  echo'ok';
//}
   
//else{
 //echo'no';
 //}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/agent-list.css">
	<link rel="stylesheet" href="css/font.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>

</style>
	<title>Admin</title>
</head>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agent-list.css">

    <title>Document</title>
</head>
<body>
  <?php  require_once('navbar.php')?>

  <div class="content">
    <div class="card">
    <form id="form" action="modif.php"  method="post" class="frm" >
            <div class="frm-control">
                <label for="nom">Nom Complet</label>
                <input type="text" name="nomag"  id="nom" value="<?php echo $rw['nom_a']?>" required/>
			</div>
			<div class="frm-control">
                <label for="nom">Service </label>
                <input type="text" name="service"  id="nom" value="<?php echo $rw['srv']?>" required/>
               
			</div>
			<div class="frm-control">
                <label for="nom">Email</label>
                <input type="email" name="mail"  id="nom" value="<?php echo $rw['email']?>" required/>
               
            </div>
            <div class="frm-control">
                <label for="tel">Mot de passe</label>
                <input type="text" name="pass" id="tel" value="<?php echo $rw['pass']?>" required/>
                <input type="hidden" name="id" id="tel" value="<?php echo $rw['id']?>" required/>

            </div>
           <div class="foot">
            <button type="submit" name="ajout">Modifier</button>           
            <a href="agent-list.php"class="bt-rs">Annuler </a>
			</div>
        </form>
</div>
</div>
<script>
    function back(){
        window.location =;
    }
</script>
</body>
</html>