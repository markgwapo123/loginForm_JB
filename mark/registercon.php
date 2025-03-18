<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="registration.css">
   
</head>
<body>

 <div class="containe">
        <div class="login">
            <div class="infoo">
                <h3>Sign<span class="korol">Up</span></h3>
            </div>
        <form action="registercon.php" method="post">

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email"  required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password"required>

                <input type="submit" name="register" value="Sign Up">    
         
                <button> <a href="welcome.php">Back</a> </button>
        </form>
        </div>
      </div>

      <?php
        include 'db_conn.php';
        if (isset($_POST['register'])) {
            $username = $conn->real_escape_string($_POST['username']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            
            $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sss", $username, $email, $password);
            
            if ($stmt->execute()) {
                echo "Registration successful!";
                header('location: welcome.php');
            } else {
                echo "Registration failed!";
            }
            $stmt->close();
            $conn->close();
        }
        ?>
   </div>
</body>
</html>