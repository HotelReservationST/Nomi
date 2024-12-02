<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css" class="ref">
</head>
<body class="Body" style="background-image: url('image/hotel.webp');">
   <div class="container">


   <div id="userLoginFormContainer">
    <div class="loginbg position-absolute top-50 start-50 translate-middle">
        <div class="mb-1 pt-2">
          <div class="con d-inline-flex">
          <!-- <input type="radio" id="switchToAdminLogin" class="btn btn-primary"></input>
          <label for="switchToAdminLogin">Switch to Admin Login</label> -->
        </div>
            <h2 class="text-center">User Log In</h2>
            <form id="loginForm">
              <label for="exampleInputusername" class="form-label">Username</label>
              <input type="text" class="form-control border-dark" placeholder="Enter Username" id="loginUsername" required>
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control border-dark" placeholder="Enter Password" id="LoginPassword" required>
              <div id="emailHelp" class="form-text">You Don't Have An Account? <a href="#" data-bs-toggle="modal" data-bs-target="#mdlregistration">Register here!!!</a> </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Login</button>
          </form>
            
        </div>
    </div>

   </div>

<!-- JAVA SCRIPT FILES CONNECTION -->
<script src="js/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script src="js/exalog.js"></script>
  <!-- <script src="js/index.js"></script> -->
    
</body>
</html>

<script>

$("#loginForm").submit(function (e) {
  e.preventDefault(); 
  loginUser();
  // alert ("data");
  // saveClient();
});

document.getElementById('switchToUserLogin').addEventListener('click', function () {
    document.getElementById('userLoginFormContainer').style.display = 'block';
    document.getElementById('adminLoginFormContainer').style.display = 'none';
    document.getElementById('switchToUserLogin').style.display = 'none';
    document.getElementById('switchToAdminLogin').style.display = 'block';
});

document.getElementById('switchToAdminLogin').addEventListener('click', function () {
    document.getElementById('userLoginFormContainer').style.display = 'none';
    document.getElementById('adminLoginFormContainer').style.display = 'block';
    document.getElementById('switchToUserLogin').style.display = 'block';
    document.getElementById('switchToAdminLogin').style.display = 'none';
});
</script>