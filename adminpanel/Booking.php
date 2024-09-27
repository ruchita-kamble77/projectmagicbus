<?php
require('inc/ess.php');
require('inc/db_config.php');
adminLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatile"content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel - Book</title>
<?php require('inc/link.php') ?>
</head>
<body class="bg-light">
<?php require('inc/header.php') ?>
<div class="container-fluid" id="main-content">
<div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h3 class="mb-4">Booking Details</h3>

            <div class="card border-0 shadow-sm mb-4">
                <div class="container">
            <div class="card-body">
            
                <div class="table-responsive-lg" style="height: 450px; overflow-y:scroll;">
                <table class="table table-hover  text-center border">
                    <thead class="table-dark sticky-top">
                    <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Conatctno</th>
                    <th scope="col">Booking_Id</th>
                    <th scope="col">Booking Trek</th>
                    </tr>
                    </thead>
                    <tbody>

            <!-- PHP code to fetch and display trek data from the server -->
            <?php
// Replace these database connection details with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trekwebsite";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the database
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

// Display data in the HTML table
if ($result->num_rows > 0) {
    $counter = 1; // Initialize counter variable
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        
        // Display a sequential number in the first column
        echo "<th scope='row'>" . $counter . "</th>";

        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["contact"] . "</td>";
        echo "<td>" . $row["booking_id"] . "</td>";
        echo "<td>" . $row["trek_name"] . "</td>";
        echo "</tr>";

        // Increment the counter for the next iteration
        $counter++;
    }
} else {
    echo "<tr><td colspan='6'>No data found</td></tr>";
}

// Close the database connection
$conn->close();
?>

                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            
    </div>
</div>
</div>


<!-- Include your script at the end -->
<?php require('inc/script.php'); ?>  

<script>
// JavaScript code for handling events or additional functionality
// ... (same as in your original code) ...
</script>

</body>
</html>
