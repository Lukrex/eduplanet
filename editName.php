<?php

session_start();
include "db_conn.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = validate($_POST['username']);

$email = $_SESSION['email'];

$sql = "UPDATE users SET name='$name' WHERE email='$email'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['name'] = $name;
    header("Location: account.php?success=Your username has been updated");
    exit();
} else {
    header("Location: account.php?error=Unknown error occurred");
    exit();
}