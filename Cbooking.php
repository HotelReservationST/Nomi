<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- CSS BOOTSTRAP CONNECTION  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css" class="ref">
    
    

</head>


<body class="Body" style="background-image: url('image/hotel.webp'); " id="ConBook">
  <!-- ROW IS USED TO DIVIDE THE SECTION OF THE SCREEN INTO TWO  -->
  <div class="row">
    <!-- COL IS USED TO CLASIFY THE SIZE OF EACH DIVIDED SECTION -->
    <div class="col-md-3 bg-secondary">
    
      <!-- PROFILE SECTION  -->
      <div class="upper">
      <div class="profile d-none d-md-grid text-white mt-4 justify-content-center ">
      <img src="image/png.png" alt="Logo1" width="100px" height="100px" style="border-radius: 50%;"class="png">
      <h2>Admin</h2>
  </div>
</div> 

<nav class="navbar navbar-expand-lg bg-secondary" >
  <div class="container-fluid">
    <img src="image/png.png" alt="Logo1" width="40px" height="40px" style="border-radius: 50%;"class="png d-md-none">
    <h2 class="d-md-none text-white">Admin</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- NAVIGATION LINKS SECTION  -->
      <div class="nav flex-column">
        <a class="custom-link" href="BookRoom.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/table.svg" alt="table" width="28" height="28">&emsp;Add Booking</a>
        <a class="custom-link" href="Cbooking.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/request.jpg" alt="request" width="28" height="28">&emsp;Booking Request</a>
        <a class="custom-link" href="ConfirmBook.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/Con.png" alt="table" width="28" height="28">&emsp;Booked Room</a>
          <a class="custom-link" href="AddRoom.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/pencil-square.svg" alt="edit" width="28" height="28">&emsp;Hotel Room List</a>
                 <!-- OFFCANVAS BUTTON  -->
          <a class="custom-link" href="admin.php"><img class="bg-light border border-secondary rounded-1 ms-1" src="icon/person-plus.svg" alt="edit" width="28" height="28">&emsp;Admin Accounts</a>
          <a class="custom-link" href="#" id="logout"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/door-open.svg" alt="edit" width="28" height="28">&emsp;Logout</a>

          
          
      </div>
  
        </div>
        
  </div>
    </nav>
  </div>

<!-- COL IS USED TO CLASIFY THE SIZE OF EACH DIVIDED SECTION -->
<div class="col-md-9" id="ConBook">
    <div class="title mt-4">
        <h1 class="ms-5 mb-3 text-center"> Request Booking List </h1>

    </div>


    <div class="container">
 
    <!-- DATA TABLE -->
    <table class="table table-hover mt-4 ms-5" style="width: 90%;">
      <thead class="table-primary">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Check-In</th>
          <th scope="col">Check-Out</th>
          <th scope="col">No. of Guests</th>
          <th scope="col">Contact No.</th>
          <th scope="col">Room No.</th>
          <th scope="col">Status</th>
          <th class="text-center">ACTION</th>
        </tr>
      </thead>
      <tbody class="table-secondary" id="CDBooking"></tbody>
    </table>
  </div>   

  </div>
</div>
  </div>


  <!-- JAVA SCRIPT FILES CONNECTION -->
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script src="js/index.js"></script>
</body>
</html>

<script>

  $(document).ready(function () {
    // Handle the logout button click
    $("#logout").click(function (e) {
        e.preventDefault();
        
        // Perform any logout-related actions here, such as clearing user session data if used.
        
        // Redirect to the login form in index.html
        window.location.href = "index.php";
    });
});
</script>