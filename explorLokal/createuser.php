<?php
// Your database connection code here

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security

    $insertQuery = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $insertQuery)) {
        echo "User created successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
