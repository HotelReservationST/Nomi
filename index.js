// CALLS THE getBooking() TO IMPLEMENT ALL ITS FUNCTION
$(document).ready(function () {
    getbooking()
    getA();
    getRoom();
  });

// JavaScript for handling login
// $(document).ready(function() {
//   // alert("data");
// $.get("./php/getname.php", function(response){
//   let data =json.parse(response);
//   if (data.Fame){
//     $("#client").text(data.Fame);
//   }else{
//     $("#client").text("Guest");
//   }
// });

// });
// // Perform AJAX POST request
// $.post(
//     "./php/exalogin.php", 
//     {
//         username: username,
//         password: password
//     }, 
//     function(data) {
//       // console.log(data);
//       //   // Parse the JSON response
//         let response = JSON.parse(data); 

//         // Check if the login was successful
//         if (response.status === "success") {
//                 // Redirect admin to the admin page
//                 window.location.href = "BookRoom.php";
//             } else if (response.status === "successfully") {
//                 // Redirect user to the user dashboard
//                 window.location.href = "Cdashboard.php";
//             }else {
//             // Show alert for invalid login
//             alert("Invalid Login");
//         }
//     }
// );
// });

// $(document).ready(function () {
//   // Handle the form submission
//   $("#AdloginForm").submit(function (e) {
//       e.preventDefault();

//       // Get the entered username and password
//       let Username = $("#loginAdminUsername").val(); // Update with the appropriate username input ID
//       let Password = $("#LoginAdminPassword").val(); // Update with the appropriate password input ID

//       // Perform an AJAX request to validate the login
//       $.post("./php/AlogIn.php", {
//           aUsername: Username,
//           aPassword: Password
//       }, function (data) {
//           if (data === "success") {
//               // Redirect to clientdashboard.html if login is successful
//               window.location.href = "BookRoom.html";
//           } else {
//               // Display an error message if login fails
//               alert("Login failed. Please check your username and password.");
//           }
//       });
//   });
// });

// THE FUNCTION THAT GETS THE DATA FROM THE INPUT BOXES
function saveClient(){
    let client_Fname = $("#regesterfname").val();
    let client_Lname = $("#regesterlname").val();
    let client_Username = $("#regesterUserName").val();
    let client_Pass = $("#regesterPassword").val();
    
    
    //TRANSFER THE DATA TO saveNewAccount.php
    // Ask for confirmation before adding data
    if (confirm("Are you sure you want to regester this account?")) {
    $.post("./php/saveClient.php", // <---THE LOCATION OF THE FILE saveNewAccount.php
    {
        Fname: client_Fname, //<--- ASIGN THE DATA FROM INPUT BOXES TO EACH COLUMNS IN THE DATA BASE
        Lname: client_Lname,
        Username: client_Username,
        Pass: client_Pass,
  
    },
    
    
    function(data){
        alert(data);// <--- TO MAKE NOTIFICATION APPEAR IF A NEW DATA IS ADDED TO THE DATA BASE
        $('#mdlregistration').modal('hide')
    }
    );
    }else {
      // If the user cancels, you can provide a message or take other actions if needed
      alert("Registration canceled.");
    }
    }
  


  // THE FUNCTION THAT GETS THE DATA FROM THE INPUT BOXES
function bookRoom(){
    let booked_fname = $("#inputfname").val();
    let booked_lname = $("#inputlname").val();
    let booked_time = $("#inputIdate").val();
    let booked_date = $("#inputDate").val();
    let booked_guest = $("#inputGuestNo").val();
    let booked_contact= $("#inputContact").val();
    let booked_room = $("#inputAcmo").val();
    // let booked_stat= $("#stat").val();
    
    
    //TRANSFER THE DATA TO saveBooking.php
    // Ask for confirmation before adding data
    if (confirm("Are you sure you want to book this Room?")) {
    $.post("./php/bookRoom.php", // <---THE LOCATION OF THE FILE saveBooking.php
    {
        fname: booked_fname , //<--- ASIGN THE DATA FROM INPUT BOXES TO EACH COLUMNS IN THE DATA BASE
        lname: booked_lname,
        CheIn: booked_time,
        CheOut: booked_date,
        Guest: booked_guest,
        Contact: booked_contact,
        RoomNo: booked_room,
        // stat: booked_stat,

    },
    
    function(data){
        alert(data);// <--- TO MAKE NOTIFICATION APPEAR IF A NEW DATA IS ADDED TO THE DATA BASE
        getbooking(); 
        // <--- PREVENTS MANUAL RELOAD OF PAGE WHEN DATA IS ADDED
        closeAddBookingOffcanvas();
        getAvailableRooms();
    
    }
    );
    }else {
      // If the user cancels, you can provide a message or take other actions if needed
      alert("Booked Room is canceled.");
    }
    }
    // FUNCTION TO CLOSE THE ADD BOOKING OFFCANVAS
    function closeAddBookingOffcanvas() {
      $('#addBookingoffcanvas').offcanvas('hide');
    }
    

    // THE FUNCTION THAT GETS THE DATA FROM THE INPUT BOXES
