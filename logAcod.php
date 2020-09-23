<?php 
session_start();
include "cnx.php";

if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['pwd'])) {
 
 extract($_POST);
 
 //$password= sha1($_POST['password']);

$sql="SELECT * FROM admn WHERE login ='$login' AND pass ='$pwd'";

$req=mysqli_query($con, $sql);

if (mysqli_num_rows($req)>0) {

   $_SESSION['admin'] = Array('login' => $login, 'pwd' => $pwd);
   header("Location:admin.php");

}
else {
    $_SESSION['status'] = 'Login ou mot de passe incorrecte !';
    header("Location:admin-login.php");


}
}

?>