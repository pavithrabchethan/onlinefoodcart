<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "food_ordering";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed.");
}

$conn->set_charset("utf8mb4");

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
?>