<?php
/* Maak de connection string voor MySQL */
$host = 'localhost';
$dbname = 'velisoft-plk_ferdi';
$username = 'velis_ferdi';
$password = 'Ab7wj29';

/* Maak de database connectie */
$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();
?>