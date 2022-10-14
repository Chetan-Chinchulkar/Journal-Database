<!-- connect to database -->

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "journalrecord";
$connection = mysqli_connect($host, $user, $pass, $db);

echo "Connected to MySQL<br>";

?>
