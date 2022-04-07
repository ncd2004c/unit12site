<html>
<head>
<?php

require("lib/phpfunctions.php");

session_start();
checkcredentials();
$product = 'Golfballs';
if (!isset($_SESSION['Golfballs']))
{
        $_SESSION['Golfballs']=0;
}

if (!isset($_POST['choice']))
{
        // we got here via a link
}
else if ($_POST['choice'] == 'Buy')
{
        $_SESSION['Golfballs'] += $_POST['Golfballs'];
}
else if ($_POST['choice'] == 'Add 10')
{
        $_SESSION['Golfballs'] += 10;
}
else if ($_POST['choice'] == 'Remove All')
{
        $_SESSION['Golfballs'] = 0;
}

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<form method='POST'>
<input type='number' name=Golfballs value='<?php echoPost("Golfballs");?> '>
<br>
<input type='submit' name='choice' value='Buy'>
<input type='submit' name='choice' value='Add 10'>
<input type='submit' name='choice' value='Remove All'>

</form>
Amount: <?php echoSession("Golfballs"); ?>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
