<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>
<body>
<?php
include 'db_conn.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
  
    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";
      if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>User Details</h2>";
        echo "<table border='1'>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>Username: " . $row["username"] . "</td>";
            echo "<td>Email: " . $row["email"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    
                echo "<h2>Update User Details</h2>";
                echo "<form method='post'>";
                echo "Username: <input type='text' name='username'><br><br>";
                echo "Email: <input type='text' name='email'><br><br>";
                echo "<input type='submit' name='submit' value='Update'>";
                echo "</form>";
    } else {
        echo "User not found";
    }
} else {
    echo "Invalid request";
}
$conn->close();
?>
<br>
<button><a href="welcome.php">Back</a></button>
</body>
</html>
