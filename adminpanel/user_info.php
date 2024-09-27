<?php
require('inc/ess.php');
require('inc/db_config.php');
adminLogin();

// Fetch user data function
function fetchUserData() {
    $conn = mysqli_connect("localhost", "root", "", "trekwebsite");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM register_user";
    $result = mysqli_query($conn, $query);

    $userData = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $userData[] = $row;
    }

    mysqli_close($conn);

    return $userData;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Information</title>
    <?php require('inc/link.php') ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php') ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">User Information</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="container">
                        <div class="card-body">
                            <!-- Table to display user information -->
                            <div class="table-responsive-lg" style="height: 450px; overflow-y:scroll;">
                                <table class="table table-hover text-center border">
                                    <thead class="table-dark sticky-top">
                                        <tr class="bg-dark text-light">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Email-Id</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">DOB</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $userData = fetchUserData();
                                        foreach ($userData as $index => $user) {
                                            echo "<tr>";
                                            echo "<th scope='row'>" . ($index + 1) . "</th>";
                                            echo "<td>{$user['name']}</td>";
                                            echo "<td>{$user['uname']}</td>";
                                            echo "<td>{$user['email']}</td>";
                                            echo "<td>{$user['address']}</td>";
                                            echo "<td>{$user['phone']}</td>";
                                            echo "<td>{$user['dob']}</td>";
                                            echo "<td>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include your script at the end -->
    <?php require('inc/script.php'); ?>  
</body>
</html>
