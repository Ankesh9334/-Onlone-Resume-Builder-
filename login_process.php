<?php
session_start();
include "db.php";

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check user
$query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    if(password_verify($password, $user['password'])) {
        // Login success
        $_SESSION['user'] = $user['email'];
        $_SESSION['user_name'] = $user['name'];

        header("Location: index.php");
        exit;
    } else {
        echo "Wrong password!";
    }
} else {
    echo "Email not found!";
}
?>
