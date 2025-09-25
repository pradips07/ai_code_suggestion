<?php
$conn = mysql_connect("localhost", "root", ""); // deprecated mysql_* function
$result = mysql_query("SELECT * FROM users WHERE username = '" . $_GET['user'] . "'"); // vulnerable to SQL injection
?>
