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
    <ul>
        <form action="includes/login.inc.php" method="POST">
            User name:
            <input type="text" name="Uid" placeholder="Username">
            Password:
            <input type="Password" name="Pwd" placeholder="Password">
            <input type="Submit" name="button2" value="LOG IN">
        </form>
        <form action="includes/logout.inc.php">
            <input type="Submit" name="button" value="LOG OUT">
        </form>
    </ul>    
    </header>
    <h1>
    <?php 
    if (isset($_SESSION['Id'])) {
        echo "You are logged in as number: ". $_SESSION['Id'];
    } else {
        echo "You are not logged in!";
    }

     ?>
     </h1>
    <form action="includes/signup.php" method="POST"> 
        <table>
            <tr>   
                <td>Firstname:</td>
                <td><input type="text" name="Firstname" placeholder="Firstname"></td>
            </tr>    
            <tr>
                <td>Lastname:</td>
                <td><input type="text" name="Lastname" placeholder="lastname"></td>
            </tr>
            <tr>    
                <td>User name:</td>
                <td><input type="text" name="Uid" placeholder="Username"></td>
            </tr>
            <tr>    
                <td>Password:</td>
                <td><input type="Password" name="Pwd" placeholder="Password"></td>
            </tr>
            <tr>    
                <td>Password confirm:</td>
                <td><input type="Password" name="Pwd2" placeholder="Password"></td>
            </tr>
            <tr>            
                <td>Gender:</td> 
                <td><select name="Gender">
                <option selected disabled></option>
                <option>Male</option>
                <option>Female</option></select></td>
            </tr>   
            <tr>    
                <td>Date:</td>
                <td><input type="Date" name="datepicker"></td>
            </tr>    
            <tr>    
                <td>Short Biography:</td>
                <td><textarea type="text" name="textarea" placeholder="Short biography"></textarea></td>
            </tr>    
            <tr>   
                <td>Are you 18 years old?:</td> <td><input type="checkbox" name="checkbox"></td>
            </tr>    
            <tr>    
                <td><input type="Submit" name="button" value="SIGN UP"></td>
            </tr>
        </table>
    </form>
</body>
</html>