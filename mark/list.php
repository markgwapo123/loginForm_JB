<?php
include 'db_conn.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<h2>User List</h2>";
    echo "<table border='1'>";
    echo "<tr>
    <th>username</th>
    <th>email</th>
    <th>Action</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["username"]."</td>
        <td>".$row["email"]."</td>
        
        <td>
            <a href='view.php?id=".$row["id"]."'>View</a> |
            <a href='update.php?id=".$row["id"]."'>Update</a> |
            <a href='delete.php?id=".$row["id"]."'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
