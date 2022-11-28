<meta http-equiv="refresh" content="0; URL=users.php"/>

<?php
include "../includes/connectdb.php";


$id = empty($_GET["user_id"]) ? null : $_GET["user_id"];

$sql = "DELETE FROM users WHERE user_id = :user_id";
$params = array(
    ":user_id" => $id
);
$sth = $db->prepare($sql);
$sth->execute($params);
?>


