<?php
    $passw = "************";
       
    $username = "*********";
 
    $db = "**********";
 
    $host = "******************************";
 
    $conn = new mysqli($host, $username, $passw, $db);
 
    if($conn->error){
        echo "not connected".$conn->error;
    }else{
        
    }
 
?>