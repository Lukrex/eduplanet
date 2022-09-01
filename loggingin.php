<?php
//http://localhost/phpmyadmin/index.php?route=/table/structure&db=accounts_db&table=users
//http://localhost/phpstuff/login.php
//https://www.simplilearn.com/tutorials/php-tutorial/php-login-form#step_1_create_a_html_php_login_form
//https://www.youtube.com/watch?v=scd8YKiuS7I&ab_channel=Simplilearn
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
                header("Location: account.php");
                exit();
            } else {
                header("Location: login.php?error=Incorrect Email and Password");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect Email and Password");
            exit();
        }
    } else {
        header("Location: login.php?error=Incorrect Email and Password");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}