
<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
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
 

if (isset($_POST["versement"])){
   
     $nom=$_POST["nom"];
     $tel=$_POST["tel"];

     $chercheV = mysqli_query($con,"SELECT * from client where nom ='$nom' and tel ='$tel' ");

     if (mysqli_num_rows($chercheV)>0){
       // Client deja dans la base
            $rwV = mysqli_fetch_assoc($chercheV) ;
            $id_cl =$rwV['id_cl'];
            $date =date('Y-m-d');
            $ins_V = mysqli_query($con, "INSERT into versement (date_v,id_cl) values ('". $date . "', '" .$id_cl ."')");
       if($ins_V){
           echo 'ok';
        ?>
        <script>
         swal({
           title: "Wow!",
           text: "Message!",
           icon: "success"
       }).then(function() {
           window.location = "vs-info.php";
       });

       CounteV();
              function CounteV() {
                if(typeof(Storage) !== "undefined") {
                  if (localStorage.v) {
                    localStorage.v = Number(localStorage.v)+1;
                  } else {
                    localStorage.v = 1;
                  }
                  
                  localStorage.setItem("Versement", localStorage.v);
              } else {
                  document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                }
              }
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
            $insert_V = mysqli_query($con, "INSERT into versement (date_v,id_cl) values ('". $date . "', '" .$id_cl ."')");  
            if($insert_V){
                
                echo' ok';
                ?>
               <script>
                swal({
                  title: "Wow!",
                  text: "Message!",
                  icon: "success"
              }).then(function() {
                  window.location = "vs-info.php";
              });
  
              CounteV();
              function CounteV() {
                if(typeof(Storage) !== "undefined") {
                  if (localStorage.v) {
                    localStorage.v = Number(localStorage.v)+1;
                  } else {
                    localStorage.v = 1;
                  }
                  
                  localStorage.setItem("Versement", localStorage.v);
              } else {
                  document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                }
              }
              
              </script>
  <?php
              } 
           }
                                               
           } 
            
   }

}

// Retrait

else if(isset($_POST["retrait"])){
   
     $nom=$_POST["nom"];
     $tel=$_POST["tel"];

     $cherchR = mysqli_query($con,"SELECT * from client where nom ='$nom' and tel ='$tel' ");

     if (mysqli_num_rows($cherchR)>0){
       // Client deja dans la base
            $rw = mysqli_fetch_assoc($cherchR) ;
            $id_c =$rw['id_cl'];
            $date =date('Y-m-d');

            $ins_R = mysqli_query($con,"INSERT into retrait (date_r,id_c) values ('". $date . "', '" .$id_c ."')");
       if($ins_R){
           echo 'ok';
        ?>
        <script>
         swal({
           title: "Wow!",
           text: "Message!",
           icon: "success"
       }).then(function() {
           window.location = "rt-info.php";
       });

       CounteR();
              function CounteR() {
                if(typeof(Storage) !== "undefined") {
                  if (localStorage.r) {
                    localStorage.r = Number(localStorage.r)+1;
                  } else {
                    localStorage.r = 1;
                  }
                  
                  localStorage.setItem("retrait", localStorage.r);
              } else {
                  document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                }
              }
                
       </script>
<?php
       }
     }
          
   // Client n'est pas dans la base
    else{
        $insert_c= mysqli_query($con, "INSERT into client (nom,tel) values ('". $nom . "', '" .$tel ."')");
        if($insert_c)
        {
        $searchR = mysqli_query($con,"SELECT * from client where nom ='$nom' and tel ='$tel' ");
        if (mysqli_num_rows($searchR)>0) {

             $rowR = mysqli_fetch_assoc($searchR);
                 $id_c =$rowR['id_cl'];
                 $date =date('Y-m-d');
            $insert_R = mysqli_query($con, "INSERT into retrait (date_r,id_c) values ('". $date . "', '" .$id_c ."')");  
           
            if($insert_R){
                echo' ok';
                ?>
               <script>
                swal({
                  title: "Wow!",
                  text: "Message!",
                  icon: "success"
              }).then(function() {
                  window.location = "rt-info.php";
              });
  
              CounteR();
              function CounteR() {
                if(typeof(Storage) !== "undefined") {
                  if (localStorage.r) {
                    localStorage.r = Number(localStorage.r)+1;
                  } else {
                    localStorage.r = 1;
                  }
                  
                  localStorage.setItem("retrait", localStorage.r);
              } else {
                  document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                }
              }
                
              </script>
  <?php
              } 
           }
                                               
           } 
            
   }

}

    ?>