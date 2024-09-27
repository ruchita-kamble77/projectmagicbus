<?php
session_start();

require("connection.php");

if(isset($_POST['send-reset-link']))
{
    $query="SELECT * FROM `register_user` WHERE `email`='$_POST[email]'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $reset_token = bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d");
            $query="UPDATE `register_user` SET `resettoken`='$reset_token', `resettokenexpired`='$date' WHERE `email`='$_POST[email]'";
            if(mysqli_query($con,$query))
            {
                echo "<script>alert('Password reset Link sent to Mail');
                        window.location.href='home.php';
                        </script>";
            }
            else{
                echo"<div class='alert alert-dark' role='alert'>
                            A simple dark alert—check it out!
                            </div>";
            }
        }
        else{
            echo"<div class='alert alert-dark' role='alert'>
            A simple dark alert—check it out!
            </div>";
        }
    }
    else
    {
   echo"<script> swal('\'Heres the title!'', '\'...and here's the text!')</script>";
    }
}


?>
<script>
    function submitReview() {
      // You can implement logic here to handle the form submission
      // Retrieve values and perform actions as needed
      alert('Review submitted successfully!');
    }
  </script>
</script>