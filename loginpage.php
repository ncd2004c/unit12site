<html>
<head>
<?php

require('lib/phpfunctions.php');

function checkLogin($user, $pass)
{
        if($user == 'username' && $pass == 'password')
                return True;
        else
                return False;
}

session_start();

$message='';
if (isset($_POST['choice'])) // Have we been here before?
{
        if ( checkLogin($_POST['155username'], $_POST['155password']) )
        {
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
Password <input type='password' name='155password' value='<?php echoPost("155username"); ?>'><br>
<input type='submit' name='choice' value='Log In'>
</form>
<h2><?php echo $message;?></h2>
<b>Username:username</b>   <b>Password:password</b>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
