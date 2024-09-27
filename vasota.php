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
<h2 class="fw-bold h-font text-center">Vasota Trek</h2>
<div class="h-line bg-dark"></div>
<p class="text-center mt-3">
..
</p>

<div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-lg-6 col-md-6 px-4">
<section>
        <p>The Vasota trek in Maharashtra, India, offers a moderate two-day adventure through the
             Koyna Wildlife Sanctuary. At an altitude of around 1,171 meters, the trek features 
             Vasota Fort and the ancient Babanath Temple, providing stunning views of Koyna
              River backwaters. Essential tips include obtaining permits, hiring a guide, and 
              checking the weather. The journey begins and ends at Bamnoli village,
             making it a delightful exploration of nature and history in the Western Ghats.</p>
</section>
<section>
    <b>Location:</b> Satara District, Maharashtra, India <br>
    <b>Altitude:</b> Approximately 1,171 meters (3,842 feet) <br>
    <b>Difficulty:</b> Moderate <br>
    <b>Duration:</b> 2 days (including travel and exploration)<br>
    </section>
<br>
    <section>
    <h5>Highlights</h5>
    <p><b>Fort and Forest:</b> the historic Vasota Fort,
         nestled amidst the lush greenery of the Koyna Wildlife Sanctuary.
        Immerse yourself in the serene beauty of the surrounding forests
    <br><b>Koyna Wildlife Sanctuary:</b>Vasota is situated within the Koyna Wildlife Sanctuary, known for its diverse flora and fauna.
          Keep an eye out for wildlife sightings, including various species of birds and possibly Indian Bison
    <br><b>Koyna Backwaters:</b>Enjoy breathtaking views of the Koyna River and its backwaters from the summit.
            Capture mesmerizing sunset or sunrise moments over the water. </p>
    </section>
    <section>
    <h5>Trek Itinerary</h5>
        <p><b>Day1--</b>Start your journey from Thane.<br>
                    Travel to Bamnoli village, the base village for the Vasota trek.<br>
                    Trek to Met Indavali and set up camp for an overnight stay. <br>
          <b>Day1--</b>Early morning trek to Vasota Fort.<br>
                    Explore the fort, visit Babanath Temple, and enjoy panoramic views.<br>
                    Descend and return to Bamnoli.<br>
                    Depart for Thane.
                </p>
    <section>
    <h5><i class="bi bi-magic"></i>Essential Tips:</h5>
        <p><i class="bi bi-dot"></i> <b> Permits:</b> Obtain necessary permits from the Forest Department before starting the trek.
        <br><i class="bi bi-dot"></i><b>Guides:</b> It's advisable to hire a local guide familiar with the trail and wildlife
        <br><i class="bi bi-dot"></i><b>Water and Snacks:</b>Carry an adequate supply of water and energy snacks for the trek
        <br><i class="bi bi-dot"></i><b>Safety Measures:</b>Follow safety guidelines, especially during monsoon, as the trail can be slippery</p>
    </section>
       <section>
        <h5>How to Reach</h5>
        <p> <b>By Road:</b>Reach Bamnoli village by road from Satara or other nearby towns.
      <br> <b>Nearest Railway Station:</b>Satara Railway Station
     <br> <b>Nearest Airport:</b>Pune Airport</p>
    </section>

    <section>
        <h5>Conclusion</h5>
        Vasota trek offers a perfect blend of history, nature, and adventure.
         Plan your trip wisely, and immerse yourself in the captivating beauty of the Western Ghats.


    </section>
</div>

<div class="col-lg-6 col-md-6 px-4 align-top">
<div class="card" style="width: 50rem;">
  <img src="images/vasota.JPG" style="height: 440px; width: 550px;" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">Vasota trek</h5>
    <p class="card-text"><h3>₹1999 </h3><br>
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
<label  class="form-label">Total Cost = ₹1999/-
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