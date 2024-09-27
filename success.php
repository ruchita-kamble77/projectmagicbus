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
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success</title>
    <!-- Add your CSS styles here if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
            color: #333;
        }


        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <h1>Booking Success</h1>
    </header>

    <div class="container">
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

        // Assuming you have a session or some way to get the user's booking ID
        $bookingId = "1";

        // SQL query to fetch data from the database based on the booking ID
        $sql = "SELECT * FROM booking WHERE booking_id = '$bookingId'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <p>Your trek booking was successful! Thank you for choosing our service.</p>
            <p>Details of your booking:</p>
            <ul>
                <li><strong>Name:</strong> <?php echo $row["name"]; ?></li>
                <li><strong>Email:</strong> <?php echo $row["email"]; ?></li>
                <li><strong>Contact No:</strong> <?php echo $row["contact"]; ?></li>
                <li><strong>Booking ID:</strong> <?php echo $row["booking_id"]; ?></li>
                <li><strong>Booking Trek:</strong> <?php echo $row["trek_name"]; ?></li>
                <!-- Add more details as needed -->
            </ul>
            <?php
        } else {
            echo "<p>No data found for the booking ID: $bookingId</p>";
        }

        // Close the database connection
        $conn->close();
        ?>

        <!-- Add any additional information or links as needed -->
        <a href="home.php" class="h-font text-center custom-bg text-white shadow-none">Go back to the homepage</a>
    </div>

</body>
</html>






<?php
require('inc/footer.php');
?>
</body>
</html>