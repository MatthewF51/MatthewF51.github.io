<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="CSS/login-style.css">
    <script src="Scripts/login-scripts.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="login-section">
		<div class="logo">
			<img src="Images/ChronoConnect Black.png" alt="Logo" style="height: 60px;">
			<h1>ChronoConnect</h1>
		</div>
        <form action="php/login.php" method="post" class="loginform">
            <h2> Welcome Back! </h2>
            <input type="text" placeholder="Username" name="uname">
            <input type="password" placeholder="Password" name="pword">
            <button type="submit" name='submit' id="loginButton">Login</button>
        </form>
        <form action="signup.php">
            <input type="submit" class="signupbtn" value="Dont Have an Account? Sign up!"/>
        </form>
        </div>
        <div class="image-section">
            <img src="Images/sidelogo.png">
        </div>
    </div>
</body>
</html>
