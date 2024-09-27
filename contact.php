<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek-contact </title>
    <?php require('inc/links.php'); ?>
    
</head>


<body class="bg-light">
  <?php require('inc/header.php');
  ?>
  <div class="my5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    You can also fill out the contact form on our website, and our dedicated team will get back to you promptly. 
    We look forward to hearing from you and helping you plan your next exciting trek!
    </p>
  </div>


<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-5 px-4">

      <div class="bg-white rounded shadow p-4 ">
      <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.632692299399!2d73.07863723800061!3d19.21123885130518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bfc915db7f87%3A0x1141d8b1b653e8b3!2sRajaram%20Residency!5e0!3m2!1sen!2sin!4v1709135537145!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen=""
         loading="lazy"></iframe>
        
         
          <h5>Address-</h5>
         <a href="<?php $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
         <i class="bi bi-geo-alt"></i>
         Rajaram Residency
         Tawarepada, Near Hanuman Temple,
          Ayregaon, Kopar East, Dombivli, 
          Maharashtra 421201
         </a>

        <h5 class="mt-4">Call us-</h5>
        <a href="tel:+7566800880" class="d-line-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i>+7566800880</a><br>
          <a href="tel:+9177677800" class="d-line-block text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i>+9177677800</a>

        <h5 class="mt-4">Email-</h5>
        <a href="mailto:bookmytrek@gmai.com" class="d-line-block text-decoration-none text-dark">
        <i class="bi bi-envelope-arrow-down"></i>bookmytrek@gmai.com</a>

        <h5 class="mt-4">Follow us-</h5>
       
        <a href="" class="d-line-block text-dark fs-5 me-2">
        <i class="bi bi-instagram me-1">Instagram</i></a>
        <a href="" class="d-line-block text-dark fs-5 me-2">
        <i class="bi bi-facebook"></i>Facebook</span></a>
        <a href="" class="d-line-block text-dark fs-5">
        <i class="bi bi-twitter"></i>Twitter</span></a>

      </div>
    </div>
  <!---form --->

  
     <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input name="name" type="text" class="form-control shadow-none" required>
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input name="email" type="email" class="form-control shadow-none"required>
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input name="subject" type="text" class="form-control shadow-none"required>
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea name="message" class="form-control shadow-none" rows="5" style="resize: none;" required></textarea>
            </div>
            <button type="submit" name="send" class="btn text-white custom-bg mt-3" >Send</button>
          </form>
        </div>
     </div>
  </div>
</div>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    // Validate and process the form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Perform database operations (replace with your database connection code)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trekwebsite";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the form data into the database
    $stmt = $conn->prepare("INSERT INTO user_queries (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Alert message using JavaScript
        echo '<script>alert("Message sent and stored in the database successfully.");</script>';
        header("Location: contact.php");
    } else {
        echo "Error storing message in the database: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>




  



<?php
require('inc/footer.php');
?>

</body>
</html>