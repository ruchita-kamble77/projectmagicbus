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
<h2 class="fw-bold h-font text-center">Review Please</h2>
<div class="h-line bg-dark"></div>
<p class="text-center mt-3">
    Reviews..!
</p>
<style>
    form {
      max-width: 600px;
      margin: auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="checkbox"] {
      margin-right: 5px;
    }

    textarea {
      width: 100%;
      height: 100px;
      margin-bottom: 10px;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
      
    }
    .container {
    background-color: lightgreen;
}


  </style>
<div class="container bg-light rounded shadow p-4 border-top border-4 border-dark  ">
<form id="reviewForm" method="POST" action="process_review.php">

<h5>Review: Trekking Adventure with BookMyTrek</h5>

<label style="font-weight: bold; color: #555;">
  Overall Rating:
  <input type="number" min="1" max="5" value="5" name="overallRating" id="overall_rating">
</label>

<div class="col-lg-12  mt-5">
    <h5>Booking Process:</h5>
    <label><input type="checkbox" name="bookingProcess[]" value="User-friendly website"> User-friendly website</label>
    <label><input type="checkbox" name="bookingProcess[]" value="Transparent pricing"> Transparent pricing</label>
    <label><input type="checkbox" name="bookingProcess[]" value="Clear and detailed itineraries"> Clear and detailed itineraries</label>
</div>

<h5>Customer Support:</h5>
<label><input type="checkbox" name="customerSupport[]" value="Responsive"> Responsive</label>
<label><input type="checkbox" name="customerSupport[]" value="Knowledgeable"> Knowledgeable</label>
<label><input type="checkbox" name="customerSupport[]" value="Helpful with inquiries"> Helpful with inquiries</label>


    <!-- Repeat similar sections for other aspects -->

    <h5>Additional Comments:</h5>
    <textarea id="additionalComments" name="additionalComments"></textarea>


    <label><input type="radio" name="recommendation" value="highly_recommend" checked> Highly recommend</label>
<label><input type="radio" name="recommendation" value="recommend"> Recommend</label>
<label><input type="radio" name="recommendation" value="neutral"> Neutral</label>
<label><input type="radio" name="recommendation" value="do_not_recommend"> Do not recommend</label>


    <h4>Name:</h4>
    <input type="text" id="userName">

    <button type="button" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" onclick="submitReview()">Submit Review</button>
  </form>
  </div>

  <script>
    function submitReview() {
      // You can implement logic here to handle the form submission
      // Retrieve values and perform actions as needed
      alert('Review submitted successfully!');
    }
  </script>

</div>
</div>

<?php
// Assuming your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trekwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Retrieve form data
$overallRating = isset($_POST['overallRating']) ? sanitizeInput($_POST['overallRating']) : "";
$bookingProcess = isset($_POST['bookingProcess']) ? implode(", ", $_POST['bookingProcess']) : "";
$customerSupport = isset($_POST['customerSupport']) ? implode(", ", $_POST['customerSupport']) : "";
$additionalComments = isset($_POST['additionalComments']) ? sanitizeInput($_POST['additionalComments']) : "";
$recommendation = isset($_POST['recommendation']) ? sanitizeInput($_POST['recommendation']) : "";
$userName = isset($_POST['userName']) ? sanitizeInput($_POST['userName']) : "";

// Insert data into the database
$sql = "INSERT INTO review (overall_rating, booking_process, customer_support, additional_comments, recommendation, user_name) 
        VALUES ('$overallRating', '$bookingProcess', '$customerSupport', '$additionalComments', '$recommendation', '$userName')";

if ($conn->query($sql) === TRUE) {
    echo "Review submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
require('inc/footer.php');
?>

</body>
</html>