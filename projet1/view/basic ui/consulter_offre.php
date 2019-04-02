<?php 
require "../../entities/class_offre.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carousel Template for Bootstrap</title>

    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/carrousel.css" rel="stylesheet">
    <style type="text/css">
      body{
        overflow:hidden;
      }
    </style>
  </head>
  <body style="background-color:white;">

    <div class="row">

      <div class="offset-md-1 col-md-10">
<div id="myCarousel" class="carousel slide shadow bg-white rounded" data-ride="carousel" data-interval="false" style="border-radius:50px;border-bottom:2px solid #cecece;">

<?php 
offre::afficher();
?>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div> 

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/jquery/dist/bootstrap.min.js"></script>
  </body>
</html>