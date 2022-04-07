<html>
<head>
<?php

require("lib/phpfunctions.php");

session_start();
checkcredentials();
$product = 'baseballs';
if (!isset($_SESSION['baseballs']))
{
        $_SESSION['baseballs']=0;
}

if (!isset($_POST['choice']))
{
        // we got here via a link
}
else if ($_POST['choice'] == 'Buy')
{
        $_SESSION['baseballs'] += $_POST['baseballs'];
}
else if ($_POST['choice'] == 'Add 10')
{
        $_SESSION['baseballs'] += 10;
}
else if ($_POST['choice'] == 'Remove All')
{
        $_SESSION['baseballs'] = 0;
}

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<form method='POST'>
<input type='number' name=baseballs value='<?php echoPost("baseballs");?> '>
<br>
<input type='submit' name='choice' value='Buy'>
<input type='submit' name='choice' value='Add 10'>
<input type='submit' name='choice' value='Remove All'>

</form>
Amount: <?php echoSession("baseballs"); ?>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
