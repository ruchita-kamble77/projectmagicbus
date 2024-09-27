<?php 
require('connection.php');
session_start();
?>
<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    echo "
    <div class='navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top'>
        <div class='container-fluid'>
            <button class='navbar-toggler shadow-none' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                    <!-- Your other navigation links -->

                </ul>
                <div class='sign-in-up ms-auto user-info'>
                $_SESSION[uname] - <a href='logout.php' class='btn btn-outline-dark btn-sm'>LogOut</a>
            </div>'
                </div>
            </div>
        </div>
    </div>";
} else {
    echo "
    <nav class='navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top'>
        <div class='container-fluid'>
            <button class='navbar-toggler shadow-none' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                    <!-- Your other navigation links -->
                </ul>
                <div class='sign-in-up'>
                    <button type='button' class='btn btn-outline-dark shadow-none me-lg-2 me-2' data-bs-toggle='modal' data-bs-target='#loginmodal' href='login.php'>
                        Login
                        <i class='bi bi-box-arrow-in-right'></i>
                    </button>
                    <button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal' data-bs-target='#registermodal'>
                        Register
                        <i class='bi bi-box-arrow-in-right'></i>
                    </button>
                </div>
            </div>
        </div>
    </nav> 
    </div> ";
}
?>



<!---<div class="p-3 mb-2 bg-dark text-white">-->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
<div class="container-fluid" href="inc/header.php">
<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home.php" >BookMyTrek</a>
<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
  <a class="nav-link active me-2" aria-current="page" href="home.php">Home <i class="bi bi-house"></i></a>
</li>
<li class="nav-item">
  <a class="nav-link " href="trek_list.php">Book <i class="bi bi-bookmark-fill"></i></a>
</li>
<li class="nav-item">
  <a class="nav-link " href="gallery.php">Our Galary <i class="bi bi-chat-right-text-fill"></i></a>
</li>
<li class="nav-item">
  <a class="nav-link " href="review.php">Review <i class="bi bi-chat-right-text-fill"></i></a>
</li>
<li class="nav-item">
  <a class="nav-link " href="about.php">About us<i class="bi bi-cast"></i></a>
</li>
<li class="nav-item">
  <a class="nav-link " href="contact.php">Contact us <i class="bi bi-person-lines-fill"></i></a>
</li>
</div>
<img src="images/logo1.jpg" class="me-5 fw-bold fs-3 h-font" width="70" height="60" style="float:right">
</div>
</div>
</nav> 
</div> 



<!---login modal-->
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST" action="login_register.php">
<div class="modal-header">
<h5 class="modal-title d-flex-align-items-center">
<i class="bi bi-person-circle  fs-3 me-2"></i>User Login</h5>
<button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label  class="form-label">Email address/Usernaeme
<i class="bi bi-envelope-arrow-down"></i>
</label>
<input type="text" name="eamil_username" class="form-control shadow-none">
</div>
<div class="mb-4">
<label  class="form-label">Password
<i class="bi bi-key-fill"></i>
</label>
<input type="password" name="password" class="form-control shadow-none">
</div> 
<div class="d-flex align-item-center justify-content-between mb-2">
<button type="submit" name="login" class="btn btn-dark shadow-none">Login</button>
<button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal' data-bs-target='#forgotmodal'>Forgot Password?</button>
</div>
</div>
</form>
</div>
</div>
</div>



<div class="modal fade" id="forgotmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST" action="">
<div class="modal-header">
<h5 class="modal-title d-flex-align-items-center">
<i class="bi bi-person-circle  fs-3 me-2"></i>Reset Password</h5>
<button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label  class="form-label">Email
<i class="bi bi-envelope-arrow-down"></i>
</label>
<input type="text" name="eamil" class="form-control shadow-none">
</div>
<div class="d-flex align-item-center justify-content-between mb-2">
<button type="submit" name="send-reset" onclick="submitReview()" class="btn btn-dark shadow-none">Send Link</button>
</div>
</div>
</form>
</div>
</div>
</div>






<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form id="register-form" method="POST" action="login_register.php">
          <div class="modal-header">
          <h5 class="modal-title d-flex-align-items-center">
          <i class="bi bi-person-lines-fill"></i></i>Registration</h5>
          <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
          </div>  
          <div class="modal-body">
          <div class="container-fliud">
          <div class="row">
          <div class="col-md-6 ps-0 mb-3">
            <label  class="form-label">FullName</label>
            <input type="text" class="form-control shadow-none" id="name" name="name" required >
          </div>
          <div class="col-md-6 ps-0 mb-3">
            <label  class="form-label">Username</label>
            <input type="text" class="form-control shadow-none" id="uname" name="uname" required >
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Email-id</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
          </div> 
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Address</label>
          <input type="text" class="form-control shadow-none" id="address" name="address" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Phone no</label>
          <input type="number" class="form-control shadow-none" id="phone" name="phone" placeholder="+91" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Date Of Birth</label>
          <input type="date" class="form-control shadow-none" id="dob" name="dob" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Fitness certificate</label>
          <input type="file" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none" id="certificate" name="certificate" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control shadow-none" id="password" name="password" required>
          </div>
          </div>
          </div>
          <div class="text-center my-1">
          <button type="submit" name="register" class="btn btn-dark shadow-none">Register</button>
          </div>
          </div>
        </form>
    </div>
  </div>
</div>

<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{
  echo"<h1 style='text-align: right; text-size: 30px; margin-top: 20px'>Welcome to this website - $_SESSION[uname]</h1>";

}
?>

