<?php
$username = $_POST["username"];
$password = $_POST["password"];
$query = "SELECT username, password FROM users WHERE (username = '{$username}') AND (password = '{$password}')";


$user_input = $_GET['data'];
echo "You entered: " . $user_input;


$conn = mysql_connect("localhost", "user", "pass");
mysql_select_db("database", $conn);


?>
