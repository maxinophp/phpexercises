<?php
session_start();
include 'dbc.inc.php';
$Uid=$_POST['Uid'];
$Pwd=$_POST['Pwd'];
$sql = "SELECT * FROM users WHERE Uid='$Uid' AND Pwd='$Pwd'";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
	header("location:../index.php?error=false-password-or-username");
} else {
	$_SESSION['Id'] = $row['Id'];
	header("location:../index.php");
}
//header("location:../index.php");
?>
