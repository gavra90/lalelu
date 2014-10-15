<!DOCTYPE html>
<html lang="en">

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


<head>
        <meta charset="utf-8" />
        <title> <?php echo($TEXT['photo_title']); ?></title>
            <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../css/buttons.css" rel="stylesheet">
         <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
       
</head>

<body>
       <form>
            <select onchange="window.location.href= this.form.URL.options[this.form.URL.selectedIndex].value" name="URL">
            <option>Select language</option>
            <option value="/partial/photo.php?lan=EN">English</option>
            <option value="/partial/photo.php?lan=SRB">Srpski</option>        
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
                    <a href="/partial/photo.php?lan=<?php echo $lan?>" class="ball blueball">
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
             <div class="row">
        <?php
            class Photo
                {
                    public $slika;
                    public $album;
                }
            $array[] = new Photo;


            $con=mysqli_connect("localhost","root","","lalalulu");
        if(mysqli_connect_error())
            echo mysqli_connect_error();
         else{
    
           if($result = mysqli_query($con,"SELECT photos.photo as photo, photos.Id as Id, photos.album_id as identifikator, albums.Name as album FROM photos join albums on photos.album_id = albums.ID group by album")){
            //"<select id=\"ID_FunkcijeZadatka\" name=\"ID_FunkcijeZadatka\" style=\"width:775px;\">"
            
            $list = array();
            while($row = mysqli_fetch_array($result)) {
                

                $list[$row['identifikator']]['photo'] = "";
                
                }

                }
                else
                echo "No photo table!";
            }
            
            // <div id="nanoGallery3">
        //<a href="../img/1.jpg" data-ngthumb="../img/1.jpg" data-ngdesc="Description1">Title Image1</a>
        //<a href="../img/a1.jpg" data-ngthumb="../img/a1.jpg">Title Image2</a>
   // </div>

            foreach ($list as $category => $products) {
                //echo '<input type="hidden" class="' . $category .'"';
                echo '<div id="' . $category . '">';
                
                 if($result = mysqli_query($con,"SELECT photos.photo, albums.Name as album FROM photos join albums on photos.album_id = albums.ID WHERE album_id=" .$category )){
                      while($row = mysqli_fetch_array($result)) { 
                echo '<a><img style="width:130px; height:115px;" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" /></a>';
               // echo '<a href=' .base64_encode( $row['photo'] .' data-ngthumb="../img/1.jpg" data-ngdesc="Description1">Title Image1</a>';
    
                }
                  echo '</div>';  //foreach ($products as $productId => $productInfo) {
                    //echo 'Product ' . $productId . ': ' . $productInfo;
                     // etc
            }
            //echo $i;
            

}
            mysqli_close($con);        
        ?>
     
    </div>
            </div>

            </header>    

     <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.0.3.min.js">\x3C/script>')</script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.1.1/css/nanogallery.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.1.1/jquery.nanogallery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="../js/aboutUs.js"></script>-->   

   <script type="text/javascript">
        $(document).ready(function () {
        $("#nanoGallery3").nanoGallery();
        });
    </script>

    <div id="nanoGallery3">
        <a href="../img/1.jpg" data-ngthumb="../img/1.jpg" data-ngdesc="Description1">Title Image1</a>
        <a href="../img/a1.jpg" data-ngthumb="../img/a1.jpg">Title Image2</a>
    </div>     
          
    </body>
</html>
