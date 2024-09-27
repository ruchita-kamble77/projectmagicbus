<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek Booking-about </title>
    <?php require('inc/links.php'); ?>  
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <style>
    .box{
      border-top-color: var(--teal) !important;
    }
   </style>
  </head>

<body class="bg-light">

  <?php require('inc/header.php');
  ?>
<div class="my5 px-4">
  <h2 class="fw-bold h-font text-center">About-Us</h2>
    <div class="h-line bg-dark"></div>
     <p class="text-center mt-3">
      we did 100+ trek, many facilities are availble
     </p>
    </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class=mb-3>Manager- MR. Gaurav Kamble</h3>
        <p>our experienced and passionate leader in adventure travel. 
          With a deep love for trekking,he ensures top-notch experiences for all. 
          Feel free to reach out for inquiries or feedback. Your adventure is his priority!
          </p>
      </div>
       <div class="col-lg-5 col-md-5 mb-4 order-lg-2  order-md-2 order-1">
        <img src="images/person.JPG" class="w-100">
       </div>
      </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/group.JPG" width="200px">
          <h4 class="mt-3">100+Trekkers</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/mountain.JPG" width="200px">
          <h4 class="mt-3">100+Mountain trek</h4>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/fort.JPG" width="200px">
          <h4 class="mt-3">500+ Fort trek</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/peak.JPG" width="200px">
          <h4 class="mt-3">20+ High Peak</h4>
        </div>
      </div>
  </div>
  </div>


<h3 class="my-5 fw-bold h-font text-center">Management Team</h3>
  <div class="container px-4">
    <div class="swiper-container mySwiper">
       <div class="swiper-wrapper mb-5">
       
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/person.JPG" class="w-100">
          <h5 class="mt-2">Prashant Matkar</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/person.JPG" class="w-100">
          <h5 class="mt-2">Sonali Pawar</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/person.JPG" class="w-100">
          <h5 class="mt-2">Varad Wadekar</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/person.JPG" class="w-100">
          <h5 class="mt-2">Tanvi Shinde</h5>
        </div>
        </div>

      <div class="swiper-pagination"></div>
    </div>
 </div>
  
<?php
require('inc/footer.php');?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints:{
          320:{
            slidesPerView: 1,
          },
          640:{
            slidesPerView: 1,
          },
          768:{
            slidesPerView: 2,
          },
          1024:{
            slidesPerView: 3,
          },
      }
     });
</script>

</body>
</html>