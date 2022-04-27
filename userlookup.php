<html>
<head>
<?php
session_start();
require("lib/phpfunctions.php");
checkcredentials();

$user = "ndecker5";
$conn = mysqli_connect("localhost",$user,$user,$user);

function echoTable($conn){
        $sql = "SELECT * FROM users;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                        echo"<table align='center'>";
                        echo "<tr>";
                        echo "<td>";
                        echo "id: ".$row['id']."<br>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>";
                        echo "Username: ".$row['username']."<br>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>";
                        echo "Encryted Password: ".$row['encrypted_password']."<br>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>";
                        echo "Email: ".$row['email']."<br>";
                        echo "</td>";
                        echo "</table>";
                }
        }
}
?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<?php echoTable($conn); ?>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
