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
<title>Admin Panel - Trek</title>
<?php require('inc/link.php') ?>
</head>
<body class="bg-light">
<?php require('inc/header.php') ?>
<div class="container-fluid" id="main-content">
<div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h3 class="mb-4">Treks Details</h3>

            <div class="card border-0 shadow-sm mb-4">
                <div class="container">
            <div class="card-body">
                <div class="text-end mb-4">
                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-trek">
                        <i class="bi bi-plus-circle"></i>Add
                    </button>
                </div>
                <div class="table-responsive-lg" style="height: 450px; overflow-y:scroll;">
                <table class="table table-hover  text-center border">
                    <thead class="table-dark sticky-top">
                    <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Difficulty level</th>
                    <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

            <!-- PHP code to fetch and display trek data from the server -->
                    <?php
                        $lastAddedID = 0; // Initialize last added ID to 0
                        if (isset($_GET['last_added_id'])) {
                            $lastAddedID = $_GET['last_added_id'];
                        }

                        // Fetch new trek data based on the last added ID
                        $newTrekData = fetchNewTrekData($lastAddedID);

                        foreach ($newTrekData as $index => $trek){

                            echo "<tr>";
                            echo "<th scope='row'>" . ($index + 1) . "</th>";
                            echo "<td>{$trek['name']}</td>";
                            echo "<td>{$trek['location']}</td>";
                            echo "<td>{$trek['duration']}</td>";
                            echo "<td>{$trek['price']}</td>";
                            echo "<td>{$trek['date']}</td>";
                            echo "<td>{$trek['description']}</td>";
                            echo "<td>{$trek['image']}</td>";
                            echo "<td>{$trek['level']}</td>";
                            echo "<td>";
                            
                            // Edit Button
                            echo "<a href='edit_trek.php?id={$trek['id']}'class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#edit-trek' title='Edit'>
                            <i class='bi bi-pencil-square'></i>";
                            
                            // Delete Button
                            echo "<a href='delete.php?id={$trek['id']}' class='btn btn-danger btn-sm ml-2' title='Delete' onclick='return confirm(\"Are you sure?\")'>
                            <i class='bi bi-trash'></i>";
                        
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
<!--add trek-->>
<?php
include "db_conn.php";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $location = $_POST['location'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $level = $_POST['level'];
  //  $uploadPath = __DIR__ . 'C:\xampp\htdocs\trekbook\images';

    // Assuming you want to store the image name in the database
   // $imageName = uploadFile($uploadedFile, $uploadPath);

    $sql = "INSERT INTO `trek_details`(`id`, `name`, `location`, `duration`, `price`, `date`, `description`, `image`, `level`)
    VALUES (NULL,'$name','$location','$duration','$price','$date','$description','$image','$level')";

    $result = mysqli_query($conn, $sql);

    if($result){
        alert('Added','New trek is Added!!!');
       // header("Location: trek.php");
    }
    else{
        echo "Failed: ".mysqli_error($conn);
        }
}
?>

<!-- add trek Modal -->
<div class="modal fade" id="add-trek" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="add_trek_form" autocomplete="off" method="post" action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Add Trek Details</h6>
                </div>
                <div class="modal-body" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">Name</label>
                         <input type="text" name="name" id="member_name_inp" placeholder="Trek Name" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">Location</label>
                         <input type="text" name="location" id="location" class="form-control shadow-none" required>
                        </div>
                        <div class="from-group mb-3">
                         <label class="form-label fw-bold">Duration</label>&nbsp;
                         <input type="radio" class="form-check-input" name="duration"
                          id="oneday" value="oneday">
                         <label for="oneday" >One Day</label>&nbsp;
                         <input type="radio" class="form-check-input" name="duration"
                          id="twoday" value="twoday">
                         <label for="twoday" >Two day</label>
                         <input type="radio" class="form-check-input" name="duration"
                          id="onehalf" value="onehalf">
                         <label for="onehalf" >One & Half</label>
                       </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">Price</label>
                         <input type="text" name="price" id="price" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">date</label>
                         <input type="date" name="date" id="date" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">image</label>
                         <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">Description</label>
                         <input type="text" name="description" id="description" class="form-control shadow-none" required>
                        </div>
                        
                        <div class="from-group mb-3">
                         <label class="form-label fw-bold">level:</label>&nbsp;
                         <input type="radio" class="form-check-input" name="level"
                          id="low" value="low">
                         <label for="low" >Low</label>&nbsp;
                         <input type="radio" class="form-check-input" name="level"
                          id="medium" value="medium">
                         <label for="medium" >Medium</label>
                         <input type="radio" class="form-check-input" name="level"
                          id="high" value="high">
                         <label for="medium" >High</label>
                       </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn custom-bg text-white shadow-none" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>



<!--fetch data-->
<?php
function fetchNewTrekData($lastAddedID) {
    $conn = mysqli_connect("localhost", "root", "", "trekwebsite");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM trek_details WHERE id > $lastAddedID";
    $result = mysqli_query($conn, $query);

    $trekData = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $trekData[] = $row;
    }

    mysqli_close($conn);

    return $trekData;
}
?>

