<?php
//echo 1;
session_start();
 require_once('../../Admin/page/dbConnection.php');
  //echo 10;
  ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> ngo</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="style.css">







</head>
<body>


<div class="container">
<div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
  <div class="col-12 col-md-6 col-lg-3">
    
<img src="https://source.unsplash.com/random/200" data-target="#indicators" data-slide-to="0" alt="" width="300" height="300" /> 
  </div>
 
</div>

<!-- Modal -->
<div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div id="indicators" class="carousel slide" data-interval="false">
  <ol class="carousel-indicators">
    <li data-target="#indicators" data-slide-to="0" class="active"></li>
    <li data-target="#indicators" data-slide-to="1"></li>
    <li data-target="#indicators" data-slide-to="2"></li>
    <li data-target="#indicators" data-slide-to="3"></li>
    <li data-target="#indicators" data-slide-to="4"></li>
    <li data-target="#indicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      
      <img class="d-block w-100" src="https://source.unsplash.com/random/200" alt="First slide" width="500" height="500">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
  </div>
</div>
                         </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js'></script>
</body>
</html>