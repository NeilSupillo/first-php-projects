<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    try {
        //code...
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    //echo "line 41";
    header("Location: ../index.php");
    die();
}
