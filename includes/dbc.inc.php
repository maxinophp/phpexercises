<?php 
    $conn = mysqli_connect("localhost", "root", "", "logintest");
    if (!$conn) {
 	die('Conection failed'. mysqli_connect_error());
    }
?>