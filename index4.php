<!DOCTYPE html>

<html lang="en">
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/a5734b29083/integration/jqueryui/dataTables.jqueryui.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.js">\x3C/script>')</script>
        <script src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/a5734b29083/integration/jqueryui/dataTables.jqueryui.js"></script>
         <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

          <script type="text/javascript" charset="utf8" src="/js/index4.js"></script>
        <script src="../js/inputFile.js"></script>
        <meta charset="utf-8" />
        <title></title>

<style type="text/css">
             /*za unos file*/
    .container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
/*legend {
    color: #36A0FF;
}*/
    #btnSubNew {
        margin-top: 5px;
    }
    /*kraj za unos*/
    .del:hover {
        cursor: pointer;
    } 
    .logo {
   
    width: 150px;
    text-align: center;
    /*padding-top: 17px;
    margin-right: 50px;*/
    background: url(../img/logo.jpg) no-repeat center center scroll;
    /*-webkit-background-size: cover;*/
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
           
        </style>
    </head>
    <body>
         <!--nav-->
      <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                <li ><a href="/index3.php">News</a></li>
                <li ><a href="/employee.php">Employee</a></li>
                  <li class="active"><a href="/index4.php">Photo</a></li>
                    <li><a href="/ContactAdmin.php">Contact</a></li>
                  <li><a href="/AboutUsAdm.php">AboutUs</a></li>
                  
              </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../logout.php">Log out</a></li>
                </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
         <!--kraj nav-->
    <div class="container">

    <div class="page-header">
        <h1>View and insert news <small>welcome Admin</small></h1>
    </div>
<?php
session_start();
if($_SESSION["myusername"] != "drasko"){
header("location:partial/admin.php");
}
?>
</div>   
<div class="container">   
</div>
        <?php
            $con=mysqli_connect("localhost","root","","lalalulu");
        if(mysqli_connect_error())
            echo mysqli_connect_error();
         else{
    
           if($result = mysqli_query($con,"SELECT photos.photo as photo, photos.Id as Id, albums.Name as album FROM photos join albums on photos.album_id = albums.ID order by albums.Name")){
            //"<select id=\"ID_FunkcijeZadatka\" name=\"ID_FunkcijeZadatka\" style=\"width:775px;\">"
            echo "<div class=\"table-responsive\">";
            echo "<table id=\"tabela\" class=\"display dataTable table table-bordered table-responsive\">
            <thead>
                  <tr>                  
                  <th>Photo</th>
                  <th>Album name</th>
                  <th>Delete</th>
                  </tr>
            </thead>"; 
                  echo "<tbody>";

            while($row = mysqli_fetch_array($result)) {
                
                echo "<tr>";

                if($row['photo']!=NULL)
                echo '<td style="width:200px"><img style="width:130px; height:115px;" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" /></td>';

                else
                    echo "<td><i class=\"fa fa-times\"></i></td>";
                    echo "<td>". $row['album'] . "</td>";
                echo "<td><i class=\"fa fa-trash-o del\" id=". $row['Id'] . "></i></td>";
                echo "</tr>"; 
                }

                echo "</tbody>";
                echo "</table>";
                echo "</div>";

                }
                else
                echo "No photo table!";
            }
            mysqli_close($con);        
        ?>
        <div class="container">
    <div class="row"> 
    <h3>Insert photos</h3>   
        <div class="form" role="form">  
            <form method="post" enctype="multipart/form-data" class="jumbotron form-group" action="insertPhoto.php" >
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <fieldset>                  
            <legend>Image Upload</legend>
            <div class="input-group image-preview">
                <input type="text" name="photo" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <div class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/> <!-- rename it -->
                    </div>
                    <!--<p class="help-block">Example block-level help text here.</p>-->
                    
                </div>
            </div><!-- /input-group image-preview [TO HERE]--> 
                <div>                        
        <?php                            
            $con=mysqli_connect("localhost","root","","lalalulu");
            if(mysqli_connect_error())
                echo mysqli_connect_error();
            else{
    
                if($result = mysqli_query($con,"SELECT * from albums")){

                    echo '<select id="album" name="album" class="form-control image-preview-filename" required>';     

                    while($row = mysqli_fetch_array($result)) {
                        echo "<option value=". $row['ID'] . ">" . $row['Name'] . "</option>"; 
                    }

                        echo "</select>";
                        echo "</div>";

                }
                else
                echo "No photo table!";
            }
            mysqli_close($con);        
        ?>
                    </div>
            <p id="btnSubNew">
            <input type="submit" id="btn_Upload" class="btn btn-primary btn-lg" value="Save"/>
            </p>
            </fieldset>        
        </form>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row"> 
    <h3>Insert albums</h3>   
        <div class="form" role="form">  
            <form method="post" enctype="multipart/form-data"  action="InsertAlbum.php" >
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <fieldset>                  
            
            <div class="jumbotron form-group">
                
                <input type="text" name="name" id="name" class="form-control image-preview-filename" required> <!-- don't give a name === doesn't send on POST/GET -->
                
            </div><!-- /input-group image-preview [TO HERE]-->                                       
        
            <p id="btnSubNew">
            <input type="submit" id="btn_Upload" class="btn btn-primary btn-lg" value="Save"/>
            </p>
            </fieldset>        
        </form>
        </div>
    </div>
</div>
</div>
    </body>
</html>




