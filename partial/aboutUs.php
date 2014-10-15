<?php
    require('../lang/lan_en.php');
    require('../lang/lan_srb.php');

    $lan = isset($_GET['lan']) ? $_GET['lan'] : 'EN';
    switch ($lan) {
    case 'SRB':
    $TEXT = $TEXT_SRB;
    break;
    case 'EN':
    $TEXT = $TEXT_EN;
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo($TEXT['aboutUs_title']); ?></title>
        <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--<link href="../css/stylish-portfolio.css" rel="stylesheet">-->
    <link href="../css/aboutUs.css" rel="stylesheet">
    <link href="../css/buttons.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--<![endif]-->
    </head>
    <body class="bg">
        <!--nav-->
      <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="#"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About us</a></li>
                  <li><a href="#contact">Photo</a></li>
                <li><a href="partial/contact.html">Contact</a></li>
                
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
         <!--kraj nav-->
         
        <!--cloud menu-->
          <div class="menu row text-vertical-center">
                    <div id="menuBall1" class="menuBall">
                        <a href="/index.php?lan=<?php echo $lan?>" class="ball blueball">
                            <div class="menuText">
                               <?php echo($TEXT['home']); ?>
                            </div>
                        </a>
                    </div>
                <div id="menuBall2" class="menuBall">
                    <a href="/partial/aboutUs.php?lan=<?php echo $lan?>" class="ball blueball">
                        <div class="menuText">
                           <?php echo($TEXT['aboutUs']); ?>
                        </div>
                    </a>
                </div>
                <div id="menuBall3" class="menuBall">
                    <a href="#" class="ball blueball">
                        <div class="menuText">
                            <?php echo($TEXT['photo']); ?>
                        </div>
                    </a>
                </div>
                <div id="menuBall4" class="menuBall">
                    <a href="/partial/contact.php?lan=<?php echo $lan?>" class="ball blueball">
                        <div class="menuText">
                            <?php echo($TEXT['contacts']); ?>
                        </div>
                    </a>
                </div>
            </div>

         <!--<div class="menu row text-vertical-center">
                    <div id="menuBall1" class="menuBall">
                        <a href="/index.php" class="ball blueball">
                            <div class="menuText">
                                Home
                            </div>
                        </a>
                    </div>
                <div id="menuBall2" class="menuBall">
                    <a href="#" class="ball blueball">
                        <div class="menuText">
                            About Us
                        </div>
                    </a>
                </div>
                <div id="menuBall3" class="menuBall">
                    <a href="#" class="ball blueball">
                        <div class="menuText">
                            Photo
                        </div>
                    </a>
                </div>
                <div id="menuBall4" class="menuBall">
                    <a href="/partial/contact.html" class="ball blueball">
                        <div class="menuText">
                            Contact
                        </div>
                    </a>
                </div>
            </div>-->
        <!--kraj za cloud menu-->
    <!--courasel za about us-->
        <!--<div class="container">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img alt="Bootstrap template" src="http://placehold.it/1200x400/b4d9a7/ffffff&text=Company Information">
                <div class="carousel-caption">
                    <h3>Company information</h3>
                    <p>
                        Founded in 1892 and headquartered in Fairfield, CT, General Electric Company (LSE; NYSE: GE) 
                        is a technology and financial services company. 
                        The company offers products and services ranging from aircraft engines, 
                        power generation, water processing, and household appliances, among others.
                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="http://placehold.it/1200x400/4f77cb/ffffff&text=Social">
                <div class="carousel-caption">
                    <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                        <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
                        <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
                        <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
                        <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="http://placehold.it/1200x400/d11e4f/ffffff&text=Portfolio">
                <div class="carousel-caption">
                    <h3>Portfolio</h3>
                    <p>
                        This is a list of some of the work done by the company over the past quarter. 
                    </p>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills nav-justified">
            <li data-target="#carousel1" data-slide-to="0" class="active">
                <a href="#">About<small>Lorem ipsum dolor sit</small></a>
            </li>
            <li data-target="#carousel1" data-slide-to="1">
                <a href="#">Projects<small>Lorem ipsum dolor sit</small></a>
            </li>
            <li data-target="#carousel1" data-slide-to="2">
                <a href="#">Portfolio<small>Lorem ipsum dolor sit</small></a>
            </li>
        </ul>
    </div>
</div>-->
        <!--kraj za courasel-->
    <div class="jumbotron ">
        <div class="container">
            <h1><?php echo $TEXT['aboutUS_title']?></h1>

            <p>
               <?php
                  $con=mysqli_connect("localhost","root","","lalalulu");
                    if(mysqli_connect_error())
                       echo mysqli_connect_error();        
                    else{    
                        $result = mysqli_query($con,"SELECT * FROM aboutus");  
                        }
                     while($row = mysqli_fetch_array($result)) {
                         if($lan=="SRB"){
                          $oNama=$row['Text_SRB'];   
                         }else if($lan=="EN"){
                          $oNama=$row['Text'];    

                         }elseif($lan=="DE"){
                             $oNama=$row['Text_DE']; 
                         }
                     }        
                    echo $oNama;
                ?>
            </p>

            <p><a href="/partial/contact.php?lan=<?php echo $lan?>" class="btn btn-primary btn-lg" role="button"><?php echo $TEXT['btn_aboutUs_Contact']?></a></p>
        </div>
        <!--staff-->
        <div class="container">
	<div class="row">
		<h2><?php echo $TEXT['aboutUS_OurEmp']?></h2>
        <div class="col-lg-12">
            <input type="search" class="form-control" id="input-search" placeholder=<?php echo "\"" . $TEXT['aboutUs_Search']. "\""?> >
        </div>


        <div class="searchable-container">
    <?php      
    $con=mysqli_connect("localhost","root","","lalalulu");
    if(mysqli_connect_error())
        echo mysqli_connect_error();        
    else{    
        $result = mysqli_query($con,"SELECT * FROM employee");

        while($row = mysqli_fetch_array($result)) { 
            echo "<div class=\"items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix\">";
                echo "<div class=\"info-block block-info clearfix\">";
                     echo "<div class=\"square-box pull-left\">";
                        if($row['Photo']!=NULL){
                           echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['Photo'] ) . '" width=\'75px;\' height=\'75px;\'/>';
                        
                        }
                        else{
                            echo "<span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>";
                        }
                        echo "</div>";
                        echo "<h4>" . $TEXT['aboutUs_name']. ": " . $row['Name'] . "</h4>";
                        echo "<p>". $TEXT['aboutUs_titleEmp']. ": " . $row['Title'] . "</p>";
                        echo " <span>". $TEXT['aboutUs_phone']. ": " . $row['Phone'] ."</span></br>
                                <span>". $TEXT['aboutUs_email']. ": " . $row['Email'] ."</span>";
                        echo "</div>
                            </div>";
       }
    }     
    mysqli_close($con);      
     
?>



            <!--<div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                       <img src="/img/1.jpg" alt="Nemas slike" width="75px;" height="75px;"/>
                    </div>
                    <h4>Name: Tyreese Burn</h4>
                    <p>Title: Teacher</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>-->
            <!--<div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h4>Name: Brenda Tree</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h4>Name: Glenn Pho shizzle</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h4>Name: Brian Hoyies</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>-->
        </div>

	</div>
</div>
        <!--kraj staff-->
    </div>
       

    <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.0.js">\x3C/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/aboutUs.js"></script>
    </body>
</html>
