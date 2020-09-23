<?php 
session_start();
include "cnx.php";
 
if (isset($_POST['ajout'])){
    
$nomag=$_POST["nomag"];
$service=$_POST["service"];
$mail=$_POST["mail"];
$pass=$_POST["pass"];

     $insertA = mysqli_query($con,"INSERT into agent (nom_a,srv,email,pass) values ('$nomag', '$service' ,'$mail', '$pass')");

     if ($insertA){
          echo'ok';
     }
          
    else{
        echo'no';
        }
}

          $id_modif =$_GET['modif'];
          $id_supp =$_GET['supp'];

       $delete = mysqli_query($con,"DELETE from agent where id= '$id_supp'");

     if ($delete){
          echo'ok';
     }
          
    else{
        echo'no';
        }

    ?>