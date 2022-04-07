<html>
<head>
<?php

require("lib/phpfunctions.php");

session_start();
checkcredentials();

if (!isset($_POST['choice']))
{
        // nothing to do
}
else if ($_POST['choice'] == 'Make Purchase')
{
        echo 'Your card has been billed!';
        $_SESSION['Golfballs'] = 0;
        $_SESSION['baseballs'] = 0;
        $_SESSION['tennisballs'] = 0;
        $_SESSION['bouncyballs'] = 0;
}
else if ($_POST['choice'] == 'Remove Purchase')
{
        $_SESSION['Golfballs'] = 0;
        $_SESSION['baseballs'] = 0;
        $_SESSION['tennisballs'] = 0;
        $_SESSION['bouncyballs'] = 0;
}
?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
Iteams:
<br>
Golf balls: <?php echoSession("Golfballs") ?> <br>
<br>
Baseballs: <?php echoSession("baseballs") ?> <br>
<br>
Tennis balls: <?php echoSession("tennisballs") ?> <br>
<br>
Bouncy balls: <?php echoSession("bouncyballs") ?> <br>
<br>
<form method='POST'>
<input type='submit' name='choice' value='Make Purchase'>
<input type='submit' name='choice' value='Remove Purchase'>
</form>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
