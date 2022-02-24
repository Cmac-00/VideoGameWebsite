<?php

include("conn.php");

$gamerank = $_GET['rank'];

$delete = "DELETE FROM vgsales WHERE Rank='{$gamerank}'";

echo $delete;

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

  <title>Process Delete</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-color: #34495e;">
<div>
<h1 style="color: #f1c40f;">Game Deleted</h1>

<?php
$res = $conn->query($delete);

if(!$res){
    echo $conn->error;
}


?>
<a href='getgames.php'><button type='button' class='btn btn-primary'>Return</button></a> 

</div>

</body>
</html>
