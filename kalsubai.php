<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trek Booking </title>
<?php require('inc/links.php'); ?>   
</head>
<body class="bg-light">
<?php require('inc/header.php');
?>
<div class="my5 px-4">
<h2 class="fw-bold h-font text-center">Kalsubai Trek - Maharashtra's Highest Peak</h2>
<div class="h-line bg-dark"></div>
<p class="text-center mt-3">
..
</p>

<div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-lg-6 col-md-6 px-4">
<section>
        <p>Kalsubai is the highest peak in Maharashtra, India, standing at 1,646 meters. A popular trekking destination, 
            the trail starts from the base village Bari, offering challenging ascents through lush landscapes and
             rocky terrains. Trekkers reach a small temple at the summit dedicated to Kalsubai, enjoying panoramic views of the Sahyadri range. 
            The trek is best undertaken from November to February for a more comfortable experience.</p>
</section>
<section>
    <b>Location:</b> Ahmednagar district, Maharashtra, India <br>
    <b>Altitude:</b> 1,646 meters (5,400 feet)<br>
    <b>Difficulty:</b> Moderate to Difficult <br>
    <b>Duration:</b> 1 day<br>
    </section>
<br>
    <section>
    <h5>Highlights</h5>
    <p><b>Highest Peak in Maharashtra:</b> Kalsubai is the highest peak in the state, offering panoramic views of the Sahyadri mountain range.
    <br><b>Breathtaking Sunrise/Sunset:</b>Experience a mesmerizing sunrise or sunset from the summit, providing stunning photo opportunities.
    <br><b>Kalsubai Temple:</b>Visit the small temple at the peak dedicated to Goddess Kalsubai, a revered deity in the region </p>
    </section>
    <section>
    <h5>Trek Itinerary</h5>
        <p><b>Base Village:</b>Bari Village<br>
          <b>Start Time</b>Early morning to catch the sunrise.<br>
          <b>1.Bari to Kalsubai Summit</b> Begin the trek from Bari, passing through lush greenery and rocky terrain.
            The well-marked trail leads to the Kalsubai temple at the summit.         <br>
          <b>2.Bari to Kalsubai Summit</b>Begin the trek from Bari, passing through lush greenery and rocky terrain.
             The well-marked trail leads to the Kalsubai temple at the summit.          
                </p>
    <section>
    <h5><i class="bi bi-magic"></i>Essential Tips:</h5>
        <p><i class="bi bi-dot"></i> <b> Fitness Level</b>Fitness Level
        <br><i class="bi bi-dot"></i><b>Guides:</b> It's advisable to hire a local guide familiar with the trail and wildlife
        <br><i class="bi bi-dot"></i><b>Water and Snacks:</b>Carry an adequate supply of water and energy snacks for the trek
        <br><i class="bi bi-dot"></i><b>Safety Measures:</b>Follow safety guidelines, especially during monsoon, as the trail can be slippery</p>
    </section>
       <section>
        <h5>How to Reach</h5>
        <p> <b>By Road:</b>Reach Bari Village by road from Kasara or Igatpuri railway stations.
      <br> <b>Nearest Railway Station:</b>Kasara Railway Station
     <br> <b>Nearest Airport:</b>Mumbai Airport</p>
    </section>

    <section>
        <h5>Conclusion</h5>
        Embark on the Kalsubai trek for a thrilling adventure and witness the beauty of Maharashtra from its highest point. 
        Be prepared, stay safe, and relish the breathtaking views.   
    </section>
</div>

<div class="col-lg-6 col-md-6 px-4 align-top">
<div class="card" style="width: 50rem;">
  <img src="images/kalsubaipeak.JPG" style="height: 440px; width: 550px;" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">Kalsubai Peak</h5>
    <p class="card-text"><h3>₹1,349 </h3><br>
    <i class="bi bi-stars"></i> Instant Confirmation <br>
    <i class="bi bi-stars"></i>100% Satisfaction Guarantee <br>
    <i class="bi bi-stars"></i>Secure & Easy Booking</p>
    <button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal' data-bs-target='#book'>BookNow</button>
  </div>
  </div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="book" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST" action="payment.php">
<div class="modal-header">
<h5 class="modal-title d-flex-align-items-center">
<i class="bi bi-person-circle  fs-3 me-2"></i>Booking Form</h5>
<button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label  class="form-label">Name</label>
<input type="text" id="name" name="name" class="form-control shadow-none">
<label  class="form-label">Email-Id</label>
<input type="text" id="email" name="email" class="form-control shadow-none" placeholder="name@example.com">
<label  class="form-label">Whatapp Number</label>
<input type="number" id="phone" name="phone"  class="form-control shadow-none" placeholder="+91" required>
<label  class="form-label">Total Cost = ₹1,349
</label>
</div>
<div class="d-flex align-item-center justify-content-between mb-2">
<button type="submit" name="submit_booking" class="btn btn-dark shadow-none">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>   


 




<?php
require('inc/footer.php');
?>

</body>
</html>