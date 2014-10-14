<?php
  if(isset($_POST['text'])){

    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());

    $text = mysqli_real_escape_string($con,$_POST['text']);
<<<<<<< HEAD
    $textSRB = mysqli_real_escape_string($con,$_POST['textSRB']);
    $textDE = mysqli_real_escape_string($con,$_POST['textDE']);
=======
>>>>>>> 3fad32d4f67a4fb5f61fc8a6da4f18337e2a9cc7

    $flag =mysqli_real_escape_string($con,$_POST['flag']);
    $id =mysqli_real_escape_string($con,$_POST['id']);

<<<<<<< HEAD
  

    if($flag==0){ //onda radimo insert
        if(!$insert=mysqli_query($con,"INSERT INTO aboutus (Text,Text_SRB,Text_DE) VALUES ('$text','$textSRB','$textDE')")){
=======
    } 

    if($flag==0){ //onda radimo insert
        if(!$insert=mysqli_query($con,"INSERT INTO aboutus (Text) VALUES ('$text')")){
>>>>>>> 3fad32d4f67a4fb5f61fc8a6da4f18337e2a9cc7
                echo mysql_error();
          }
        else{
              echo "<script>window.location.assign('AboutUsAdm.php')</script>";
            }
<<<<<<< HEAD
    } 
    else{ //ovde radimo update
    if(isset($text)){
        if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text',Text_SRB='$textSRB',Text_DE='$textDE' WHERE ID='$id'")){
=======
    }
    else{ //ovde radimo update
    if(isset($text)){
        if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text' WHERE ID='$id'")){
>>>>>>> 3fad32d4f67a4fb5f61fc8a6da4f18337e2a9cc7
                    echo mysql_error();
              }
            else{
                  echo "<script>window.location.assign('AboutUsAdm.php')</script>";
                }
          }
          else{
<<<<<<< HEAD
               if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text',Text_SRB='$textSRB',Text_DE='$textDE' WHERE ID='$id'")){
=======
               if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text' WHERE ID='$id'")){
>>>>>>> 3fad32d4f67a4fb5f61fc8a6da4f18337e2a9cc7
                    echo mysql_error();
              }
            else{
                 echo "<script>window.location.assign('AboutUsAdm.php')</script>";
                }
          }


      }

    
    mysqli_close($con); 
<<<<<<< HEAD
      } 
  
=======
  }
>>>>>>> 3fad32d4f67a4fb5f61fc8a6da4f18337e2a9cc7
?>

