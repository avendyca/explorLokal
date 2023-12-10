<?php
// Your database connection code here

$result = mysqli_query($conn, "SELECT * FROM user");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display user data
        echo "Username: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        // Add more fields as needed
        echo "------------------------<br>";
    }
} else {
    echo "No users found.";
}
?>