function saveAdmin(){
    let admin_fname = $("#setfname").val();
    let admin_lname = $("#setlname").val();
    let admin_username = $("#setusername").val();
    let admin_pass = $("#setpassword").val();
    
    
    //TRANSFER THE DATA TO saveNewAccount.php
    // Ask for confirmation before adding data
    if (confirm("Are you sure you want to add this new account?")) {
    $.post("./php/saveAdmin.php", // <---THE LOCATION OF THE FILE saveNewAccount.php
    {
        fname: admin_fname, //<--- ASIGN THE DATA FROM INPUT BOXES TO EACH COLUMNS IN THE DATA BASE
        lname: admin_lname,
        username: admin_username,
        pass: admin_pass,
  
    },
    
    
    function(data){// <--- TO MAKE NOTIFICATION APPEAR IF A NEW DATA IS ADDED TO THE DATA BASE
      alert(data);// <--- TO MAKE NOTIFICATION APPEAR WHEN UPDATING A DATA 
      getA(); 
    }
    );
    }else {

      // If the user cancels, you can provide a message or take other actions if needed
      alert("Adding New Account canceled.");
    }
    }


    // THE FUNCTION TO POST THE DATA IN THE DATA BASE TO THE HTML TABLE 
function getA(){

    $.get("./php/getA.php", //<--- THE LINK CONNECTION TO getAdmin.php
    
    // THIS FUNCTION POST ALL DATA IN THE DATA BASE TO THE TABLE IN index.html
    function(data){ 
  
        // console.log(data);
        let accounts = JSON.parse(data);
        let displayData = document.querySelector("#DisplayAdmin"); //<--- CONTAINS THE TABLE BODY ID #tbDisplayBooking THAT WE SET IN THE HTML TABLE FOUND IN admin.html
        let tbContent = "";
  
        for (let i = 0; i < accounts.length; i++){ //<--- TO DISPLAY THE DATA TO EACH ROW WE USE THE LOOPING AS IT DISPLAY ALL THE DATA AGIN AND AGIN UNTIL ALL THE DATA IS DISPLAYED
            tbContent += `<tr>
            <th>${accounts[i].admin_id}</th> 
            <td>${accounts[i].Fname}</td> 
            <td>${accounts[i].Lname}</td> 
            <td>${accounts[i].Username}</td>
            <td>${accounts[i].password}</td>
            
            <td class="td text-center"><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#editAccountModal" onclick="editAccount('${accounts[i].Fname}', '${accounts[i].Lname}', '${accounts[i].Username}','${accounts[i].password}', ${accounts[i].admin_id})">
            <img src="icon/pencil.svg" alt="edit" width="23" height="23"> <!-- Edit icon -->
            </button> <button type="button" class="btn btn-outline-warning" onclick="deleteAccount(${accounts[i].admin_id})">
            <img src="icon/trash.svg" alt="delete" width="23" height="23"> <!-- Delete icon -->
           </button></td> 
           </tr>`;
        }         // ↑ PUTS ALL THE DATA TO EACH SPECIFIC COLUMN
                  // ↑ THE LAST <td></td> CONTAINS THE BUTTON THAT APPEARS ALONG THE ROW OF DATA UNDER THE ACTION COLUMN WHICH IS THE BUTTON FOR EDITING AND DELETING THE DATA. THE LINE OF CODE ALSO SPECIFI WHICH DATA VALUE SHOULD BE EDITED OR WHICH ROW OF DATA VALUE SHOULD BE DELETED
                  
        displayData.innerHTML = tbContent; //<--- NOW TO CALL AND DISPLAY THE DATA AND ACTIVATE IS SET FUNCTION TO DISPLAY THE DATA IN THE HTML TABLE 
        
    });
  
  }


  // FUNCTION FOR EDITING DATA 
function editAccount(Fname, Lname, Username, password, admin_id) {
  $("#setEditfname").val(Fname);
  $("#setEditlname").val(Lname);
  $("#setEditusername").val(Username); //<--- THIS MAKES EACH CURRENT VALUE APPEARS INTO THE INPUT BOX TO EDIT
  $("#setEditpass").val(password);
  $("#setEditID").val(admin_id);
}

