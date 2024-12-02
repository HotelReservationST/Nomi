function loginUser() {
    // alert("data");
  let username = $('#loginUsername').val();
  let password = $('#LoginPassword').val();

  // Perform AJAX POST request
  $.post(
      "./php/exalogin.php", 
      {
          username: username,
          password: password
      }, 
      function(data) {
        // console.log(data);
        //   // Parse the JSON response
          let response = JSON.parse(data); 

          // Check if the login was successful
          if (response.status === "success") {
                  // Redirect admin to the admin page
                  window.location.href = "BookRoom.php";
              } else if (response.status === "successfully") {
                  // Redirect user to the user dashboard
                  window.location.href = "Cdashboard.php";
              }else {
              // Show alert for invalid login
              alert("Invalid Login");
          }
      }
  );
}