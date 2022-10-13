<!-- connect to database -->

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "journalrecord";
$connection = mysqli_connect($host, $user, $pass) or die("Unable to connect to MySQL");

echo "Connected to MySQL<br>";

?>
