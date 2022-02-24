<?php

include("conn.php");


$file = "vgsales.csv";

if (file_exists($file)) {

  $filepath = fopen($file, "r");
  $column = array();
  while (($line = fgetcsv($filepath)) !== FALSE) {



    $column['name'] = mysqli_real_escape_string($conn, $line[1]);
    




    $insert = "INSERT INTO vgsales (Name, Platform, Year, Genre, Publisher, North_America_Sales, Europe_Sales, Japan_Sales, Other_Sales, Global_Sales)
        
            VALUES (
                  '". $column['name'] ."',
                  '{$line[2]}',
                  {$line[3]},
                 '{$line[4]}',
                 '{$line[5]}',
                  {$line[6]},
                   {$line[7]},
                    {$line[8]},
                     {$line[9]},
                      {$line[10]})";



    $result = $conn->query($insert);

    if (!$result) {
      echo $conn->error;
    }
  }
}
