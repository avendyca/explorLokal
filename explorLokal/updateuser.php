<?php
// Your database connection code here

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $userId = $_POST["user_id"];
    $newUsername = $_POST["new_username"];
    $newEmail = $_POST["new_email"];

    $updateQuery = "UPDATE user SET username='$newUsername', email='$newEmail' WHERE id=$userId";

    if (mysqli_query($conn, $updateQuery)) {
        echo "User updated successfully!";
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
?>
