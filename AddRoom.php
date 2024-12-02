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
  <div class="col-md-12">
    <div class="title mt-4">
        <h1 class="ms-5 mb-3 text-center"> Current Room Data </h1>
    </div>

    <div class="container">
        <!-- DATA COTTAGE TABLE -->
<div class="container">
  <table class="table table-hover mt-4 ms-5" style="width: 80%;">
    <button type="button" class="btn btn-outline-secondary ms-5 fs-5 mt-4 text-dark fw-bold bg-light" data-bs-toggle="offcanvas" data-bs-target="#addCottageoffcanvas" aria-controls="offcanvasRight"> <img class="bg-light border border-dark rounded-1 " src="icon/file-earmark-plus.svg" alt="add" width="28" height="28">&nbsp; Add Room</button>
    <thead class="table-primary">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Room No.</th>
        <th scope="col">Room Type</th>
        <th scope="col">Pax</th>
        <th scope="col">Rate</th>
        <th scope="col">Room Image </th>
        <th scope="col">Availability </th>
        <th class="text-center">ACTION</th>

      </tr>
    </thead>
    <tbody class="table-secondary" id="DisplayRoom"></tbody>
    <!-- tbDisplayCottage5 -->
    </table>
  </div>

      
    <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="addCottageoffcanvas" aria-labelledby="offcanvasRightLabel">
      <form id="frmAddRoom">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="addCottageoffcanvasLabel">Add Room</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
                
                <!-- FORM FOR ADDING DATA TO THE TABLE -->

                 <div class="mb-3">
                  <label class="form-label" for="inputRoom">Room No.:</label>
                  <input type="text" class="form-control" id="inputRoomNo" placeholder="Insert Room No." required>
              </div>
              <div class="mb-3">
                  <label class="form-label" for="inputType">Room Type: </label>
                  <input type="text" class="form-control" id="inputType" placeholder="Insert Room Type" required>
              </div>
              
              <div class="row mb-3" style="height: fit-content;">
              <div class="col-md-6">

                <label class="form-label" for="inputGuest">No. Of Guest:</label>
                <input type="number" class="form-control" id="inputNoGuest" placeholder="Insert No. of Guest" required>

              </div>
              <div class="col-md-6">

                <label class="form-label" for="inputRate">Rate:</label>
                <input type="text" class="form-control" id="InputPrice" placeholder="Enter Rate" required>
            </div>

            <div class="mb-3 text-center">
              <label class="form-label" for="inputimage" name="inputimage">Insert Image:</label>
              <input type="file" class="form-control" id="inputRoomimage">
              <!-- <input type="hidden" class="form-control" id="Avail"> -->
          </div>
          </div>
          </div>
      
               <!-- OFFCANVAS CLOSING & SAVE BUTTON  -->
               <div class="footer">
                <button type="button" class="btn btn-secondary ms-3" data-bs-dismiss="offcanvas">Close</button>
               <button type="submit" class="btn btn-primary" >Add Room</button>
              </div>
            </form>
            </div> 
      

            <div class="container"> 
              <!-- EDIT COTTAGE MODAL  -->
          <div class="modal fade" id="editCottageModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCottageModalLabel" aria-hidden="true">
            <form id="frmEditRoom">
            <div class="modal-dialog">
              <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="mdlEditCottageLabel">Edit Room Information</h1>
                  <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
                  <!-- FORM FOR EDITING DATA TO THE TABLE -->
          
                  <div class="mb-3">
                    <label class="form-label" for="inputEditrooName">Room No.:</label>
                    <input type="hidden" class="form-control" id="inputEditacc_id">
                    <input type="text" class="form-control" id="inputEditRN" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputEditpax">Room Type: </label>
                    <input type="text" class="form-control" id="inputEditRT" required>
                </div>
          
                <div class="row " style="height: fit-content;">
                <div class="col-md-6">
                  <label class="form-label" for="inputEditType">No. of Guest:</label>
                  <input type="number" class="form-control" id="inputEditNG" required>
                </div>
                <div class="col-md-6 mb-3" >
                  <label class="form-label" for="inputrate">Rate:</label>
                    <input type="text" class="form-control" id="inputEditrate" required>
              </div>
            </div>
            <!-- <div class="mb-3 text-center">
              <label class="form-label" for="inputimage" name="inputimage">Change Image:</label>
              <input type="file" class="form-control" id="inputEditimage">
          </div> -->
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


  <!-- JAVA SCRIPT FILES CONNECTION -->
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script src="js/index.js"></script>
</body>
</html>

<script>  

  // THE FUNCTION OF ADD DATA BUTTON TO SUBMIT DATA 
$("#frmAddRoom").submit(function (e) {
    e.preventDefault(); 
    saveRoom();
  
  });
  $("#frmEditRoom").submit(function (e) {
    e.preventDefault();
    updateRoom();
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