// FUNCTION FOR UPDATING THE DATA of Admin 
function updateAccount() {
  let account_id = $("#setEditID").val();
  let account_fname = $("#setEditfname").val(); //<--- GETS THE NEW DATA FROM INPUT BOXES 
  let account_lname = $("#setEditlname").val();      //<--- IT ALSO ASIGN EACH NEW VALUES TO EACH VARIABLE
  let account_username = $("#setEditusername").val();
  let account_pass = $("#setEditpass").val();
    // Ask for confirmation before deleting data
if (confirm("Are you sure you want to update this Account?")) {
  $.post(
    "./php/updateAdmin.php", //<--- LINK CONNECTION FOR updateNewAccount.php
    {
      account_id: account_id,
      fname: account_fname,
      lname: account_lname, //<--- TRANSFER THE NEW VALUES TO BE POSTED IN updateNewAccount.php
      username: account_username,
      pass: account_pass,
     
    },

    function (data) {
      alert(data);// <--- TO MAKE NOTIFICATION APPEAR WHEN UPDATING A DATA 
      getA(); // <--- PREVENTS MANUAL RELOAD OF PAGE WHEN DATA IS EDITED
      $("#editAccountModal").modal("hide"); //<--- AUTOMATICALLY HIDES THE EDIT ACCOUNT MODAL FORM WHEN DATA IS EDITED
      alert(data);
    });
  }else{
    // If the user cancels, you can provide a message or take other actions if needed
    alert("Updating canceled.");
  }
}


// FUNCION TO DELETE THE DATA from Admin
function deleteAccount(account_id){
  // Ask for confirmation before deleting data
if (confirm("Are you sure you want to delete this Account?")) {
    $.post(
        "./php/deleteAdmin.php", //<--- LINK CONNECTION TO deleteAccount.php
        {
          account_id: account_id, //<--- SPECIFI WHICH ROW OF DATA IS TO DELETE
        },

        function(data){
          alert(data);// <--- TO MAKE NOTIFICATION APPEAR WHEN DELETE DATA 
          getA(); // <--- PREVENTS MANUAL RELOAD OF PAGE WHEN DATA IS DELETED

        });
      }else{
          // If the user cancels, you can provide a message or take other actions if needed
          alert("Deleting canceled.");
      }
}


