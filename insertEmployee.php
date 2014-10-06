<?php
  if(isset($_POST['title'])){

    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());
   
    $file = $_FILES['photo']['tmp_name'];

    $title = mysqli_real_escape_string($con,$_POST['title']);
    $name =mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone =mysqli_real_escape_string($con,$_POST['phone']);

    $flag =mysqli_real_escape_string($con,$_POST['flag']);
    $id =mysqli_real_escape_string($con,$_POST['id']);

    $image=NULL;

    if($_FILES['photo']['name']!=NULL){
        $image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $image_name=addslashes($_FILES['photo']['name']);
        $image_size=getimagesize($_FILES['photo']['tmp_name']);

    } 

    if($flag==0){ //onda radimo insert
        if(!$insert=mysqli_query($con,"INSERT INTO employee (Name,Title,Phone,Email,Photo) VALUES ('$name','$title','$phone','$email','$image')")){
                echo mysql_error();
          }
        else{
              echo "<script>window.location.assign('employee.php')</script>";
            }
    }
    else{ //ovde radimo update
    if(isset($image)){
        if(!$update=mysqli_query($con,"UPDATE employee SET Name='$name',Title='$title',Phone='$phone',Email='$email',Photo='$image' WHERE ID='$id'")){
                    echo mysql_error();
              }
            else{
                  echo "<script>window.location.assign('employee.php')</script>";
                }
          }
          else{
               if(!$update=mysqli_query($con,"UPDATE employee SET Name='$name',Title='$title',Phone='$phone',Email='$email' WHERE ID='$id'")){
                    echo mysql_error();
              }
            else{
                 echo "<script>window.location.assign('employee.php')</script>";
                }
          }


      }

    
    mysqli_close($con); 
  }
?>

