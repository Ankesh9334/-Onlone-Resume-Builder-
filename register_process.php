<?php
session_start();
include "db.php";


$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($conn, $query);

if($result) {

    $_SESSION['user'] = $email;

    // Redirect to index
    header("Location: index.php");
    exit;
} else {
    echo "Something went wrong!";
}
?>
