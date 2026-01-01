<?php
session_start();

$host = "127.0.0.1";
$user = "root";
$pass = "root";
$db   = "quick_kart";

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) die("DB Error");

$conn->query("CREATE DATABASE IF NOT EXISTS $db");
$conn->select_db($db);

date_default_timezone_set("Asia/Kolkata");
?>