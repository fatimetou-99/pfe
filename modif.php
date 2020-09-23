<?php
include "cnx.php";

//Récupération de données 
$nom=$_POST['nomag'];
$srv=$_POST['service'];
$email=$_POST['mail'];
$pass=$_POST['pass'];

$id=$_POST['id'];

$resultat = mysqli_query($con,"UPDATE agent set nom_a='$nom',srv='$srv',email='$email',pass='$pass' where id= '$id'");
if($resultat){
	echo 'modification ok';
}
 else 
{
echo "Ereur de modification";
}