// for Adding Room
  // THE FUNCTION THAT GETS THE DATA FROM THE INPUT BOXES
  function saveRoom(){
    let RoomNo = $("#inputRoomNo").val();
    let RoomType = $("#inputType").val();
    let Guest = $("#inputNoGuest").val();
    let Rate = $("#InputPrice").val();
    let RoomImage = document.getElementById("inputRoomimage");
    // let VAil = $("#Avail").val();

    
    // Check if an image is selected
    if (RoomImage.files.length === 0) {
      alert("Please select an image.");
      return;
    }
  
    // Create a FileReader to read the selected image
    let reader = new FileReader();
  
    reader.onload = function () {
      let image_data = reader.result;
  
    //TRANSFER THE DATA TO saveNewAccount.php
    // Ask for confirmation before adding data
    if (confirm("Are you sure you want to add this data?")) {
    $.post("./php/saveRoom.php", // <---THE LOCATION OF THE FILE saveNewAccount.php
    {
      Room: RoomNo, //<--- ASIGN THE DATA FROM INPUT BOXES TO EACH COLUMNS IN THE DATA BASE
      Type: RoomType,
      Pax: Guest,
      Price: Rate,
      Image: image_data,
      // Availab:VAil

    },
     
    function(data){
      alert(data);
      closeAddCottageOffcanvas();
      getRoom();// <--- TO MAKE NOTIFICATION APPEAR IF A NEW DATA IS ADDED TO THE DATA BASE
  
    }

    );
    }else {
      // If the user cancels, you can provide a message or take other actions if needed
      alert("Data not save.");
    }
    }
  
     // Read the selected image as a data URL
   reader.readAsDataURL(RoomImage.files[0]);
  
   // FUNCTION TO CLOSE THE ADD BOOKING OFFCANVAS
  function closeAddCottageOffcanvas() {
    $('#addCottageoffcanvas').offcanvas('hide');
  }
  
  }

  //Get Room To Display
  // THE FUNCTION TO POST THE DATA IN THE DATA BASE TO THE HTML TABLE 
  function getRoom() {

    $.get("./php/getRoom.php", //<--- THE LINK CONNECTION TO getBooking.php
    
    // THIS FUNCTION POST ALL DATA IN THE DATA BASE TO THE TABLE IN index.html
    function(data){ 
  
        // console.log(data);
        let cottages = JSON.parse(data);
        let displayData = document.querySelector("#DisplayRoom"); //<--- CONTAINS THE TABLE BODY ID #tbDisplayBooking THAT WE SET IN THE HTML TABLE FOUND IN index.html
        let tbContent = "";
  
        for (let i = 0; i < cottages.length; i++){ //<--- TO DISPLAY THE DATA TO EACH ROW WE USE THE LOOPING AS IT DISPLAY ALL THE DATA AGIN AND AGIN UNTIL ALL THE DATA IS DISPLAYED
            tbContent += `<tr>
            <td>${cottages[i].acc_id}</td> 
            <td>${cottages[i].RoomNo}</td> 
            <td>${cottages[i].RoomType}</td> 
            <td>${cottages[i].NoGuest}</td>
            <td>${cottages[i].Rate}</td>
            <td style="display: grid; place-items: center;"><img src="${cottages[i].RoomImage}" alt="Room Image" width="100" height="100"></td>
            <td>${cottages[i].Availability}</td>
            <td class="td text-center"><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#editCottageModal" onclick="editRoom('${cottages[i].RoomNo}', '${cottages[i].RoomType}', '${cottages[i].NoGuest}','${cottages[i].Rate}', '${cottages[i].acc_id}')">
            <img src="icon/pencil.svg" alt="edit" width="23" height="23"> <!-- Edit icon -->
            </button> <button type="button" class="btn btn-outline-warning" onclick="deleteRoom(${cottages[i].acc_id})">
            <img src="icon/trash.svg" alt="edit" width="23" height="23"> <!-- Delete icon -->
           </button></td> 
           </tr>`;
        }         // ↑ PUTS ALL THE DATA TO EACH SPECIFIC COLUMN
                  // ↑ THE LAST <td></td> CONTAINS THE BUTTON THAT APPEARS ALONG THE ROW OF DATA UNDER THE ACTION COLUMN WHICH IS THE BUTTON FOR EDITING AND DELETING THE DATA. THE LINE OF CODE ALSO SPECIFI WHICH DATA VALUE SHOULD BE EDITED OR WHICH ROW OF DATA VALUE SHOULD BE DELETED
                  
        displayData.innerHTML = tbContent; //<--- NOW TO CALL AND DISPLAY THE DATA AND ACTIVATE IS SET FUNCTION TO DISPLAY THE DATA IN THE HTML TABLE 
        
    });
  
    $.get("./php/getRoom.php", //<--- THE LINK CONNECTION TO getBooking.php
    
    // THIS FUNCTION POST ALL DATA IN THE DATA BASE TO THE TABLE IN index.html
    function(data){ 
  
        // console.log(data);
        let cottages = JSON.parse(data);
        let displayData = document.querySelector("#BookingDisplayRoom"); //<--- CONTAINS THE TABLE BODY ID #tbDisplayBooking THAT WE SET IN THE HTML TABLE FOUND IN index.html
        let tbContent = "";
        let roomBooking = cottages.filter(accomodation => accomodation.Availability === "Available");
        // console.log(roomBooking)
  
        for (let i = 0; i < roomBooking.length; i++){ //<--- TO DISPLAY THE DATA TO EACH ROW WE USE THE LOOPING AS IT DISPLAY ALL THE DATA AGIN AND AGIN UNTIL ALL THE DATA IS DISPLAYED
            tbContent += `<tr>
            <td>${roomBooking[i].RoomNo}</td> 
            <td>${roomBooking[i].RoomType}</td> 
            <td>${roomBooking[i].NoGuest}</td>
            <td>${roomBooking[i].Rate}</td>
            <td style="display: grid; place-items: center;"><img src="${roomBooking[i].RoomImage}" alt="Room Image" width="100" height="100"></td>
            <td>${roomBooking[i].Availability}</td>
           </tr>`;
        }         // ↑ PUTS ALL THE DATA TO EACH SPECIFIC COLUMN
                  // ↑ THE LAST <td></td> CONTAINS THE BUTTON THAT APPEARS ALONG THE ROW OF DATA UNDER THE ACTION COLUMN WHICH IS THE BUTTON FOR EDITING AND DELETING THE DATA. THE LINE OF CODE ALSO SPECIFI WHICH DATA VALUE SHOULD BE EDITED OR WHICH ROW OF DATA VALUE SHOULD BE DELETED
                  
        displayData.innerHTML = tbContent; //<--- NOW TO CALL AND DISPLAY THE DATA AND ACTIVATE IS SET FUNCTION TO DISPLAY THE DATA IN THE HTML TABLE 
        
    });
  
    $.get("./php/getRoom.php", //<--- THE LINK CONNECTION TO getBooking.php
    
    // THIS FUNCTION POST ALL DATA IN THE DATA BASE TO THE TABLE IN index.html
    function(data){ 
  
        // console.log(data);
        let cottages = JSON.parse(data);
        let displayData = document.querySelector("#CdisplayRoom"); //<--- CONTAINS THE TABLE BODY ID #tbDisplayBooking THAT WE SET IN THE HTML TABLE FOUND IN index.html
        let tbContent = "";
        let roomBooking = cottages.filter(accomodation => accomodation.Availability === "Available");
        console.log(roomBooking)
  
        for (let i = 0; i < roomBooking.length; i++){ //<--- TO DISPLAY THE DATA TO EACH ROW WE USE THE LOOPING AS IT DISPLAY ALL THE DATA AGIN AND AGIN UNTIL ALL THE DATA IS DISPLAYED
            tbContent += `<tr>
            <td>${roomBooking[i].RoomNo}</td> 
            <td>${roomBooking[i].RoomType}</td> 
            <td>${roomBooking[i].NoGuest}</td>
            <td>${roomBooking[i].Rate}</td>
            <td style="display: grid; place-items: center;"><img src="${roomBooking[i].RoomImage}" alt="Room Image" width="100" height="100"></td>
            <td>${roomBooking[i].Availability}</td>
           </tr>`;
        }         // ↑ PUTS ALL THE DATA TO EACH SPECIFIC COLUMN
                  // ↑ THE LAST <td></td> CONTAINS THE BUTTON THAT APPEARS ALONG THE ROW OF DATA UNDER THE ACTION COLUMN WHICH IS THE BUTTON FOR EDITING AND DELETING THE DATA. THE LINE OF CODE ALSO SPECIFI WHICH DATA VALUE SHOULD BE EDITED OR WHICH ROW OF DATA VALUE SHOULD BE DELETED
                  
        displayData.innerHTML = tbContent; //<--- NOW TO CALL AND DISPLAY THE DATA AND ACTIVATE IS SET FUNCTION TO DISPLAY THE DATA IN THE HTML TABLE 
        
    });
  }
  

