<?php

$endpoint ="http://cmcdowell29.lampt.eeecs.qub.ac.uk/videogamesales/api.php?name=sonic";

$result = file_get_contents($endpoint);

$data = json_decode($result, true);

print_r($data);

?>
if (isset($_GET['rank'])) {

$gamerank = $_GET['rank'];
$endpoint = "http://cmcdowell29.lampt.eeecs.qub.ac.uk/videogamesales/api.php?rank={$gamerank}";
$result = file_get_contents($endpoint);

$data = json_decode($result, true);
}




$rank = $_POST['rank'];
$name =  mysqli_real_escape_string($conn, $_POST['editname']);
$platform = mysqli_real_escape_string($conn, $_POST['editplatform']);
$year = $_POST['edityear'];
$genre = mysqli_real_escape_string($conn, $_POST['editgenre']);
$publisher = mysqli_real_escape_string($conn, $_POST['editpublisher']);
$nasales = $_POST['editnasales'];
$eusales = $_POST['editeusales'];
$jpsales = $_POST['editjpsales'];
$other = $_POST['editother'];
$global = $_POST['editglobal'];

$endpoint = "http://cmcdowell29.lampt.eeecs.qub.ac.uk/videogamesales/api.php";

$postededit = http_build_query(
        array('editname'=>$name, 'rank'=>$rank, 'editplatform'=>$platform, 'edityear'=>$year,
                'editgenre'=>$genre, 'editpublisher'=>$publisher, 'editnasales'=>$nasales,
                    'editeusales'=>$eusales, 'editjpsales'=>$jpsales, 'editother'=>$other,
                    'editglobal'=>$global)
);

$opts = array(
    'http'=>array(
        'method'=>'POST',
        'header' =>'Content-Type: application/x-www-form-urlencoded',
        'content'=> $postededit
    )

);

$context = stream_context_create($opts);

$result = file_get_contents($endpoint, false, $context);

echo $result;



