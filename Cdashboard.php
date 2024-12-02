<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <!-- CSS BOOTSTRAP CONNECTION  -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css" class="ref">
    <link rel="stylesheet" href="css/style.css">
    
    

</head>


<body class="Body" style="background-color:rgb(69, 113, 172)">
  
  <!-- ROW IS USED TO DIVIDE THE SECTION OF THE SCREEN INTO TWO  -->
  <div class="row">
    <!-- COL IS USED TO CLASIFY THE SIZE OF EACH DIVIDED SECTION -->
    <div class="col-md-10">
    
        <div class="container">
            <div class="sldimg"  style="height: 10%; width: 100%;" >
            <div class="sldpic " style="margin-left: 5%; box-shadow: 0 0 10px rgba(117, 229, 248, 0.2); 
            padding: 20px;">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner" >
              <div class="carousel-item active" >
                <img src="image/hotel1.jpg" class="d-block w-100" alt="sand">
              </div>
              <div class="carousel-item">
                <img src="image/pool.jpg" class="d-block w-100" alt="view">
              </div>
              <div class="carousel-item">
                <img src="image/view.jpg" class="d-block w-100" alt="rock">
              </div>
              <div class="carousel-item">
                <img src="image/images.jpg" class="d-block w-100" alt="rock">
              </div>
              <div class="carousel-item">
                <img src="image/hogar.jpg" class="d-block w-100" alt="rock">
              </div>
              <div class="carousel-item">
                <img src="image/gar.jpg" class="d-block w-100" alt="rock">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
    </div>

<!-- DATA TABLE -->
<div class="container">
    <div class="tb">
<table class="table table-hover mt-4 ms-5" style="width: 100%;">
    <button type="button" class="btn btn-outline-light ms-5 fs-3 mt-4 text-dark fw-bold bg-light" data-bs-toggle="offcanvas" data-bs-target="#addBookingoffcanvas" aria-controls="offcanvasRight"> <img class="bg-light border border-dark rounded-1 " src="icon/file-earmark-plus.svg" alt="add" width="28" height="28">&nbsp; Book Room Now!!!</button>
    <thead class="table-danger">
      <tr>
        <th scope="col">Room No.</th>
        <th scope="col">Room Type</th>
        <th scope="col">No. of Guest</th>
        <th scope="col">Rate</th>
        <th scope="col">Image </th>
        <th scope="col">Availability</th>
      </tr>
    </thead>
    <tbody class="table-secondary" id="CdisplayRoom"></tbody>
    <!-- //frontDisplay1 -->
</table>
</div>
</div>

