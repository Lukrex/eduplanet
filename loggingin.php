<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE email='$email'";
    
    $result = mysqli_query($conn, $sql);
    
    //if email and password match with the database, login
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['email'] === $email) {
            if (password_verify($pass, $row['password'])) {
                echo "Logged In!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: dashboard.php");
                exit();
            } else {
                header("Location: login.php?error=Incorrect Email or Password");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect Email or Password");
            exit();
        }
    } else {
        header("Location: login.php?error=Incorrect Email or Password");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}