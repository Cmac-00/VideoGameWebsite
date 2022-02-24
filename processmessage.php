<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/0ef36cb894.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="message.css">

  <title>Message Sent</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="scripts.js"></script>
</head>

<body>
    <div class="banner">
    <div class="navbar">
      <a href="home.html"> <img src="logo_transparent.png" class="logo"></a>
      <ul class="topbar">

        <li><a href="sales.html"><i class="fas fa-store"></i> Game Sales</a></li>
        <li><a href="#" onclick="signIn()"><i class="fas fa-edit"></i> Data Editor</a></li>
        <li><a href="message.html"><i class="fas fa-envelope"></i> Message Us</a></li>
        <li><a href="signin.html"><i class="fas fa-user"></i> Sign In</a></li>
      </ul>
     </div>

     <?php

     $name = $_POST['name'];
     $email = $_POST['emailadd'];
     $reason = $_POST['reason'];
     $message = $_POST['message'];

      
     echo " 
     <h1 style='color: white; text-align: center'>Message Sent </h1>
         <h2 style='color: white'>Details:</h2>
         <h2 style='color: white'>Your Name: {$name}</h2>
         <h2 style='color: white'>Your Email Address: {$email}</h2>
         <h2 style='color: white'>Reason for Message: {$reason}</h2>
         <h3 style='color: white'>Message: {$message}</h3>
         ";
 
     
     ?>
    



    <footer class="footer">
        <div class="inner_footer">
          <div class="logo_container">
            <img src="logo_transparent.png">
          </div>
    
          <div class="footer_third">
            <h1>Need Help?</h1>
            <a href=#>Terms &amp; Conditions</a>
            <a href=#>Privacy Policy</a>
            <a href=#>Careers</a>
          </div>
    
          <div class="footer_third">
            <h1>More</h1>
            <a href=#>Future Gaming</a>
            <a href=#>Our Team</a>
            <a href=#>Twitch Events</a>
          </div>
    
          <div class="footer_third">
            <h1>Follow Us</h1>
            <li><a href=#><i class="fab fa-facebook-square"></i></a></li>
            <li><a href=#><i class="fab fa-instagram-square"></i> </a></li>
            <li><a href=#><i class="fab fa-twitter-square"></i> </a></li>
            <li><a href=#><i class="fab fa-linkedin"></i> </a></li>
    
            <div class="address">
              Copyright &copy; Game Network<br>
              Queens University Belfast<br>
              16 Malone Road<br>
              Belfast<br>
              BT9 6SB
            </div>
    
          </div>
        </div>
      </footer>
      <script>
    
        function sweetAlertClick() {
          swal({
            text: "Gallery Currently Unavailable",
            icon: "warning",
            button: false,
          });
        }
      </script>
    
    </body>
    
    </html>