//Editing Room Info. and  Updating
// FUNCTION FOR EDITING DATA 
function editRoom(RoomNo, RoomType, NoGuest, Rate, acc_id){
  $("#inputEditRN").val(RoomNo);
  $("#inputEditRT").val(RoomType);
  $("#inputEditNG").val(NoGuest); //<--- THIS MAKES EACH CURRENT VALUE APPEARS INTO THE INPUT BOX TO EDIT
  $("#inputEditrate").val(Rate);
  // $("#inputEditimage").val(RoomImage);
  $("#inputEditacc_id").val(acc_id);
}

// FUNCTION FOR UPDATING THE DATA 
function  updateRoom(){
  let Room_id = $("#inputEditacc_id").val();
  let Room_RoomNo = $("#inputEditRN").val(); //<--- GETS THE NEW DATA FROM INPUT BOXES 
  let Room_RT = $("#inputEditRT").val();      //<--- IT ALSO ASIGN EACH NEW VALUES TO EACH VARIABLE
  let Room_NG = $("#inputEditNG").val();
  let Room_rate= $("#inputEditrate").val();
  // let Room_RI = $("#inputEditimage").val();

    // Ask for confirmation before deleting data
if (confirm("Are you sure you want to update this data?")) {
  $.post(
    "./php/updateRoom.php", //<--- LINK CONNECTION FOR updateNewAccount.php
    {
      acc_id: Room_id,
      RoomNo: Room_RoomNo, //<--- TRANSFER THE NEW VALUES TO BE POSTED IN updateNewAccount.php
      RoomType: Room_RT,
      NoGuest: Room_NG,
      Rate: Room_rate,
      // RoomImage: Room_RI,
    },

    function (data) {
      alert(data);// <--- TO MAKE NOTIFICATION APPEAR WHEN UPDATING A DATA 
      getRoom(); // <--- PREVENTS MANUAL RELOAD OF PAGE WHEN DATA IS EDITED
      $("#editCottageModal").modal("hide"); //<--- AUTOMATICALLY HIDES THE EDIT ACCOUNT MODAL FORM WHEN DATA IS EDITED
      
    });
  }else{
    // If the user cancels, you can provide a message or take other actions if needed
    alert("Updating canceled.");
  }
}

