<?php
include "../includes/config.php";
$user_id = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>