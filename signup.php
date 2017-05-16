<?php 
include 'header.php';
?>
<h1>
<?php 
if (isset($_SESSION['Id'])) {
    echo "You are already registered";
} else {
    echo "You are not logged in!";
}
?>
</h1>
<?php 
    if (isset($_SESSION['Id'])) {
        echo "<h1> as number: ". $_SESSION['Id'];
    } else {
        echo "<form action='includes/signup.inc.php' method='POST'> 
                <table>
                    <tr>   
                        <td><input type='text' name='Firstname' placeholder='Firstname'></td>
                    </tr>    
                    <tr>
                        <td><input type='text' name='Lastname' placeholder='lastname'></td>
                    </tr>
                    <tr>    
                        <td><input type='text' name='Uid' placeholder='Username'></td>
                    </tr>
                    <tr>    
                        <td><input type='Password' name='Pwd' placeholder='Password'></td>
                    </tr>
                    <tr>    
                        <td><input type='Password' name='Pwd2' placeholder='Password confirm'></td>
                    </tr>
                    <tr>            
                        <td><select name='Gender'>
                        <option selected disabled></option>
                        <option>Male</option>
                        <option>Female</option></select></td>
                    </tr>   
                    <tr>    
                        <td><input type='Date' name='datepicker'></td>
                    </tr>    
                    <tr>    
                        <td><textarea type='text' name='textarea' placeholder='Short biography'></textarea></td>
                    </tr>    
                    <tr>   
                        <td><h3>Are you 18 years old?:</h3></td> <td><input type='checkbox' name='checkbox'></td>
                    </tr>    
                    <tr>    
                        <td><button type='submit'>SIGN UP</button></td>
                    </tr>
                </table>
            </form>";
    }

?>
     
    