//Delete Room
function deleteRoom(acc_id){
  // Ask for confirmation before deleting data
if (confirm("Are you sure you want to delete this?")) {
    $.post(
        "./php/deleteRoom.php", //<--- LINK CONNECTION TO deleteBooking.php
        {
          Acc_id: acc_id, //<--- SPECIFI WHICH ROW OF DATA IS TO DELETE
        },

        function(data){
          alert(data);// <--- TO MAKE NOTIFICATION APPEAR WHEN DELETE DATA 
          getRoom(); // <--- PREVENTS MANUAL RELOAD OF PAGE WHEN DATA IS DELETED

        });
      }else{
          // If the user cancels, you can provide a message or take other actions if needed
          alert("Deleting canceled.");
      }
}



  //Get Booking to Display

  // THE FUNCTION TO POST THE DATA IN THE DATA BASE TO THE HTML TABLE 
  function getbooking() {

    $.get("./php/getbooking.php", //<--- THE LINK CONNECTION TO getBooking.php
    
    // THIS FUNCTION POST ALL DATA IN THE DATA BASE TO THE TABLE IN index.html
    function(data){ 

        // console.log(data);
        let bookings = JSON.parse(data);
        let displayData = document.querySelector("#CDBooking"); //<--- CONTAINS THE TABLE BODY ID #tbDisplayBooking THAT WE SET IN THE HTML TABLE FOUND IN index.html
        let tbContent = "";
        let requestBookings = bookings.filter(booking => booking.stat === "Pending");
        console.log(requestBookings)
        for (let i = 0; i < requestBookings.length; i++){ //<--- TO DISPLAY THE DATA TO EACH ROW WE USE THE LOOPING AS IT DISPLAY ALL THE DATA AGIN AND AGIN UNTIL ALL THE DATA IS DISPLAYED
            tbContent += `<tr>
            <th>${requestBookings[i].Booking_id}</th> 
            <td>${requestBookings[i].fname}</td> 
            <td>${requestBookings[i].lname}</td> 
            <td>${requestBookings[i].CheIn}</td>
            <td>${requestBookings[i].CheOut}</td>
            <td>${requestBookings[i].Guest}</td>
            <td>${requestBookings[i].Contact}</td>
            <td>${requestBookings[i].RoomNo}</td>
            <td>${requestBookings[i].stat}</td>
            <td class="td text-center">
            <button type="button" class="btn btn-outline-success" onclick="updateBookingStatus('${requestBookings[i].Booking_id}', 'confirm')">Confirm
            </button>
            <button type="button" class="btn btn-outline-danger" onclick="updateBookingStatus('${requestBookings[i].Booking_id}', 'decline')">Decline
            </button> 
           </tr>`;
        }         // ↑ PUTS ALL THE DATA TO EACH SPECIFIC COLUMN
                  // ↑ THE LAST <td></td> CONTAINS THE BUTTON THAT APPEARS ALONG THE ROW OF DATA UNDER THE ACTION COLUMN WHICH IS THE BUTTON FOR EDITING AND DELETING THE DATA. THE LINE OF CODE ALSO SPECIFI WHICH DATA VALUE SHOULD BE EDITED OR WHICH ROW OF DATA VALUE SHOULD BE DELETED
                  
        displayData.innerHTML = tbContent; //<--- NOW TO CALL AND DISPLAY THE DATA AND ACTIVATE IS SET FUNCTION TO DISPLAY THE DATA IN THE HTML TABLE 
        
    }); 

    //for ZINA booking Data
    $.get("./php/getbooking.php", //<--- THE LINK CONNECTION TO getBooking.php
    
     // THIS FUNCTION POST ALL DATA IN THE DATA BASE TO THE TABLE IN bookingRecords.html
    function(data){ 

        // console.log(data);
        let bookings = JSON.parse(data);
        let displayData3 = document.querySelector("#DisplayBooking"); //<--- CONTAINS THE TABLE BODY ID #tbDisplayBooking2 THAT WE SET IN THE HTML TABLE FOUND IN bookingRecords.html
        let tbContent3 = "";
      
        for (let i = 0; i < bookings.length; i++){ //<--- TO DISPLAY THE DATA TO EACH ROW WE USE THE LOOPING AS IT DISPLAY ALL THE DATA AGIN AND AGIN UNTIL ALL THE DATA IS DISPLAYED 
            tbContent3 += `<tr>
            <td>${bookings[i].Booking_id}</td> 
            <td>${bookings[i].fname}</td> 
            <td>${bookings[i].lname}</td> 
            <td>${bookings[i].CheIn}</td>
            <td>${bookings[i].CheOut}</td>
            <td>${bookings[i].Guest}</td>
            <td>${bookings[i].Contact}</td>
            <td>${bookings[i].RoomNo}</td>
            <td>
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#editBookingModal" onclick="editBooking('${bookings[i].fname}', '${bookings[i].lname}', '${bookings[i].TimeA}','${bookings[i].dateA}','${bookings[i].Guest}','${bookings[i].Contact}', '${bookings[i].RoomNo}','${bookings[i].Booking_id}')">
            <img src="icon/pencil.svg" alt="edit" width="23" height="23"> <!-- Edit icon -->
            </button> 
            <button type="button" class="btn btn-outline-danger" onclick="deleteBooking(${bookings[i].Booking_id}, 'confirmDelete')">
            <img src="icon/trash.svg" alt="edit" width="23" height="23"> <!-- Delete icon -->
            </button>
            </td>
            </tr>`;
        }         // ↑ PUTS ALL THE DATA TO EACH SPECIFIC COLUMN
                  
        displayData3.innerHTML = tbContent3; //<--- NOW TO CALL AND DISPLAY THE DATA AND ACTIVATE IS SET FUNCTION TO DISPLAY THE DATA IN THE HTML TABLE 
        
    });

//for Confirmed Booking
$.get("./php/getbooking.php", function(data){ 
  // console.log(data);
  let bookings = JSON.parse(data);
  let displayData1 = document.querySelector("#confirmBook");
  let tbContent1 = "";

  // Filter only confirmed bookings
  let confirmedBookings = bookings.filter(booking => booking.stat === "Confirmed");
  // console.log(confirmedBookings)
  for (let i = 0; i < confirmedBookings.length; i++){
      tbContent1 += `<tr>
          <th>${confirmedBookings[i].Booking_id}</th> 
          <td>${confirmedBookings[i].fname}</td> 
          <td>${confirmedBookings[i].lname}</td> 
          <td>${confirmedBookings[i].CheIn}</td>
          <td>${confirmedBookings[i].CheOut}</td>
          <td>${confirmedBookings[i].Guest}</td>
          <td>${confirmedBookings[i].Contact}</td>
          <td>${confirmedBookings[i].RoomNo}</td>
          <td>${confirmedBookings[i].stat}</td>
          <td class="td text-center">
          <div class="button-row">
          <button type="button" class="btn btn-outline-success" onclick="checkOutRoom('${confirmedBookings[i].Booking_id}', 'confirmcheckOut')">
              Check Out <!-- Button text -->
          </button>
          <button type="button" class="btn btn-outline-warning" onclick="checkOutRoom('${confirmedBookings[i].Booking_id}', 'declinecheckOut')">
              Cancel <!-- Button text -->
          </button>
      </div>
          </td>
      </tr>`;
  }

  displayData1.innerHTML = tbContent1;
});

    $.get("./php/getbooking.php", //<--- THE LINK CONNECTION TO getBooking.php
    
     // THIS FUNCTION POST ALL DATA IN THE DATA BASE TO THE TABLE IN bookingRecords.html
    function(data){ 

        // console.log(data);
        let bookings = JSON.parse(data);
        let displayData2 = document.querySelector("#CDisplayBooking"); //<--- CONTAINS THE TABLE BODY ID #tbDisplayBooking2 THAT WE SET IN THE HTML TABLE FOUND IN bookingRecords.html
        let tbContent2 = "";

        for (let i = 0; i < bookings.length; i++){ //<--- TO DISPLAY THE DATA TO EACH ROW WE USE THE LOOPING AS IT DISPLAY ALL THE DATA AGIN AND AGIN UNTIL ALL THE DATA IS DISPLAYED 
            tbContent2 += `<tr>
            <td>${bookings[i].fname}</td> 
            <td>${bookings[i].lname}</td> 
            <td>${bookings[i].CheIn}</td>
            <td>${bookings[i].CheOut}</td>
            <td>${bookings[i].Guest}</td>
            <td>${bookings[i].Contact}</td>
            <td>${bookings[i].RoomNo}</td>
            <td>${bookings[i].stat}</td>
          </tr>`;
        }         // ↑ PUTS ALL THE DATA TO EACH SPECIFIC COLUMN
                  
        displayData2.innerHTML = tbContent2; //<--- NOW TO CALL AND DISPLAY THE DATA AND ACTIVATE IS SET FUNCTION TO DISPLAY THE DATA IN THE HTML TABLE 
        
    });
  }    
