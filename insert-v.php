
<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    body{
      background-color :#f0f0f0;
    }
    </style>
 
    
</head>
<?php 

include "cnx.php";
include "vrs.php";

if(isset($_POST['versement'])){

$nom=$_POST["nom"];
$tel=$_POST["tel"];


$chercheV = mysqli_query($con,"SELECT * from client where nom ='$nom' and tel ='$tel' ");

if (mysqli_num_rows($chercheV)>0){

  // Client deja dans la base
       $rwV = mysqli_fetch_assoc($chercheV) ;
       $id_cl =$rwV['id_cl'];
       $date =date('Y-m-d');
       $ins_V = mysqli_query($con, "INSERT into temp_v (date_v,id_cl) values ('". $date . "', '" .$id_cl ."')");
  if($ins_V){

   ?>
   <script>
    swal({
      title: "Super!",
      text: "Vos Avez etes ajoutee au file!",
      icon: "success"
  }).then(function() {
      window.location = "vs-info.php";
  });

  </script>
<?php
  }
}
     
// Client n'est pas dans la base
else{
   $insert_cl = mysqli_query($con, "INSERT into client (nom,tel) values ('". $nom . "', '" .$tel ."')");
if($insert_cl){
   
   $searchV = mysqli_query($con,"SELECT * from client where nom ='$nom' and tel ='$tel' ");
   if (mysqli_num_rows($searchV)>0) {

        $rowV = mysqli_fetch_assoc($searchV);
            $id_cl =$rowV['id_cl'];
            $date =date('Y-m-d');
       $insert_V = mysqli_query($con, "INSERT into temp_v (date_v,id_cl) values ('". $date . "', '" .$id_cl ."')");  
       if($insert_V){

           ?>
          <script>
           swal({
             title: "Super!",
         text: "Vos Avez etes ajoutee au file!",
             icon: "success"
         }).then(function() {
             window.location = "vs-info.php";
         });

         
         </script>
<?php
         } 
      }
                                          
      } 
} 

}
?>