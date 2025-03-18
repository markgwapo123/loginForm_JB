<?php
include 'db_conn.php';

if (isset($_POST['reset-password'])) {
    $username = $_POST['username'];
    $newpassword = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password = '$newpassword' WHERE username = '$username'";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="login.php">
Click here</a> to Login.</p></div><br />';
    } else {
        echo "Error updating password: " . $conn->error;
    }
}

$conn->close();
?>