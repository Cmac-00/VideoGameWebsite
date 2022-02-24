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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="message.css">

  <title>Edit Game</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<div class="banner">
    <div class="navbar">
      <a href="home.html"> <img src="logo_transparent.png" class="logo"></a>
      <ul class="topbar">

        <li><a href="sales.html"><i class="fas fa-store"></i> Game Sales</a></li>
        <li><a href="index.php"><i class="fas fa-edit"></i> Data Editor</a></li>
        <li><a href="message.html"><i class="fas fa-envelope"></i> Message Us</a></li>
        <li><a href="signout.php"><i class="fas fa-sign-out-alt"></i> </a></li>
      </ul>
    </div>


    <h1 style="color: white;">Edit Game</h1>

   <?php

foreach ($data as $row) {

   $rankid = openssl_encrypt($row['rank'], "AES-128-ECB", "rankid");

    echo "<form method='POST' action='processedit.php'>
    <div class='forms'>
      <div class='field'>
        <label class='label'>Name</label>
        <div class='control'>
          <input value='{$row["name"]}' type='text'  name='editname'>
          <input value='{$row["rank"]}' type='hidden'  name='rank'>
        </div>



        <div class='forms'>
      <div class='field'>
        <label class='label'>Year</label>
        <div class='control'>
          <input value='{$row["year"]}' type='number'  name='edityear'>
        </div>

        

        <div class='forms'>
      <div class='field'>
        <label class='label'>Publisher</label>
        <div class='control'>
          <input value='{$row["publisher"]}' type='text'  name='editpublisher'>
        </div>


        <button type='submit' class='btn btn-warning'>Submit</button><a href='selectedgame.php?rank={$row["rank"]}'><button type='button' class='btn btn-primary'>Back</button></a> 

      </div>
      </form>";
}


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
    
