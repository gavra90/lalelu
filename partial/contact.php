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
        <title> <?php echo($TEXT['contact_title']); ?></title>
            <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../css/buttons.css" rel="stylesheet">
         <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        

    </head>
    <body class="bg">
         
        <form>
            <select onchange="window.location.href= this.form.URL.options[this.form.URL.selectedIndex].value" name="URL">
            <option>Select language</option>
            <option value="contact.php?lan=EN">English</option>
            <option value="contact.php?lan=SRB">Srpski</option>        
            </select>
        </form>



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
        <!--meni-->
            <div class="text-vertical-center contactMenu">
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

                    <a href="/partial/contact.php?lan=<?php echo $lan?>" class="ball blueball">

                        <div class="menuText">
                            <?php echo($TEXT['contacts']); ?>
                        </div>
                    </a>
                </div>
            </div>
                </div>
            <!--meni-->
        <div class="container">
            
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center contactCaption"><?php echo($TEXT['contact_legend']); ?></legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder=<?php  echo "\"".($TEXT['contact_Fname']) . "\""; ?> class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder=<?php  echo "\"". ($TEXT['contact_Lname']) . "\""; ?> class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder=<?php  echo "\"". ($TEXT['contact_Email']) . "\""; ?> class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder=<?php  echo "\"". ($TEXT['contact_phone']) . "\""; ?> class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder=<?php  echo "\"". ($TEXT['contact_message']) . "\""; ?> rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg"><?php  echo ($TEXT['contact_BtnSubmit']); ?></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center contactCaption"><?php  echo ($TEXT['contact_ourOffice']); ?></div>
                    <div class="panel-body text-center">
                        <h4><?php  echo ($TEXT['contact_adressOfice']); ?></h4>
                        <div>
                            <?php
                              $con=mysqli_connect("localhost","root","","lalalulu");
                                if(mysqli_connect_error())
                                    echo mysqli_connect_error();
                                 else{
    
                                    $result = mysqli_query($con,"SELECT * FROM contact");
                                     while($row = mysqli_fetch_array($result)) {
                                         echo $row['Street'] . "<br>";
                                         echo $row['City'] . "<br>";
                                         echo $row['Phone'] . "<br>";
                                         $mail = $row['Email'];
                                         $lon=$row['Lon'];
                                         $lat=$row['Lat'];
                                         echo "<a href=mailto:'$mail'>" .$mail. "</a><br>";
                                        
                                         echo "<input type='text' id='cooLong' hidden value='$lon'/>";
                                         echo "<input type='text' id='cooLat' hidden value='$lat'/>";


                                     }
                                 }
                                mysqli_close($con);
                            ?>
                        
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>




        <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.0.js">\x3C/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            //var myLocation = new google.maps.LatLng(44.801013, 20.522408);
            var myLocation = new google.maps.LatLng($("#cooLong").val(),$("#cooLat").val());
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>


    </body>
</html>
