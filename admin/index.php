<?php
session_start();


if(!isset($_SESSION['adminlogin'])){

    header("Location: ../signin.html");
} 
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameNetwork</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0ef36cb894.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>

<body>


    <div class="banner" style="width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(8, 67, 145, 0.76), rgba(206, 68, 172, 0.75)), url(indeximage.jpg);
    background-position: center;
    background-size: cover;">
       
        <div class="navbar">
           <a href="../home.html"> <img src="logo_transparent.png" class="logo"></a>
            <ul class="menu">
                
                <li><a href="../sales.html"><i class="fas fa-store"></i> Game Sales</a></li>
                <li><a href="index.php"><i class="fas fa-edit"></i> Data Editor</a></li>
                <li><a href="../message.html"><i class="fas fa-envelope"></i> Message Us</a></li>
                <li><a href="signout.php"><i class="fas fa-sign-out-alt"></i>Sign Out</a></li>
            </ul>
        </div>

        <?php

            $user = $_SESSION['adminlogin'] ;

        echo "<h3 style='color: white;'>Logged in as $user</h3>";



        ?>

        <div class="writing">
            <h1>Data Editor</h1>
            <p>Insert a new game into the database using the 
                insert button or select a video game for more 
                editing options.
            </p>
            <div>
                <a href="insertform.html">
                    <button type="button"><span></span>INSERT GAME</button>
                </a>

                <a href="getgames.php">
                    <button type="button"><span></span>SELECT GAMES</button>
                </a>
                

            </div>
        </div>
        

    </div>
    <footer class="footer">
        <div class="inner_footer">
            <div class="logo_container">
                <img src="logo_transparent.png" >
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
                icon: "warning" ,
                button: false,
            });
        }
</script>


</body>

</html>