<?php 

session_start();
include "cnx.php";

if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['pass'])) {
 
 extract($_POST);
 //$password= sha1($_POST['password']);

$sql="SELECT * FROM agent WHERE email ='$email' AND pass ='$pass'";

$req=mysqli_query($con, $sql);

if (mysqli_num_rows($req)>0) {

   $_SESSION['vers'] = Array(
       'email' => $email,
       'pass' => $pass
   );
   header("Location:caisier-v.php");

}
else {
   $_SESSION['statusv'] = 'Login ou mot de passe incorrecte !';
   header("Location:login-v.php");


}
}

?>