<?php
 /* if(isset($_POST['title'])){*/
 
    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());
   
    $file = $_FILES['photo']['tmp_name'];
    
    //$title = mysqli_real_escape_string($con,$_POST['title']);
    //$content =mysqli_real_escape_string($con,$_POST['content']);
    $image=NULL;
    //echo $image;
    if($_FILES['photo']['name']!=NULL){        
        $image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $image_name=addslashes($_FILES['photo']['name']);
        $image_size=getimagesize($_FILES['photo']['tmp_name']);
        //echo $con;

    }                
        if(!$insert=mysqli_query($con,"INSERT INTO photos (photo) VALUES ('$image')")){
            echo mysql_error();
        }
        else{
            echo "asdasddafdsf";
          echo "<script>window.location.assign('index4.php')</script>";
        }
    mysqli_close($con); 
  /*}*/

?>
