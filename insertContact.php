<?php
 if(isset($_POST['flag'])){

    $con = mysqli_connect("localhost","root","","lalalulu") or die(mysqli_connect_error());

    $city = mysqli_real_escape_string($con,$_POST['city']);
    $street = mysqli_real_escape_string($con,$_POST['street']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $long =mysqli_real_escape_string($con,$_POST['long']);
    $lati =mysqli_real_escape_string($con,$_POST['lati']);


    $flag =mysqli_real_escape_string($con,$_POST['flag']);
    $id =mysqli_real_escape_string($con,$_POST['id']);

  

    if($flag==0){ //onda radimo insert
        if(!$insert=mysqli_query($con,"INSERT INTO contact (City,Email,Phone,Street,Lon,Lat) VALUES ('$city','$email','$phone','$street','$long','$lati')")){
             
                echo mysql_error();
          }
        else{
              echo "<script>window.location.assign('ContactAdmin.php')</script>";
            }
    } 

    else{ //ovde radimo update        
        if(!$update=mysqli_query($con,"UPDATE contact SET City='$city', Street='$street', Phone='$phone', Email='$email', Lon='$long ,Lat='$lati  WHERE ID='$id'")){
                    echo $city;
                    echo $email;
                    echo $phone;
                    echo $street;
                    echo $lati;
                    echo $long;
                    die(mysql_error());
                }
            else{
                    echo "<script>window.location.assign('ContactAdmin.php')</script>";
                }

        }    
        mysqli_close($con); 
     }
     
     else   
      echo "Neka greska!";
      
?>

