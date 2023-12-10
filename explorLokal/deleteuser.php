<?php
// Your database connection code here

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $userId = $_POST["user_id"];

    $deleteQuery = "DELETE FROM user WHERE id=$userId";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}
?>