<!-- Modal to see booking-->
<div class="modal fade" id="seebooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="seebookingLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 60%;">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h2 class="modal-title fs-5 text-dark" id="seebookingLabel">Booked Room</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
   
            <!-- DATA TABLE -->
            <table class="table table-hover mt-4 ms-2">
              <thead class="table-success">
                <tr>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Check-In </th>
                  <th scope="col">Check-Out</th>
                  <th scope="col">No. of Guests</th>
                  <th scope="col">Contact No.</th>
                  <th scope="col">Room No.</th> 
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody class="table-secondary" id="CDisplayBooking"></tbody>
            </table>    
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<!-- // send Booking -->
  <div class="offcanvas offcanvas-end text-dark" tabindex="-1" id="addBookingoffcanvas" aria-labelledby="addBookingoffcanvasLabel" style="width: 70%; height: fit-content; background-color:rgb(69, 113, 172);">
    <div class="offcanvas-header">
      <h3 class="offcanvas-title fw-bold" id="addBooking">Send Booking</h3>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body">
      <div class="row">
        <div class="col-md-6">
          
            <div class="offcanvas-body">
                      <form id="frmAddBooking">
                      <!-- FORM FOR ADDING DATA TO THE TABLE -->
                      <div class="mb-3">
                        <label class="form-label fw-bold fs-6" for="inputfname">First Name:</label>
                        <input type="text" class="form-control" id="inputfname" placeholder="Input First Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold fs-6" for="inputlname">Last Name:</label>
                        <input type="text" class="form-control" id="inputlname" placeholder="Input Last Name" required>
                    </div>
                    
                    <div class="row mb-3" style="height: fit-content;">
                    <div class="col-md-6">
                        <label class="form-label fw-bold fs-6">Check-In:</label>
                        <input type="date" class="form-control" id="inputIdate" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label fw-bold fs-6" for="inputDate">Check-Out:</label>
                      <input type="date" class="form-control" id="inputDate" required>
                  </div>
                </div>
          
                <div class="row" style="height: fit-content;">
                  <div class="col-md-3 mb-3">
                      <label class="form-label fw-bold fs-6" for="inputGuestNo">No. of Guest:</label>
                      <input type="number" class="form-control" id="inputGuestNo" min="1" max="20" placeholder="0" required>
                  </div>
                  <div class="col-md-4 mb-3"><br>
                      <label class="form-label fw-bold fs-6" for="inputContact">Contact No.:</label>
                      <input type="text" class="form-control" id="inputContact" placeholder="+63" required>
                  </div>
                  <?php
                              include 'php/connection.php';


                            ?>
                            <div class="col-md-4 mb-3"><br>
                              <label class="form-label fw-bold text-dark" for="inputAcmo" >Choose Room No.:</label>
                              <!-- <input type="text" class="form-control" id="inputContact" placeholder="Select Room No." required> -->
                              <select class="form-control" id="inputAcmo" >
                              <?php
                                  
                                      $sql=$conn->prepare("SELECT * FROM accomodation WHERE Availability ='Available'");
                                      // $sql->bindParam(1, )
                                      $sql->execute();

                                      $data=$sql->fetchAll(PDO::FETCH_ASSOC);
                                      
                                      foreach(  $data as $ok){?>
                                      <option id="<?php echo $ok['acc_id']; ?> "> 
                                        <?php
                                        echo $ok['RoomNo'];
                                        ?>
                                        </option>
                                       <?php
                                      }
                                      ?>                                    

                              </select>
                            </div>

                    </div>
            
                     <!-- OFFCANVAS CLOSING & SAVE BUTTON  -->
                    <div class="footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Close</button>
                      <button type="submit" class="btn  bg-light fs-5 fw-bold text-dark">Booked Room</button>
                    </div>
                  </form>
                  </div>
        </div>

        <div class="col-md-6">
          <h2 style="font-weight: bold;">Hotel Rooms Available</h2>
          <table class="table table-hover mt-4">
            <thead class="table-danger">
              <tr>
                <th scope="col">Room No.</th>
                <th scope="col">Room Type</th>
                <th scope="col">No. of Guest</th>
                <th scope="col">Rate </th>
                <th scope="col">Room Image </th>
                <th scope="col">Availability</th>
              </tr>
            </thead>
            <tbody class="table-secondary" id="BookingDisplayRoom"></tbody>
            <!-- Bdisplay2 -->
        </table>
        </div>

      </div>
    </div>

  </div>
  
  </div>

<!-- COL IS USED TO CLASIFY THE SIZE OF EACH DIVIDED SECTION -->
<div class="col-md-2">
    <!-- PROFILE SECTION  -->
        <div class="profile d-none d-md-grid text-white mt-4 justify-content-center ">
        <img src="icon/Client.png" alt="Logo2" width="100px" height="100px" class="png">

        <h2><span id="client">Client</span></h2>
    </div>
    <div class="navbar-nav">
        <a class="custom-link" href="#" data-bs-toggle="modal" data-bs-target="#seebooking"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/table.svg" alt="edit" width="28" height="28">&emsp;View Booking</a>
        <a class="custom-link" href="#" id="logout"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/door-open.svg" alt="edit" width="28" height="28">&emsp;Logout</a> 
        
      </div> 
</div>


  <!-- JAVA SCRIPT FILES CONNECTION -->
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>

<script>
  // THE FUNCTION OF ADD DATA BUTTON TO SUBMIT DATA 
  $("#frmAddBooking").submit(function (e) {
    e.preventDefault(); 
    bookRoom();
  
  });

  $(document).ready(function () {
    // Handle the logout button click
    $("#logout").click(function (e) {
        e.preventDefault();
        
        // Perform any logout-related actions here, such as clearing user session data if used.
        
        // Redirect to the login form in index.html
        window.location.href = "index.php";
    });
});

$(document).ready(function() {
  // alert("data");
$.get("./php/getname.php", function(response){
  let data =json.parse(response);
  if (data.Fame){
    $("#client").text(data.Fame);
  }else{
    $("#client").text("Guest");
  }
});

});
</script>