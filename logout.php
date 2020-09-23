<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2019-02-13
 * Time: 21:44
 */
session_start();
$_SESSION=array();
session_destroy();
header("location:admin-login.php");
?>