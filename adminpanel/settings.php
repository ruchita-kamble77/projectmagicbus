<?php 
require('inc/ess.php');  
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel-setting</title>
<?php require('inc/link.php');
?>
</head>
<body class="bg-light">  
<?php require('inc/header.php') ?>

<div class="container-fluid" id="main-content">
<div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h4 class="mb-4">Settings</h4>

        <!--general settings section-->
<div class="card border-0 shadow mb-4" >
<div class="card-body">
<div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title m-0">General settings</h5>
    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
    <i class="bi bi-pencil-square"></i>EDIT
</button>
</div>
<h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
<p class="card-text" id="site_title"></p>
<h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
<p class="card-text" id="site_about"></p>
</div>
</div>
<!--general settings  modal -->
<div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="general_s_form">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">General Settings</h6>
        </div>
        <div class="modal-body">
    <div class="mb-3">
        <label class="form-label fw-bold">Site Title</label>
        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">About Us</label>
        <textarea name="site_about"  id="site_about_inp" class="form-control shadow-none" row="6" required></textarea>
    </div>

  <div class="modal-footer">
    <button type="button" onclick="site_title.value = general_data.site_title, site_about_value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
    <button type="submit"  class="btn custom-bg text-white shadow-none">Submit</button>
  </div>
</div>
</form>
</div>
</div>
</div>
<!--shutdown-->

<div class="card border-0 shadow  mb-4" >
<div class="card-body">
<div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title m-0">ShutDown Website</h5>
    </div>
    <div class="form-check form-switch">
      <form>
      <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" role="switch" id="shutdown-toggle">
      </form>
      </div>
    <p class="card-text">
      No customer will be allowed to book trek, when ShutDown mode is turned on.
    </p>
  </div>
</div>

<!--contact section-->
<div class="card border-0 shadow mb-4">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="card-title m-0">Contact settings</h5>
      <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
        <i class="bi bi-pencil-square"></i>EDIT
      </button>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-4">
          <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
          <p class="card-text" id="address"></p>
        </div>
        <div class="mb-4">
          <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
          <p class="card-text mb-1">
            <i class="bi bi-telephone-fill"></i>
            <span id="pn1"></span>
          </p>
          <p class="card-text">
            <i class="bi bi-telephone-fill"></i>
            <span id="pn2"></span>
          </p>
        </div>
        <div class="mb-4">
          <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
          <p class="card-text" id="gmap"></p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-4">
          <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>

          <p class="card-text mb-1">
            <i class="bi bi-instagram me-1"></i>
            <span id="insta"></span>
          </p>

          <p class="card-text mb-1">
            <i class="bi bi-facebook me-1"></i>
            <span id="fb"></span>
          </p>

          <p class="card-text mb-1">
            <i class="bi bi-twitter me-1"></i>
            <span id="tw"></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--contact detailes modal-->

<div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form id="contacts_s_form" method="post"> <!-- Added method="post" -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contact Settings</h5>
        </div>

        <div class="modal-body">
          <div class="container-fluid p-0">
            <div class="row">
          <div class="col-md-6">
          <div class="mb-3">
          <label class="form-label fw-bold">Address</label>
          <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
          </div>
          <div class="mb-3">
          <label class="form-label fw-bold">Phone numbers</label>
            <div class="input-group mb-3">
          <span class="input-group-text">+91</span>
          <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold">Phone numbers</label>
            <div class="input-group mb-3">
          <span class="input-group-text">+91</span>
          <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none" >
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold">Email</label>
          <input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
          </div>
          </div>
          </div>
          </div>
          <div class="col-md-6">
          <div class="mb-3">
          <label class="form-label fw-bold">Social-links</label>
            <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-instagram"></i></span>
          <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
            </div>
            <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-facebook"></i></span>
          <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" >
          </div>
            <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-twitter"></i></span>
          <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" >
          </div>
        </div>
  
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
          <button type="button" onclick="contact_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-dark" id="submitForm">Submit Form</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</form>
</div>
</div>
<script>
  $(document).ready(function () {
    // Replace placeholder values with actual data
    var address = "Your Address";
    var pn1 = "Your Phone 1";
    var pn2 = "Your Phone 2";
    var gmap = "Your Email";
    var insta = "Your Instagram";
    var fb = "Your Facebook";
    var tw = "Your Twitter";

    // Update the HTML content with the data
    $("#address").text(address);
    $("#pn1").text(pn1);
    $("#pn2").text(pn2);
    $("#gmap").text(gmap);
    $("#insta").text(insta);
    $("#fb").text(fb);
    $("#tw").text(tw);

    // Handling form submission
    $("#submitForm").click(function () {
      // Collect form data
      var formData = {
        address: address,
        pn1: pn1,
        pn2: pn2,
        gmap: gmap,
        insta: insta,
        fb: fb,
        tw: tw
      };

      // Submit the form data to a PHP script using AJAX
      $.ajax({
        type: "POST",
        url: "process_form.php", // Replace with your server-side script
        data: formData,
        success: function (response) {
          // Handle the response from the server (e.g., display a success message)
          console.log("Form submitted successfully");
        },
        error: function (error) {
          // Handle any errors that occur during the AJAX request
          console.error("Error submitting form:", error);
        }
      });
    });
  });
</script>

<?php
// Include your database connection file
require('db_conn.php');

// Assuming your data is received through a POST request
$address = $_POST['address'];
$pn1 = $_POST['pn1'];
$pn2 = $_POST['pn2'];
$gmap = $_POST['gmap'];
$insta = $_POST['insta'];
$fb = $_POST['fb'];
$tw = $_POST['tw'];

// Insert data into the database (replace with your actual database structure)
$q = "INSERT INTO contact_set (address, pn1, pn2, gmap, insta, fb, tw) VALUES (?, ?, ?, ?, ?, ?, ?)";
$values = [$address, $pn1, $pn2, $gmap, $insta, $fb, $tw];
$res = insert($q, $values, 'sssssss');

// Check the result and send a response to the client
if ($res) {
  echo "Form submitted successfully";
} else {
  echo "Error submitting form";
}
?>






<!--Management Team Section-->
<div class="card border-0 shadow mb-4" >
<div class="card-body">
<div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title m-0">Management Team </h5>
    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
    <i class="bi bi-plus-circle"></i>Add
    </button>
  </div>
    <div class="row" id="team-data">
      <div class="col-md-2 mb-3">
      <div class="card bg-dark text-white">
        <img src="../images/person.JPG" class="card-img">
        <div class="card-img-overlay text-end">
        <button type="button" class="btn btn-danger btn-sm shadow-none">
        <i class="bi bi-trash3-fill"></i>Delete
        </button>
      </div>
      <p class="card-text text-center px-3 py-2">Random Name</p>
    </div>
      </div>
    </div>

</div>
</div>
<!--Management Team Modal-->
<div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="team_s_form">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">Add team Member</h6>
        </div>
        <div class="modal-body">
    <div class="mb-3">
        <label class="form-label fw-bold">Name</label>
        <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Picture</label>
        <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg,.png,.webp,.jpeg" class="form-control shadow-none" required>
    </div>

  <div class="modal-footer">
    <button type="button" onclick="member_name.value='',member_picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
    <button  a="adminpanel/script/submit_trek.php" type="submit"  class="btn custom-bg text-white shadow-none">Submit</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>


</div>
</div>
</div>

<?php require('inc/script.php');
?>
<script src="scripts/settings.js"></script>




</body>
</htm