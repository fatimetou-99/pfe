<?
require_once "cnx.php";

$sqlV = mysqli_query($con,"SELECT max(id_vers) as longV from temp_v");
if (mysqli_num_rows($sqlV)>0){
         $rowV = mysqli_fetch_assoc($sqlV) ;         
}

echo $longV= $rowV['longV'];;
?>