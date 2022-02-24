<?php
session_start();
include("conn.php");

$rank = $_POST['rank'];
$name =  mysqli_real_escape_string($conn, $_POST['editname']);
$year = $_POST['edityear'];
$publisher = mysqli_real_escape_string($conn, $_POST['editpublisher']);


$update = "UPDATE vgsales 
SET Name = '$name',  Year = '$year',  Publisher = '$publisher' 
WHERE Rank = '$rank'";

echo $update;




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

  <title>Process Edit</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-color: #34495e;">
<div>
<h1 style="color: #f1c40f;">Game Edited</h1>

<?php
$res = $conn->query($update);

if(!$res){
    echo $conn->error;
}

echo "<h3 style='color: #f1c40f;'>Successful Game Edit.</h3> <h3 style='color: #f1c40f;'> Go to see the <a href='selectedgame.php?rank=$rank'>edit</a></h3>"
?>

</div>

</body>
</html>
