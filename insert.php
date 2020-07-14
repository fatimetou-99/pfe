<?php 


$con=mysqli_connect("localhost","root","","PFE");
if(!$con){die("erreur de type" .mysqli_connect_error()); }
else "OK";


if (isset($_POST["vers"])){
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
                 $date ="2020-07-14";
            $ins_sv="INSERT into versement (date_v,id_cl) values ('". $date . "', '" .$id_cl ."')";

            $sv_res= mysqli_query($con, $ins_sv);
            if($sv_res){
               echo 'data is inserted';
               header("refresh:2;url=index.php");} 
            }
            
      }
  }
     else{
       die ("db query failed. "  .mysqli_connect_error());
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
                 $date ="2020-07-14";
            $ins_rt="INSERT into retrait (date_r,id_c) values ('". $date . "', '" .$id_cl ."')";

            $rt_res= mysqli_query($con, $ins_rt);
            if($rt_res){
               echo 'data is inserted';
               header("refresh:2;url=index.php");}

            }
            
      }
  }
     else{
       die ("db query failed. "  .mysqli_connect_error());
    }
    }



?>