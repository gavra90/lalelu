<?php
  if(isset($_POST['text'])){

    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());

    $text = mysqli_real_escape_string($con,$_POST['text']);

    $flag =mysqli_real_escape_string($con,$_POST['flag']);
    $id =mysqli_real_escape_string($con,$_POST['id']);

    } 

    if($flag==0){ //onda radimo insert
        if(!$insert=mysqli_query($con,"INSERT INTO aboutus (Text) VALUES ('$text')")){
                echo mysql_error();
          }
        else{
              echo "<script>window.location.assign('AboutUsAdm.php')</script>";
            }
    }
    else{ //ovde radimo update
    if(isset($text)){
        if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text' WHERE ID='$id'")){
                    echo mysql_error();
              }
            else{
                  echo "<script>window.location.assign('AboutUsAdm.php')</script>";
                }
          }
          else{
               if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text' WHERE ID='$id'")){
                    echo mysql_error();
              }
            else{
                 echo "<script>window.location.assign('AboutUsAdm.php')</script>";
                }
          }


      }

    
    mysqli_close($con); 
  }
?>

