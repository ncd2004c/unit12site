<html>
<head>
<?php

require("lib/phpfunctions.php");

session_start();
checkcredentials();
$product = 'tennisballs';
if (!isset($_SESSION['tennisballs']))
{
        $_SESSION['tennisballs']=0;
}

if (!isset($_POST['choice']))
{
        // we got here via a link
}
else if ($_POST['choice'] == 'Buy')
{
        $_SESSION['tennisballs'] += $_POST['tennisballs'];
}
else if ($_POST['choice'] == 'Add 10')
{
        $_SESSION['tennisballs'] += 10;
}
else if ($_POST['choice'] == 'Remove All')
{
        $_SESSION['tennisballs'] = 0;
}

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<form method='POST'>
<input type='number' name=tennisballs value='<?php echoPost("tennisballs");?> '>
<br>
<input type='submit' name='choice' value='Buy'>
<input type='submit' name='choice' value='Add 10'>
<input type='submit' name='choice' value='Remove All'>

</form>
Amount: <?php echoSession("tennisballs"); ?>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
