<?php
 
$dataPoints = array( 
	array("y" => 82.74, "label" => "Wii Sports" ),
	array("y" => 40.24, "label" => "Super Mario Bros." ),
    array("y" => 35.82, "label" => "Mario Kart Wii" ),
    array("y" => 23.10, "label" => "Pokemon Gold/Pokemon Silver" ),
    array("y" => 21.82, "label" => "Kinect Adventures!" ),
    array("y" => 30.26, "label" => "Tetris" ),
    array("y" => 33.00, "label" => "Wii Sports Resort" ),
    array("y" => 31.37, "label" => "Pokemon Red/ Pokemmon Blue" ),
    array("y" => 16.38, "label" => "Grand Theft Auto V" ),
    array("y" => 18.14, "label" => "Super Mario Land" ),
    array("y" => 14.76, "label" => "Call of Duty: Modern Warfare 3" ),
    array("y" => 15.30, "label" => "Brain Age 2: More Training in Minutes a Day" ),
    array("y" => 16.15, "label" => "Grand Theft Auto: Vice City" ),
    array("y" => 12.27, "label" => "Animal Crossing: Wild World" ),
    array("y" => 13.04, "label" => "Super Smash Bros. Brawl" ),
    array("y" => 14.98, "label" => "Gran Turismo: A-Spec" )
);



 
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
    <title>Game Sales</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Global Sales"
	},
	axisY: {
		title: "Global Sales (millions)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## million",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}


</script>
<script defer src="scripts.js"></script>
</head>
<body>
<div class="navbar">
        <a href="home.html"> <img src="logo_transparent.png" class="logo"></a>
        <ul class="topbar">

            <li><a href="sales.html"><i class="fas fa-store"></i> Game Sales</a></li>
            <li><a href="#" onclick="signIn()"><i class="fas fa-edit"></i> Data Editor</a></li>
            <li><a href="message.html"><i class="fas fa-envelope"></i> Message Us</a></li>
            <li><a href="signin.html"><i class="fas fa-user"></i> Sign In</a></li>
        </ul>
    </div> 
    <div class="banner">
        <nav class="navbar navbar-expand-lg navbar-dark" >
            <a class="navbar-brand" href="#" style="color: #f1c40f;">Charts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item active nav-link" href="global.php">Global Sales<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="publisher.php">Publishers </a>
                <a class="nav-item nav-link" href="#">Regional Sales</a>
                <a class="nav-item nav-link" href="sales.html">Top 10 Table </a>
              </div>
            </div>
          </nav>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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

</body>
</html>               
