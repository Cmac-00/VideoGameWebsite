<?php

header('Content-Type: application/json');

include("conn.php");

if (isset($_GET['all'])) {

    $showall = "SELECT vgsales.Rank, vgsales.Name, vg_platform.PlatformName, vgsales.Year, vg_genre.GenreName, vgsales.Publisher, vgsales.North_America_Sales, vgsales.Europe_Sales, vgsales.Japan_Sales, vgsales.Other_Sales, vgsales.Global_Sales 
    FROM vgsales 
    INNER JOIN vg_platform 
    ON vg_platform.ID = vgsales.Platform 
    INNER JOIN vg_genre ON vg_genre.ID = vgsales.Genre ORDER BY Rank ASC";

    $result = $conn->query($showall);

    if(!$result){
        echo $conn->error;
    } else {
        $dataset = array();
    }
    
    
    while ($row = $result->fetch_assoc()) {
        $line = [
        'rank'=>$row['Rank'],
        'name'=>$row['Name'],
        'platform'=>$row['PlatformName'],
        'year'=>$row['Year'],
        'genre'=>$row['GenreName'],
        'publisher'=>$row['Publisher'],
        'nasales'=>$row['North_America_Sales'],
        'eusales'=>$row['Europe_Sales'],
        'jpsales'=>$row['Japan_Sales'],
        'other'=>$row['Other_Sales'],
        'global'=>$row['Global_Sales']
        ];

        
        array_push($dataset, $line);
    }

     echo json_encode($dataset);
}

if (isset($_GET['name'])) {

    $gamename = $_GET['name'];

    $checkapi = "SELECT vgsales.Rank, vgsales.Name, vg_platform.PlatformName, vgsales.Year, vg_genre.GenreName, vgsales.Publisher, vgsales.North_America_Sales, vgsales.Europe_Sales, vgsales.Japan_Sales, vgsales.Other_Sales, vgsales.Global_Sales 
    FROM vgsales 
    INNER JOIN vg_platform 
    ON vg_platform.ID = vgsales.Platform 
    INNER JOIN vg_genre ON vg_genre.ID = vgsales.Genre WHERE Name LIKE '$gamename%'";

    $result = $conn->query($checkapi);

    if(!$result) {
        $conn->error;
    } else {

    $dataset = array();
}

while ($row = $result->fetch_assoc()) {
    $line = [
    'rank'=>$row['Rank'],
    'name'=>$row['Name'],
    'platform'=>$row['PlatformName'],
    'year'=>$row['Year'],
    'genre'=>$row['GenreName'],
    'publisher'=>$row['Publisher'],
    'nasales'=>$row['North_America_Sales'],
    'eusales'=>$row['Europe_Sales'],
    'jpsales'=>$row['Japan_Sales'],
    'other'=>$row['Other_Sales'],
    'global'=>$row['Global_Sales']
    ];

    
    array_push($dataset, $line);

} 

echo json_encode($dataset);

}

if (isset($_GET['rank'])) {

    $ranking = $_GET['rank'];

    $checkapi = "SELECT vgsales.Rank, vgsales.Name, vg_platform.PlatformName, vgsales.Year, vg_genre.GenreName, vgsales.Publisher, vgsales.North_America_Sales, vgsales.Europe_Sales, vgsales.Japan_Sales, vgsales.Other_Sales, vgsales.Global_Sales 
    FROM vgsales 
    INNER JOIN vg_platform 
    ON vg_platform.ID = vgsales.Platform 
    INNER JOIN vg_genre ON vg_genre.ID = vgsales.Genre 
    WHERE Rank = $ranking";

    $result = $conn->query($checkapi);

    if(!$result) {
        $conn->error;
    } else {

    $dataset = array();
}

while ($row = $result->fetch_assoc()) {
    $line = [
    'rank'=>$row['Rank'],
    'name'=>$row['Name'],
    'platform'=>$row['PlatformName'],
    'year'=>$row['Year'],
    'genre'=>$row['GenreName'],
    'publisher'=>$row['Publisher'],
    'nasales'=>$row['North_America_Sales'],
    'eusales'=>$row['Europe_Sales'],
    'jpsales'=>$row['Japan_Sales'],
    'other'=>$row['Other_Sales'],
    'global'=>$row['Global_Sales']
    ];

    
    array_push($dataset, $line);

} 

echo json_encode($dataset);

}

if (isset($_GET['year'])) {

    $year = $_GET['year'];

    $checkapi = "SELECT vgsales.Rank, vgsales.Name, vg_platform.PlatformName, vgsales.Year, vg_genre.GenreName, vgsales.Publisher, vgsales.North_America_Sales, vgsales.Europe_Sales, vgsales.Japan_Sales, vgsales.Other_Sales, vgsales.Global_Sales 
    FROM vgsales 
    INNER JOIN vg_platform 
    ON vg_platform.ID = vgsales.Platform 
    INNER JOIN vg_genre ON vg_genre.ID = vgsales.Genre 
    WHERE Year = $year";

    $result = $conn->query($checkapi);

    if(!$result) {
        $conn->error;
    } else {

    $dataset = array();
}

while ($row = $result->fetch_assoc()) {
    $line = [
    'rank'=>$row['Rank'],
    'name'=>$row['Name'],
    'platform'=>$row['PlatformName'],
    'year'=>$row['Year'],
    'genre'=>$row['GenreName'],
    'publisher'=>$row['Publisher'],
    'nasales'=>$row['North_America_Sales'],
    'eusales'=>$row['Europe_Sales'],
    'jpsales'=>$row['Japan_Sales'],
    'other'=>$row['Other_Sales'],
    'global'=>$row['Global_Sales']
    ];

    
    array_push($dataset, $line);

} 

echo json_encode($dataset);

}

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $rank = $_POST['rank'];
    $name = $_POST['name'];
    $platform = $_POST['platform'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $publisher = $_POST['publisher'];
    $nasales = $_POST['nasales'];
    $jpsales = $_POST['jpsales'];
    $other = $_POST['other'];
    $global = $_POST['global'];


    
    $update = "UPDATE vgsales 
SET Name = '$name', Platform = '$platform', Year = '$year', Genre = '$genre', Publisher = '$publisher', North_America_Sales = '$nasales', Europe_Sales = '$eusales', Japan_Sales = '$jpsales', Other_Sales = '$other', Global_Sales = '$global' 
WHERE Rank = '$rank'";
}



?>