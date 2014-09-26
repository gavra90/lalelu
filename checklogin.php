<?php

ob_start();
        $host="localhost"; // Host name
        $username=""; // Mysql username
        $password=""; // Mysql password
        $db_name="lalalulu"; // Database name
        $tbl_name="members"; // Table name

        // Connect to server and select databse.
        $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());
        mysqli_select_db($con, "$db_name")or die("cannot select DB");

        // Define $myusername and $mypassword
        $myusername=$_POST['myusername'];
        $mypassword=$_POST['mypassword'];

        // To protect MySQL injection (more detail about MySQL injection)
        $myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);
        $myusername = mysqli_real_escape_string($con, $myusername);
        $mypassword = mysqli_real_escape_string($con, $mypassword);

        $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

       if($result=mysqli_query($con, $sql)){

        // Mysql_num_row is counting table row
        $count=mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count==1){
            session_start();
        // Register $myusername, $mypassword and redirect to file "login_success.php" $_SESSION["zim"]
        $_SESSION["myusername"] = "drasko";
        //session_register("mypassword");
        header("location:index3.php");
        }
        else {
         
             session_start();
             $_SESSION["myusername"] = "NIJE DRASKO!";
           
             header("location:/partial/admin.php?err=1");
        }
        }
        else{
            echo "DB unreachable!";

        }

ob_end_flush();
?>