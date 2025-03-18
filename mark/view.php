<?php
include 'db_conn.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
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
    } else {
        echo "User not found";
    }
} else {
    echo "Invalid request";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="view.css">
    <title>Document</title>
</head>
<body>
    <br>
<button><a href="welcome.php">Back</a></button>
</body>
</html>



