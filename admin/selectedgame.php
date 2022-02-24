<?php

if (isset($_GET['rank'])) {

  $gamerank = $_GET['rank'];
  $endpoint = "http://cmcdowell29.lampt.eeecs.qub.ac.uk/videogamesales/api.php?rank={$gamerank}";
  $result = file_get_contents($endpoint);

  $data = json_decode($result, true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0ef36cb894.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="message.css">
    <title>Selected Game</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
  <div class="banner">
    <div class="navbar">
      <a href="home.html"> <img src="logo_transparent.png" class="logo"></a>
      <ul class="topbar">

        <li><a href="../sales.html"><i class="fas fa-store"></i> Game Sales</a></li>
        <li><a href="index.php"><i class="fas fa-edit"></i> Data Editor</a></li>
        <li><a href="../message.html"><i class="fas fa-envelope"></i> Message Us</a></li>
        <li><a href="signout.php"><i class="fas fa-sign-out-alt"></i>Sign Out</a></li>
      </ul>
    </div>

    <div class="container-fluid" style="background-color: #f1c40f;">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 a"></div>
        <div class="col-md-4 col-sm-4 col-xs-12" id="b" style="border: 0px solid;
    padding: 50px 60px;
    margin-top: 5vh;
    margin-bottom: 5vh;
    -webkit-box-shadow: 3px 2px 6px 9px rgba(0,0,0,0.75);
   -moz-box-shadow: 3px 2px 6px 9px rgba(0,0,0,0.75);
    box-shadow: 3px 2px 6px 9px rgba(0,0,0,0.75);
    background-color: #34495e;
    color: #f1c40f;">
          <div class="selected-game">
          <?php
            foreach ($data as $row) {
              echo "<h1> #{$row['rank']}</h1>
    <h1> {$row['name']}</h1>
    <h2> {$row['platform']}</h1>
    <h2>  {$row['year']}</h1>
    <h2>  {$row['genre']}</h1>
    <h3>  {$row['publisher']}</h1>
    <h3>  North America Sales: {$row['nasales']} million</h1>
    <h3> Europe Sales: {$row['eusales']} million</h1>
    <h3> Japan Sales: {$row['jpsales']} million </h1>
    <h3> Other Sales: {$row['other']} million</h1>
    <h3> Global Sales: {$row['global']} million</h1>
<a href='getgames.php'><button type='button' class='btn btn-primary'>Return</button></a> <a href='edit.php?rank={$row["rank"]}'><button type='button' class='btn btn-warning'>Edit</button></a> <a href='deleteprocess.php?rank={$row["rank"]}'><button type='button' class='btn btn-danger'>Delete</button></a>
          ";
        }
?>         
</div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 a"></div>
      </div>
    </div>





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