<!--edit trek details-->
<?php
$conn = mysqli_connect("localhost", "root", "", "trekwebsite");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<?php
include "db_conn.php";

// Assuming $_id is obtained from user input, e.g., from the URL


// Edit trek details
if (isset($_POST['edit_trek'])) {
    // Ensure that $id is defined for the update
    $id = $_id;

    $name = $_POST['name'];
    $location = $_POST['location'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $level = $_POST['level'];

    $sql = "UPDATE `trek_details` SET `name`='$name', `location`='$location', `duration`='$duration',
    `price`='$price', `date`='$date', `description`='$description', `image`='$image', `level`='$level' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Update successful!");</script>';
        // header("Location: trek.php");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>



<div class="modal fade" id="edit-trek" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="add_trek_form" autocomplete="off" method="post" action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Trek Details</h6>
                </div>
                <div class="modal-body" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">Name</label>
                         <input type="text" name="name" id="member_name_inp" placeholder="Trek Name" 
                         class="form-control shadow-none" value="<?php echo $row['name'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">Location</label>
                         <input type="text" name="location" id="location" 
                         class="form-control shadow-none" value="<?php echo $row['location'] ?>">
                        </div>
                        <div class="from-group mb-3">
                         <label class="form-label fw-bold">Duration</label>&nbsp;
                         <input type="radio" class="form-check-input" name="duration"
                          id="oneday" value="oneday" <?php echo ($duration == 'oneday') ? 'checked' : ''; ?> >
                         <label for="oneday" >One Day</label>&nbsp;
                         <input type="radio" class="form-check-input" name="duration"
                          id="twoday" value="twoday" <?php echo ($duration=='twoday')? "checked":""; ?> >
                         <label for="twoday" >Two day</label>
                         <input type="radio" class="form-check-input" name="duration"
                          id="onehalf" value="onehalf" <?php echo ($duration=='onehalf')? "checked":""; ?> >
                         <label for="onehalf" >One & Half</label>
                       </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">Price</label>
                         <input type="text" name="price" id="price" class="form-control shadow-none" value="<?php echo $row['price'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">date</label>
                         <input type="date" name="date" id="date" class="form-control shadow-none" value="<?php echo $row['date'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label fw-bold">image</label>
                         <input type="file" name="image" id="image" class="form-control shadow-none"value="<?php echo $row['image'] ?>">
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">Description</label>
                         <input type="text" name="description" id="description" class="form-control shadow-none" value="<?php echo $row['description'] ?>">
                        </div>
                        <div class="from-group mb-3">
                         <label class="form-label fw-bold">level:</label>&nbsp;
                         <input type="radio" class="form-check-input" name="level"
                          id="low" value="low"  <?php echo ($level=='low')? "checked":""; ?>>
                         <label for="low" >Low</label>&nbsp;
                         <input type="radio" class="form-check-input" name="level"
                          id="medium" value="medium"  <?php echo ($level=='medium')? "checked":""; ?>>
                         <label for="medium" >Medium</label>
                         <input type="radio" class="form-check-input" name="level"
                          id="high" value="high"  <?php echo ($level=='high')? "checked":""; ?>>
                         <label for="high" >High</label>
                       </div>
                       <input type="hidden" name="trek_id">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn custom-bg text-white shadow-none" name="submit">Submit</button>
                </div>
            </div>
        </form>
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
