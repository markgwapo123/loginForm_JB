
<?php
include 'db_conn.php';


if(isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo " deleted successfully";
    } else {
        echo "Error deleting row: " . $conn->error;
    }
} else {
    echo "ID parameter is missing. Please provide an ID.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="del.css"> 
    <title>Document</title>
</head>
<body>
<button><a href="welcome.php">Back</a></button>
</body>
</html>

