<?php
session_start();
include 'dbc.inc.php';
$first=$_POST['Firstname'];
$last=$_POST['Lastname'];
$Uid=$_POST['Uid'];
$Pwd=$_POST['Pwd'];
$Pwd2=$_POST['Pwd2'];
$gender=$_POST['Gender'];
$Udate=$_POST['datepicker'];
$bio=$_POST['textarea'];
$checkbox=$_POST['checkbox'];
if ( $_SERVER ['REQUEST_METHOD'] == 'POST')    {
    if (!empty($first) && !empty($last) && 
       !empty($Uid) && !empty($Pwd) && ($Pwd == $Pwd2) 
       && isset($gender) && !empty($Udate) && 
       !empty($bio) && isset($checkbox)) {
       	$sql = "INSERT INTO users (first, last, Uid, Pwd, gender, Udate, bio, checkbox) 
        VALUES ('$first', '$last', '$Uid', '$Pwd', '$gender', '$Udate', '$bio', '$checkbox')";
        $result = $conn->query($sql);
     	header("Location: ../index.php");
      } else {
      	header("Location: ../signup.php?error=empty");
      }
} 
    
?>