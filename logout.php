<?php

session_start();
$_SESSION["myusername"]="DRASKO_UBICEMO_TE";
//session_destroy();

//header("Location: /partial/admin.php");
// header("location:partial/admin.php");

echo "<script>window.location.assign('/partial/admin.php')</script>";

die();

?>


