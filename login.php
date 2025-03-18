   <!DOCTYPE html> 
         <html> 
            <head> 
                <title>Register</title> 
                <link rel="stylesheet" type="text/css" href="login.css"> 
            </head> 
            <body> 
                <div class="container"> 
                    <div class="login-screen"> 
                        <div class="info"> <h3> User <span class="korol">Login</span></h3> </div> 
                        <form method="post" action="logincon.php"> <label for="username">Username:</label> 
                        <input id="username" name="username" placeholder = "Username" required="" type="text" /> 
                        
                        <label for="password">Password:</label> <input id="password" name="password" placeholder = "Password" required="" type="password" /> 
                        <a href="resetpassword.php">Forgot Password?</a>
                        <input name="login" type="submit" value="Login" /> 
                        
                       <p class="signup">
                       Don't have an account?
                       <a href="registercon.php">Sign Up?</a>
                        </p>
                        
                        </form> 
                    </div> 
                </div> 
        </body> 
        </html> 