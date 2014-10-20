<?php
  if(isset($_POST['title'])){

    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());
   
    $file = $_FILES['photo']['tmp_name'];

    $title = mysqli_real_escape_string($con,$_POST['title']);
    $content =mysqli_real_escape_string($con,$_POST['content']);

    $title_srb = mysqli_real_escape_string($con,$_POST['title_srb']);
    $content_srb =mysqli_real_escape_string($con,$_POST['content_srb']);

    //$title_de = mysqli_real_escape_string($con,$_POST['title_de']);
    //$content_de =mysqli_real_escape_string($con,$_POST['content_de']);

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
              
        if(!$insert=mysqli_query($con,"INSERT INTO news (Content,Image,Title,Content_SRB,Title_SRB) VALUES ('$content','$image','$title','$content_srb','$title_srb')")){
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

