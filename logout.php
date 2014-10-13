<?php

session_start();
session_destroy();

header("Location: /partial/admin.php");
die();

?>