//Delete Booking from Table or database

// FUNCION TO DELETE AND CANCEL BOOKING DATA
function deleteBooking(Booking_id, confirmationType) {
  let confirmationMessage;

  if (confirmationType === 'confirmDelete') {
    confirmationMessage = "Are you sure you want to delete this booking?This action is irreversible.";
  } else if (confirmationType === 'confirmDelete2') {
    confirmationMessage = "Are you sure you want to  Cancel this booking? This action is irreversible.";
  }

  if (confirm(confirmationMessage)) {
    $.post(
      "./php/deleteBooking.php", // <-- LINK CONNECTION TO deleteBooking.php
      {
        Booking_id: Booking_id, // <-- SPECIFY WHICH ROW OF DATA IS TO DELETE
      },
      function (data) {
        alert(data); // <-- TO DISPLAY A NOTIFICATION MESSAGE WHEN DELETE DATA
        getbooking(); // <-- PREVENTS MANUAL RELOAD OF PAGE WHEN DATA IS DELETED
      }
    );
  } else {
    // If the user cancels, you can provide a message or take other actions if needed
    alert("Deleting canceled.");
  }
}

//Edit Booking 
// FUNCTION FOR EDITING DATA 
function editBooking(fname, lname, TimeA, dateA, Guest, Contact, RoomNo, Booking_id) {
  $("#inputEditfname").val(fname);
  $("#inputEditlname").val(lname);
  $("#inputEditTime").val(TimeA); //<--- THIS MAKES EACH CURRENT VALUE APPEARS INTO THE INPUT BOX TO EDIT
  $("#inputEditDate").val(dateA);
  $("#inputEditGuestNo").val(Guest);
  $("#inputEditContact").val(Contact);
  $("#inputEditAccommodation").val(RoomNo);
  $("#inputEditID").val(Booking_id);
}

