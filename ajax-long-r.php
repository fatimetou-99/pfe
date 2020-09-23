<?php 


    require_once "cnx.php";

$sqlR = mysqli_query($con,"SELECT max(id_rt) as longR from temp_r");
if (mysqli_num_rows($sqlR)>0){
		 $rowR = mysqli_fetch_assoc($sqlR) ;
}
echo $longR=$rowR['longR'];


?>