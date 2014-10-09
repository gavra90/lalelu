<!DOCTYPE html>
<html lang="en">

<?php
    require('lang/lan_en.php');
    require('lang/lan_srb.php');

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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/buttons.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--<![endif]-->
</head>

<body>
       <form>
            <select onchange="window.location.href= this.form.URL.options[this.form.URL.selectedIndex].value" name="URL">
            <option>Select language</option>
            <option value="index.php?lan=EN">English</option>
            <option value="index.php?lan=SRB">Srpski</option>        
            </select>
        </form>




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
                <li class="active"><a href="#"><?php echo($TEXT['home']); ?></a></li>
                <li><a href="/partial/aboutUs.php"><?php echo($TEXT['aboutUs']); ?></a></li>
                  <li><a href="#contact"><?php echo($TEXT['photo']); ?></a></li>
                <li><a href="partial/contact.html"><?php echo($TEXT['contacts']); ?></a></li>
                
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
         <!--kraj nav-->
    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Lalelu Kindergarden</h1>
            <div class="menu row">
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
                    <a href="partial/contact.php?lan=<?php echo $lan?>" class="ball blueball">
                        <div class="menuText">
                            <?php echo($TEXT['contacts']); ?>
                        </div>
                    </a>
                </div>
            </div>
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
        </ol>

<?php      
        $con=mysqli_connect("localhost","root","","lalalulu");
        if(mysqli_connect_error())
            echo mysqli_connect_error();
        
        else{
    
         $result = mysqli_query($con,"SELECT * FROM news ORDER BY DATE DESC LIMIT 0 , 4");
 
         $counter=1;
       echo "<div class=\"carousel-inner\">";   
        while($row = mysqli_fetch_array($result)) {  
           if($counter==1)
            echo "<div class=\"item active\">";
            else
            echo "<div class=\"item\">";
                if($row['Image']!=NULL){
                    echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['Image'] ) . '" />';
                echo "<div class=\"carousel-caption\">";
                    echo "<h3 class=\"title\">" . $row['Title'] . "</h3>";
                    echo "<p class=\"content\">" . $row['Content'] . "</p>";
                echo "</div>";
                }else{
                    echo "<div style=\"height: 330px;\">"; 
                     echo "<h3 class=\"title\">" . $row['Title'] . "</h3>";
                     echo "<p class=\"content\">" . $row['Content'] . "</p>";
                     echo "</div>"; 
                }
            echo "</div>";  
            $counter=5; 
             }
        }
     echo "</div>";
 
     
        mysqli_close($con);      
     
?>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>  
            <br>
            <!--<a href="#about" class="btn btn-dark btn-lg">Find Out More</a>-->
        </div>
    </header>  

    <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.js">\x3C/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>  

</body>

</html>
