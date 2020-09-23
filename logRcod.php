<?php 
session_start();
include "cnx.php";

if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['pass'])) {
 
 extract($_POST);
 
 //$password= sha1($_POST['password']);

$sql="SELECT * FROM agent WHERE email ='$email' AND pass ='$pass'";

$req=mysqli_query($con, $sql);

if (mysqli_num_rows($req)>0) {

   $_SESSION['ret'] = Array('email' => $email, 'pass' => $pass);
   header("Location:caisier-r.php");

}
else {
    $_SESSION['statusr'] = 'Login ou mot de passe incorrecte !';
    header("Location:login-r.php");


}
}

?>