// FUNCTION FOR UPDATING THE DATA 
function updateBooking() {
  let booking_id = $("#inputEditID").val();
  let booking_fname = $("#inputEditfname").val(); //<--- GETS THE NEW DATA FROM INPUT BOXES 
  let booking_lname = $("#inputEditlname").val();      //<--- IT ALSO ASIGN EACH NEW VALUES TO EACH VARIABLE
  let booking_time = $("#inputEditTime").val();
  let booking_date = $("#inputEditDate").val();
  let booking_maxnoguest = $("#inputEditGuestNo").val();
  let booking_contactno = $("#inputEditContact").val();
  let booking_accommodation = $("#inputEditAccommodation").val();

    // Ask for confirmation before deleting data
if (confirm("Are you sure you want to update this Booking?")) {
  $.post(
    "./php/updateBooking.php", //<--- LINK CONNECTION FOR updateBooking.php
    {
      Booking_id: booking_id,
      fname: booking_fname, //<--- TRANSFER THE NEW VALUES TO BE POSTED IN updateBooking.php
      lname: booking_lname,
      TimeA: booking_time,
      dateA: booking_date,
      Guest:booking_maxnoguest,
      Contact: booking_contactno,
      RoomNo: booking_accommodation,
    },

    function (data) {
      alert(data);// <--- TO MAKE NOTIFICATION APPEAR WHEN UPDATING A DATA 
      getbooking(); // <--- PREVENTS MANUAL RELOAD OF PAGE WHEN DATA IS EDITED
      $("#editBookingModal").modal("hide"); //<--- AUTOMATICALLY HIDES THE EDIT BOOKING MODAL FORM WHEN DATA IS EDITED
      
    });
  }else{
    // If the user cancels, you can provide a message or take other actions if needed
    alert("Updating canceled.");
  }
}

//code js for confirm and decline booking status
function updateBookingStatus(Booking_id, action) {
  let confirmationMessage;

  if (action === 'confirm') {
      confirmationMessage = "Are you sure you want to Confirm this booking?";
  } else if (action === 'decline') {
      confirmationMessage = "Are you sure you want to Decline this booking?";
  } else {
      alert("Invalid action!");
      return;
  }

  if (confirm(confirmationMessage)) {
      $.post(
          "./php/Confirmbook.php",
          {
              Book_id: Booking_id,
              action: action  // Ensure 'action' parameter is sent
          },
          function (data) {
              alert(data);
              getbooking();
                // Refresh the booking data after updating
          }
      ).fail(function() {
          alert("Error updating booking status.");
      });
  } else {
      alert("Operation canceled.");
  }
}

//Check out Room
// Function to handle checkout
//code js for confirm and decline booking status
function checkOutRoom(Booking_id, action) {
  let confirmationMessage;

  if (action === 'confirmcheckOut') {
      confirmationMessage = "Are you sure you want to Check Out?";
  } else if (action === 'declinecheckOut') {
      confirmationMessage = "Are you sure you want to Cancel the Check Out?";
  }else {
    alert("Invalid action!");
    return;
}

  if (confirm(confirmationMessage)) {
      $.post(
          "./php/checkout.php",
          {
              Book_id: Booking_id,
              action: action  // Ensure 'action' parameter is sent
          },
          function (data) {
              alert(data);
              getbooking();  // Refresh the booking data after updating
          }
      ).fail(function() {
          alert("Error in Check Out.");
      });
  } else {
      alert("Operation canceled.");
  }
}



