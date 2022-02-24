<?php

if(!isset($_SESSION['adminlogin'])){

    header("Location: ../signin.html");
} else {
    unset($_SESSION['adminlogin']);
    header("Location: ../signin.html");
}

?>