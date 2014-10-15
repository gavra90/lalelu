<?php
  if(isset($_POST['title'])){

    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());
   
    $file = $_FILES['photo']['tmp_name'];

    $title = mysqli_real_escape_string($con,$_POST['title']);
    $content =mysqli_real_escape_string($con,$_POST['content']);
    $image=NULL;

    if($_FILES['photo']['name']!=NULL){
        $image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $image_name=addslashes($_FILES['photo']['name']);
        $image_size=getimagesize($_FILES['photo']['tmp_name']);

    }
   // else{
      //  if($image_size==FALSE)
       //      echo "That's not an image";
       // else{
              
        if(!$insert=mysqli_query($con,"INSERT INTO news (Content,Image,Title) VALUES ('$content','$image','$title')")){
            echo mysql_error();

        }
        else{
          echo "<script>window.location.assign('index3.php')</script>";
        }

      //  }
    //}
    mysqli_close($con); 
  }
?>

