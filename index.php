<?php
$conn = mysqli_connect("localhost", "root", "password", "mydb");
$id = $_GET['id']; // ❌ BAD: direct user input in SQL
$query = "SELECT * FROM users WHERE id = $id"; 
$result = mysqli_query($conn, $query);

$db_host = "localhost"; 
$db_user = "root";
$db_pass = "12345";
$db_name = "mydb";
$conn2 = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$page = $_GET['page'];
include($page . ".php");

$content = @file_get_contents("data.txt");

echo "Welcome, " . $_GET['name'];

?>
