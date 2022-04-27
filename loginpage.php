<html>
<head>
<?php
session_start();
require('lib/phpfunctions.php');

function checkLogin($user, $pass)
{
        if($user == 'username' && $pass == 'password')
                return True;
        else
                return False;
}

$user = 'ndecker5';
$conn = mysqli_connect("localhost",$user,$user,$user);

$message='';
if (isset($_POST['choice'])) // Have we been here before?
{
        $row = lookupUsername($conn,$_POST['155username']);
        if ($row != 0 && password_verify($_POST['155password'], $row['encrypted_password']))
        {

                $message = 'testing';
                header('Location: welcome.php');
                $_SESSION['username'] = $_POST['155username'];
        }
        else
        {
                $message = 'Invalid Username or Password';
        }
}
else
{

}
?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<form method='POST'>
User <input type='text' name='155username' value='<?php echoPost("155username"); ?>'><br>
Password <input type='password' name='155password' value='<?php echoPost("155password"); ?>'><br>
<input type='submit' name='choice' value='Log In'>
</form>
<h2><?php echo $message;?></h2>
<b>Username:username</b>   <b>Password:password</b>
<br>
<a href="http://www.csit.parkland.edu/~ndecker5/CSC_155/unit24/newaccount.php">Make New Account</a>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
