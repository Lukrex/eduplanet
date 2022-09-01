<?php
session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);
    
    if ($stmt = $conn->prepare("SELECT id, password FROM users WHERE name = ?")) {
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt = $conn->prepare("INSERT INTO users (email, password, name) VALUES (?, ?, ?)")) {
            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
            $stmt->bind_param("sss", $email, $hashedPass, $name);
            $stmt->execute();
            header("Location: login.php?success=Succesfully registered! Now login.");
            exit();
        } else {
            echo "Error Occured";
        }
        $stmt->close();
    }
} else {
    echo "Error Occured";
}
$conn->close();
?>