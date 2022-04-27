<html>
<head>
<?php
require('lib/phpfunctions.php');
$user = 'ndecker5';
$conn = mysqli_connect("localhost",$user,$user,$user);


if(isset($_POST['option']))
{
        $option=$_POST['option'];
        if ($option == 'Submit')
        {
                $username=$_POST['155username'];
                $password=$_POST['155password'];
                $passwordconfirm=$_POST['155passwordconfirm'];
                if(empty($username))
                {
                        echo("Username Requried");
                }
                else if (empty($password))
                {
                        echo("Password Requried");
                }
                else if ($password != $passwordconfirm)
                {
                        echo("Passwords Don't Match");
                }
                else
                {
                        $stmt = $conn->prepare("INSERT INTO users (username, encrypted_password, email) VALUES(?,?,?)");
                        $stmt->bind_param("sss", $username, $encrypted_password, $email);
                        $username = $_POST['155username'];
                        $encrypted_password = password_hash($password,PASSWORD_DEFAULT);
                        $email = $_POST['email'];
                        $stmt->execute();
                        header("Location: loginpage.php");
                }
        }
        else if ($option == 'Cancel')
        {
                header("Location: loginpage.php");
        }
}

?>
</head>

<body>
<?php readfile("lib/header.html"); ?>
<form method='POST'>
<table>
<tr>
<td>
Username:
</td>
<td>
<input type='text' name='155username' value='<?php echoPost("155username"); ?>'>
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type='password' name='155password' value='<?php echoPost("155password"); ?>'>
</td>
</tr>
<tr>
<td>
Password Confrim:
</td>
<td>
<input type='password' name='155passwordconfirm' value='<?php echoPost("155passwordconfrim"); ?>'>
</td>
</tr>
<tr>
<td>
E-mail:
</td>
<td>
<input type='text' name='email' value='<?php echoPost("email"); ?>'>
</td>
</tr>
<tr>
<td>
<input type='submit' name='option' value='Submit'>
</td>
<td>
<input type='submit' name='option' value='Cancel'>
</td>
</tr>
</table>
</form>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
