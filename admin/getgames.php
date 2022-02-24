<?php 

$endpoint = "http://cmcdowell29.lampt.eeecs.qub.ac.uk/videogamesales/api.php?name=sonic";

$result = file_get_contents($endpoint);

$data = json_decode($result, true);

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="message.css">

  <title>Select Games</title>

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

    <div class="table-responsive">
            <table class="table table-hover table-striped" style="background: transparent;">
                <thead class="head" style="background: whitesmoke;">
                    <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Name</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Year </th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody style="color: white;">
                  <?php

                    foreach($data as $row){

                      echo "<tr>
                      <td>{$row['rank']}</td>
                      <td>{$row['name']}</td>
                      <td>{$row['platform']}</td>
                      <td>{$row['year']}</td>
                     <td><a href='selectedgame.php?rank={$row["rank"]}' class='button'>Sales</a></td>
  
                  </tr>";
                    }

                    

                  ?>

                </tbody>
            </table>
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

