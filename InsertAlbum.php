<?php
  //if(isset($_POST['name'])){

    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());
   
    //echo "test";

    $name = mysqli_real_escape_string($con,$_POST['name']);
    

    //}
   // else{
      //  if($image_size==FALSE)
       //      echo "That's not an image";
       // else{
              
        if(!$insert=mysqli_query($con,"INSERT INTO albums (Name) VALUES ('$name')")){
            echo mysql_error();
        }
        else{
          echo "<script>window.location.assign('index4.php')</script>";
        }

      //  }
    //}
    mysqli_close($con); 
  //}
?>
