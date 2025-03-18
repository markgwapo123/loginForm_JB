<?php
include 'db_conn.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
           
            session_start();
            $_SESSION['username'] = $row['username'];
    
            header('location: welcome.php');
        } else {
            echo "Invalid password";
            
            
        }
    } else {
      
        echo "User not registered!";
        echo"<br>";
        echo "Click here to register!";
        include 'res.html';

        
        
    }
}

$conn->close();
?>
