<!DOCTYPE html>
<html>
<head>
    <title>Sign-up Page</title>
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
        <form action="php/signup.php" method="post" class="signupform">
            <input type="text" placeholder="Username" name="uname">
            <input type="password" placeholder="Password" name="pword">
            <input type="text" placeholder="Firstname" name="fname">
            <input type="text" placeholder="Lastname" name="lname">
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="Company name" name="company">
            <input type="text" placeholder="Role" name="role">
            <input type="date" placeholder="Date" name="DOB">
            <button type="submit" name="submit"id="loginButton">Sign-up</button>
        </form>
        <form action="login.php">
            <input type="submit" class="backtologin" value="Already Have an Account? Sign In!"/>
        </form>
        </div>
        <div class="image-section">
            <img src="Images/sidelogo.png">
        </div>
    </div>
</body>
</html>
