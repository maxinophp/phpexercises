<?php 
include 'header.php';
 ?>   
<h1>
<?php 
if (isset($_SESSION['Id'])) {
    echo "You are logged in as number: ". $_SESSION['Id'];
} else {
    echo "You are not logged in!";
}
?>
</body>
</html>