<?php
    $passw = "BdPhKHkkl9Lx1LTW";
       
    $username = "cmcdowell29";
 
    $db = "cmcdowell29";
 
    $host = "cmcdowell29.lampt.eeecs.qub.ac.uk";
 
    $conn = new mysqli($host, $username, $passw, $db);
 
    if($conn->error){
        echo "not connected".$conn->error;
    }else{
        
    }
 
?>