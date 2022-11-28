<?php
include "../includes/config.php";
$page_id = $_GET['page_id'];
$sql = "SELECT * FROM pages WHERE page_id = $page_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>