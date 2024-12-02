<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
      <!-- CSS BOOTSTRAP CONNECTION  -->
      <link rel="stylesheet" href="bootstrap/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- ADMIN LOGIN FORM  -->
  <!-- <div id="adminLoginFormContainer" style="display: none;">
    <div class="loginbg position-absolute top-50 start-50 translate-middle">
      <div class="mb-2 pt-2">
        <div class="con d-inline-flex">
        <input type="radio" id="switchToUserLogin" class="btn btn-primary"></input>
        <label for="switchToUserLogin">Switch to User Login</label>
      </div> -->
        <h2 class="text-center">Admin Log In</h2>
        <form id="frmlogin"> 
          <!-- id="AdloginForm" -->
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
            
        <!-- </div>
      </div>
    </div> -->

  <!-- <div id="login-container">
    <h2>Login</h2>
    <input type="text" id="username" placeholder="Username/Email">
    <input type="password" id="password" placeholder="Password">
    <button onclick="login()">Login</button>
  </div>

  <script>
    function login() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      // Perform authentication (e.g., send credentials to server for validation)

      // For demonstration purposes, let's assume successful authentication
      var role = username === "admin" ? "admin" : "user";

      if (role === "admin") {
        window.location.href = "BookRoom.html"; // Redirect to admin dashboard
      } else {
        window.location.href = "Cdashboard.html"; // Redirect to user dashboard
      }
    }
  </script> -->

  
  <!-- JAVA SCRIPT FILES CONNECTION -->
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script src="js/jquery.min.js"></script>
  <!-- <script src="js/index.js"></script> -->
  <script src="js/exalog.js"></script>

</body>
</html>
<script>

$("#frmlogin").submit(function (e) {
  e.preventDefault(); 
  loginUser();
  // alert ("data");
  // saveClient();
});
</script>

