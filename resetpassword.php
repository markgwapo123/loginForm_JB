<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="container">
        <div class="forgot-password-screen">
            <div class="info">
                <h3>Reset Password</h3>
            </div>
            <form method="post" action="forgotpassword.php">
                <label for="username">Username:</label>
                <input id="username" name="username" placeholder="Enter your username" required type="username">
                <label for="newpassword">New Password:</label>
                <input id="newpassword" name="newpassword" placeholder="Enter your new password" required type="password">
                <input name="reset-password" type="submit" value="Reset Password">

            </form>
            <button><a href="login.php">Back</a></button>
        </div>
    </div>
</body>
</html>