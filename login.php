<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css\login-style.css">
</head>
<body>
    <div class="logo">
        <img src="Assets\Project Logo-01.png" alt="">
    </div>
    <h1>Hello! Welcome back</h1>
    <div class="bg-photo">
        <img src="Assets\login-bg.jpg" alt="">
    </div>
    <div class="login">
    <label for="login-type"><h2>I'm a </h2></label>
        <select name="login_type" id="login-type" required>
            <option value="admin">Admin</option>
            <option value="doctor">Doctor</option>
            <option value="phm">PHM</option>
            <option value="mother">Mother</option>
        </select>
        <br>
        <form action="" class="login-form">
            <label for="login-username">Username</label>
            <input type="text"  id="login-username"   name="txtUsername" placeholder="Username">
            <label for="login-password">Password</label>
            <input type="text" id="login-password"  name="txtPassword" placeholder="Password">
            <a href="http://"><h3>Forgot Password?</h3></a>
            <input type="button" value="Back">
            <input type="submit"  value="Log In">
        </form>

    </div>
</body>
</html>