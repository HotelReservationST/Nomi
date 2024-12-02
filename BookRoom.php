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


<body class="Body" style="background-image: url('image/hotel.webp'); ">
  
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
<div class="col-md-9">
    <div class="title mt-4">
        <h1 class="ms-5 mb-3 text-center">ZINA Booking Data </h1>

    </div>


    <div class="container">
 
    <!-- DATA TABLE -->
    <table class="table table-hover mt-4 ms-5" style="width: 90%;">
      <button type="button" class="btn btn-outline-secondary ms-5 fs-5 text-dark fw-bold bg-light" data-bs-toggle="offcanvas" data-bs-target="#addBookingoffcanvas" aria-controls="offcanvasRight"> <img class="bg-light border border-dark ms-1" src="icon/file-earmark-plus.svg" alt="add" width="28" height="28">&nbsp; Add Booking</button>
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
          <!-- <th scope="col">Status</th> -->
          <th class="col">ACTION</th>
        </tr>
      </thead>
      <tbody class="table-secondary" id="DisplayBooking"></tbody>
    </table>
  </div> 

    <!-- ADD BOOKING OFFCANVAS -->
    <div class="offcanvas offcanvas-end text-dark" tabindex="-1" id="addBookingoffcanvas" aria-labelledby="addBookingoffcanvasLabel" style="width: 70%; height: fit-content; background-color:rgb(69, 113, 172);">
      <form id="frmAddBooking">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fs-4 fw-bold text-dark" id="addBookingoffcanvasLabel">Add Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">               
                <!-- FORM FOR ADDING DATA TO THE TABLE -->
                <div class="row">
                  <div class="col-md-6">
                    
                      <div class="offcanvas-body">
                                <form id="frmAddBooking"> 
                                  <!-- action="submit.php" method="post" -->
                                <!-- FORM FOR ADDING DATA TO THE TABLE -->
                                <div class="mb-3">
                                  <label class="form-label fw-bold text-dark" for="inputfname">First Name:</label>
                                  <input type="text" class="form-control" id="inputfname" placeholder="Input First Name" required>
                              </div>
                              <div class="mb-3">
                                  <label class="form-label fw-bold text-dark" for="inputlname">Last Name:</label>
                                  <input type="text" class="form-control" id="inputlname" placeholder="Input Last Name" required>
                              </div>
                              
                              
                              <div class="row mb-3" style="height: fit-content;">
                              <div class="col-md-6">
                                  <label class="form-label fw-bold text-dark" for="inputTime">Check-In:</label>
                                  <input type="date" class="form-control" id="inputIdate" required>
                              </div>
                              <div class="col-md-6">
                                <label class="form-label fw-bold text-dark" for="inputDate">Check-Out:</label>
                                <input type="date" class="form-control" id="inputDate" required>
                            </div>
                          </div>
                          <!-- <input type="hidden" class="form-control"> -->
                            <!-- // include "connection.php";

                                  // if(isset($_GET['inputIdate']) && isset($_GET['inputDate'])){
                                  //   $InDate= $_GET['inputIdate'];
                                  //   $ToDate= $_GET['inputDate'];

                                  //   $sql=$conn->prepare("SELECT * FROM booking WHERE CheIn AND CheOut BETWEEN '$InDate' AND '$ToDate' ");
                                  //   $sql->execute();
                                  //   $data=$sql->fetchAll(PDO::FETCH_ASSOC);

                                  //   if($conn($sql)>0){
                                  //     foreach($data as $dates)
                                  //     {
                                  //       echo $dates['RoomNo'];
                                  //     }
                                  //   }else{
                                  //     echo "Available";
                                  //   }

                                  // }  -->
                                    
                    
                          <div class="row" style="height: fit-content;">
                            <div class="col-md-3 mb-3">
                                <label class="form-labe fw-bold text-darkl" for="inputGuestNo">No. of Guest:</label>
                                <input type="number" class="form-control" id="inputGuestNo" min="1" max="20" placeholder="0" required>
                            </div>
                            <div class="col-md-4 mb-3"><br>
                                <label class="form-label fw-bold text-dark" for="inputContact">Contact No.:</label>
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
                                  
                                      $sql=$conn->prepare("SELECT * FROM accomodation");
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
                     
                               <!-- OFFCANVAS CLOSING & SAVE BUTTON  --> 
                              <div class="footer">
                                <button type="button" class="btn btn-secondary fs-5 fw-bold text-dark" data-bs-dismiss="offcanvas">Close</button>
                                <button type="submit" class="btn bg-light fs-5 fw-bold text-dark">Booked Room</button>
                              </div>
                            </div>
                          </form>
                      </div>
                          <!-- <div id="result"></div> -->
                  </div>
          
                  <div class="col-md-6">
                    <h2>Hotel Rooms Available</h2>
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
          <!-- </form> -->
      </div>

<!-- EDIT BOOKING MODAL  -->
<div class="container">
  <div class="modal fade" id="editBookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editBookingModalLabel" aria-hidden="true">
    <form id="frmEditBooking"> 
    <div class="modal-dialog">
      <div class="modal-content bg-dark text-white">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="mdlEditBookingLabel">Edit Booking</h1>
          <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <!-- FORM FOR EDITING DATA TO THE TABLE -->

          <div class="mb-3">
            <label class="form-label" for="inputfname">First Name:</label>
            <input type="hidden" class="form-control" id="inputEditID">
            <input type="text" class="form-control" id="inputEditfname" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputlname">Last Name:</label>
            <input type="text" class="form-control" id="inputEditlname" required>
        </div>

        <div class="row " style="height: fit-content;">
        <div class="col-md-6">
            <label class="form-label" for="inputTime">Check-In:</label>
            <input type="date" class="form-control" id="inputEditTime" required>
        </div>
        <div class="col-md-6 mb-3" >
          <label class="form-label" for="inputDate">Check-Out:</label>
          <input type="date" class="form-control" id="inputEditDate" required>
      </div>
    </div>

    <div class="row" style="height: fit-content;">
      <div class="col-md-4">
          <label class="form-label" for="inputGuestNo">No. of Guest:</label>
          <input type="number" class="form-control" id="inputEditGuestNo" required>
      </div>
      <div class="col-md-4 mb-3">
          <label class="form-label" for="inputContact">Contact No.:</label>
          <input type="text" class="form-control" id="inputEditContact" required>
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label" for="inputAccommodation">Room No.:</label>
        <input type="text" class="form-control" id="inputEditAccommodation" required>
    </div>
    </div>        

         <!-- EDIT MODAL CLOSING & SAVE BUTTON  -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update data</button>
        </div>
      </div>
    </form>
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

  // THE FUNCTION OF ADD DATA BUTTON TO SUBMIT DATA 
    $("#frmAddBooking").submit(function (e) {
    e.preventDefault(); 
    // document.getElementById('frmAddBooking').addEventListener('submit', function(event) {
    //         event.preventDefault();
    //         var formData = new FormData(this);

    //         fetch('submit.php', {
    //             method: 'POST',
    //             body: formData
    //         })
    //         .then(response => response.text())
    //         .then(data => {
    //             document.getElementById('result').innerHTML = data;
    //         })
    //         .catch(error => console.error('Error:', error));
    //     });

    bookRoom();
  
  });
  // THE FUNCTION OF EDIT DATA BUTTON TO SUBMIT DATA 
  $("#frmEditBooking").submit(function (e) {
    e.preventDefault();
    updateBooking();
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
</script>