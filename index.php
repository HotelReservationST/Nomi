<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- CSS BOOTSTRAP CONNECTION  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css" class="ref">
    

</head>


<body class="Body" style="background-image: url('image/hotel.webp');">

  <!-- USER LOGIN FORM  -->
 <div class="container">
  
  <div id="userLoginFormContainer">
    <div class="loginbg position-absolute top-50 start-50 translate-middle">
        <div class="mb-1 pt-2">
          <div class="con d-inline-flex">
          <!-- <input type="radio" id="switchToAdminLogin" class="btn btn-primary"></input>
          <label for="switchToAdminLogin">Switch to Admin Login</label> -->
        </div>
            <h2 class="text-center fs-3 fw-bold">Log In Account</h2>
            <form id="loginForm">
              <label for="exampleInputusername" class="form-label fs-4 fw-bold">Username</label>
              <input type="text" class="form-control border-dark" placeholder="Enter Username" id="loginUsername" required>
              <div id="emailHelp" class="form-text fw-bold">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label fw-bold fs-4">Password</label>
              <input type="password" class="form-control border-dark" placeholder="Enter Password" id="LoginPassword" required>
              <div id="emailHelp" class="form-text fs-6 text-dark">You Don't Have An Account? <a href="#" data-bs-toggle="modal" data-bs-target="#mdlregistration">Register here!!!</a> </div>
            </div>
            <center><button type="submit" class="btn btn-primary fw-bold mb-5 fs-6">Login</button></center>
          </form>
    </div>
        </div>
    </div>

    
    <!-- ADMIN LOGIN FORM  -->
    <!-- <div id="adminLoginFormContainer" style="display: none;">
      <div class="loginbg position-absolute top-50 start-50 translate-middle">
        <div class="mb-2 pt-2">
          <div class="con d-inline-flex">
          <input type="radio" id="switchToUserLogin" class="btn btn-primary"></input>
          <label for="switchToUserLogin">Switch to User Login</label>
        </div>
          <h2 class="text-center">Admin Log In</h2>
          <form class="logfrm" id="AdloginForm">
            <div class="mb-3">
            <label for="loginAdminUsername" class="form-label">Admin Username</label>
            <input type="text" class="form-control border-dark" placeholder="Enter Admin Username" id="loginAdminUsername" required>
          </div>
            <div class="mb-3">
              <label for="LoginAdminPassword" class="form-label">Admin Password</label>
              <input type="password" class="form-control border-dark" placeholder="Enter Admin Password" id="LoginAdminPassword" required>
              </div>
              <button type="submit" class="btn btn-primary mb-3">Login</button>
              
            </form>
              
          </div>
        </div>
      </div>
    


 <!- EDIT BOOKING MODAL   -->
<div class="modal fade" id="mdlregistration" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdlregistrationLabel" aria-hidden="true">
  <form id="frmclient">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlregistrationLabel">Register Client</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <!-- FORM FOR EDITING DATA TO THE TABLE -->

        <div class="mb-3">
          <label class="form-label" for="regesterfn">First Name:</label>
          <input type="text" class="form-control" id="regesterfname" required>
      </div>
      <div class="mb-3">
          <label class="form-label" for="regesterln">Last Name:</label>
          <input type="text" class="form-control" id="regesterlname" required>
      </div>
      <div class="mb-3">
          <label class="form-label" for="regesterUser">Username:</label>
          <input type="text" class="form-control" id="regesterUserName" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="regesterPass">Password:</label>
        <input type="text" class="form-control" id="regesterPassword" required>
    </div>
  </div>
     <!-- EDIT MODAL CLOSING & SAVE BUTTON  -->
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  
</div>
  </div>
</form>
  </div>


  <!-- JAVA SCRIPT FILES CONNECTION -->
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script src="js/exalog.js"></script>
  <script src="js/index.js"></script>
</body>
<script>

$("#loginForm").submit(function (e) {
  e.preventDefault(); 
  loginUser();
  // alert ("data");
  // saveClient();
});

  // THE FUNCTION OF ADD DATA BUTTON TO SUBMIT DATA 
  $("#frmclient").submit(function (e) {
    e.preventDefault(); 
    saveClient();
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
</html>

