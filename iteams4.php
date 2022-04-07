<html>
<head>
<?php

require("lib/phpfunctions.php");

session_start();
checkcredentials();
$product = 'bouncyballs';
if (!isset($_SESSION['bouncyballs']))
{
        $_SESSION['bouncyballs']=0;
}

if (!isset($_POST['choice']))
{
        // we got here via a link
}
else if ($_POST['choice'] == 'Buy')
{
        $_SESSION['bouncyballs'] += $_POST['bouncyballs'];
}
else if ($_POST['choice'] == 'Add 10')
{
        $_SESSION['bouncyballs'] += 10;
}
else if ($_POST['choice'] == 'Remove All')
{
        $_SESSION['bouncyballs'] = 0;
}

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<form method='POST'>
<input type='number' name=bouncyballs value='<?php echoPost("bouncyballs");?> '>
<br>
<input type='submit' name='choice' value='Buy'>
<input type='submit' name='choice' value='Add 10'>
<input type='submit' name='choice' value='Remove All'>

</form>
Amount: <?php echoSession("bouncyballs"); ?>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
