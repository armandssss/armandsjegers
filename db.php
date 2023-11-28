<?php

$servername = "fdb34.awardspace.net";
$username = "3931244_acab";
$password = "armands123";
$db = "3931244_acab";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>