<?php
// Include necessary files or functions for database connection and operations
require('adminpanel/inc/db_config.php');
//require('path/to/functions.php'); // Include your functions for database operations

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $location = $_POST['location'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    
   $conn=mysqli_connect($servername,$username,$password,$dbname); 

    // Handle file upload (if necessary)
    $uploadedFile = $_FILES['image'];
    $uploadPath = 'path/to/upload/directory/';

    // Assuming you want to store the image name in the database
    $imageName = uploadFile($uploadedFile, $uploadPath);

    // Insert data into the database
    $q1 = "INSERT INTO trek_details (name, location, duration, price, date, description, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $values = [$name, $location, $duration, $price, $date, $description, $image]; // Adjust this based on your database schema

    if (insert($conn, $values)) {
        // Successful insertion
        echo "Data inserted successfully!";
    } else {
        // Error in insertion
        echo "Error inserting data into the database.";
    }
}

// Function to handle file upload (you can modify this based on your needs)
function uploadFile($file, $uploadPath)
{
    $targetFile = $uploadPath . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $targetFile);
    return basename($file["name"]);
}
?>

