<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup/Signin</title>
    <link rel="stylesheet" type="text/css" href="Signupstyle.css">
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
		    <?php
		        if (isset($_SESSION['Id'])) {
                    echo    "<form action='includes/logout.inc.php'>
                                <button type='submit'>LOG OUT</button>
                            </form>";
                } else {
                    echo    "<form action='includes/login.inc.php' method='POST'> 
                            <input type='text' name='Uid' placeholder='Username'>
                            <input type='Password' name='Pwd' placeholder='Password'>
                            <button type='submit'>LOG IN</button>
                            </form>";
                }
			    
            ?>      
			<li><a href="signup.php">SIGNUP</a></li>
		</ul>
	</nav>
</header>
