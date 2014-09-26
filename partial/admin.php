<!DOCTYPE html>

<html lang="en">
    <head>
         <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
         <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<style type="text/css">
    .form_hover {
        padding: 0px;
        position: relative;
        overflow: hidden;
        height: 300px;
    }

        .form_hover:hover .header {
            opacity: 1;
            transform: translateY(-250px);
            -webkit-transform: translateY(-250px);
            -moz-transform: translateY(-250px);
            -ms-transform: translateY(-250px);
            -o-transform: translateY(-250px);
        }

        .form_hover img {
            z-index: 4;
        }

        .form_hover .header {
            position: absolute;
            top: 250px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form_hover .blur {            
            height: 300px;
            z-index: 5;
            position: absolute;
            width: 100%;
        }

        .form_hover .header-text {
            z-index: 10;
            color: #fff;
            position: absolute;
            height: 300px;
            text-align: center;
            top: -20px;
            width: 100%;
        }
    
    
    
   
</style>
</head>
<body>

    <div class="page-header text-center">
        <h1>Welcome admin <small></small></h1>
    </div>

<div class="container ">  
    <div class="row">
        <div class="col-lg-12">
            <div class="form_hover " style="background-color: #cccccc;">
                <p style="text-align: center; margin-top: 20px;">
                    <i class="fa fa-gears" style="font-size:187px;"></i>
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-primary" style="height:320px;">
                            <div class="panel-heading">
                                <h3 style="background-color:#428BCA; color:white; padding:10px;">
                                    <i class="fa fa-arrows-v"></i>    Login Form    <i class="fa fa-arrows-v"></i></h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="../checklogin.php">
                                <div class="form-group">
                                    <input name="myusername" id="myusername" type="text" class="form-control input-lg" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input name="mypassword" id="mypassword" type="password" class="form-control input-lg" placeholder="Password" required>
                                </div>                                
                                <div class="form-group">
                                    <button id="login" type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                                </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>   
  <?php
       if(isset($_GET['err'])){
           $err=$_GET['err'];
           echo "<h2 style='color:Red;text-align: center;'>Wrong username or password</h2>";
       }
    

    ?>
    <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.0.js">\x3C/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>