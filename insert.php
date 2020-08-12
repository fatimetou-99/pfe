

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

    
</head>
<?php 

include "cnx.php";
 

if (isset($_POST["versement"])){
   
     $nom=$_POST["nom"];
     $tel=$_POST["tel"];
     $insert_cl="INSERT into client (nom,tel) values ('". $nom . "', '" .$tel ."')";
    
     $ins_res= mysqli_query($con, $insert_cl);
     if($ins_res){
        
        $search ="SELECT * from client where nom ='$nom' and tel ='$tel' ";
        $search_run =mysqli_query($con,$search);
        if (mysqli_num_rows($search_run)>0) {
            while ($row = mysqli_fetch_assoc($search_run)) {
                 $id_cl =$row['id_cl'];
                 $date =date('Y-m-d');
            $ins_sv="INSERT into versement (date_v,id_cl) values ('". $date . "', '" .$id_cl ."')";

            $sv_res= mysqli_query($con, $ins_sv);
            if($sv_res){
               echo 'data is inserted';
            } 
            }
            
      }
  }
     else{
       die ("db query failed." .mysqli_connect_error());
    }
    }

else if(isset($_POST["retrait"])){
     $nom=$_POST["nom"];
     $tel=$_POST["tel"];
     $insert_cl="INSERT into client (nom,tel) values ('". $nom . "', '" .$tel ."')";
    
     $ins_res= mysqli_query($con, $insert_cl);
     if($ins_res){
        
        $search ="SELECT * from client where nom ='$nom' and tel ='$tel' ";
        $search_run =mysqli_query($con,$search);
        if (mysqli_num_rows($search_run)>0) {
            while ($row = mysqli_fetch_assoc($search_run)) {
                 $id_cl =$row['id_cl'];
                 $date =date('Y-m-d');
            $ins_rt="INSERT into retrait (date_r,id_c) values ('". $date . "', '" .$id_cl ."')";

            $rt_res= mysqli_query($con, $ins_rt);
            if($rt_res){
              echo'ok';
              
           
            }

            }
            
      }
  }
     else{
       die ("db query failed. "  .mysqli_connect_error());
    }
    }



?>