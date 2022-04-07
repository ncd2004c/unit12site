<html>
<head>
<?php

require("lib/phpfunctions.php");

session_start();
checkcredentials();
session_destroy();
header("refresh:5;loginpage.php");
?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<b>Logout Page</b>
<h1>Goodbye</h1>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
