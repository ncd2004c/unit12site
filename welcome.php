<html>
<head>
<?php
session_start();
require("lib/phpfunctions.php");
checkcredentials();
?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<b>Welcome Page</b>
<br>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
