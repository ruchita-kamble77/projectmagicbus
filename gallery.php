<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek Booking </title>
    <?php require('inc/links.php'); ?>
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3;
      }
    </style>   
</head>


<body class="bg-light">
  <?php require('inc/header.php');
  ?>
  <div class="my5 px-4">
    <h2 class="fw-bold h-font text-center">Gallery</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Our Memories ..!
    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/gallery/pic1.JPG" height="200" width="250px">
          </div>
          <p>Mounts Everest</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/gallery/pic2.jpg" height="200" width="250px">
          </div>
          <p>Rajmachi</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/gallery/pic3.jpg" height="200" width="250px">
          </div>
          <p>Kalsubai</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/gallery/pic4.jpg"height="200" width="250px">
          
          </div>
          <p>kille sanchi</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/gallery/pic5.jpg" height="200" width="250px">
          
          </div>
          <p>Everest base camp trek</p>
        </div>
      </div>
     <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/gallery/pic6.jpg" height="200" width="250px">
          </div>
          <p>Rajgad</p>
        </div>
     </div>
     <div class="col-lg-12 text-center mt-5">
  <a href="drive.com" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
    More Photos>>>
  </a>
</div>
  </div>
</div>



  



<?php
require('inc/footer.php');
?>

</body>
</html>