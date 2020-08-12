<?php 

$con=mysqli_connect("localhost","root","","PFE");
if(!$con){
   die("erreur de type" .mysqli_connect_error());
 }
else "OK";

?>