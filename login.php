<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <div class="side_pic">
        <img src="Assets\jonathan-borba--W1-1nSZJw8-unsplash.jpg" alt="picture">
    </div>
    <div class="logo">
        <img src="Assets\Project Logo-01.png" alt="">
    </div>
    <h1 class="topic">Hello! Welcome back</h1>
    <div class="bg-photo">
        <img src="Assets\login-bg.jpg" alt="">
    </div>
    <div class="vl_1"></div>
    <div class="login">
    </div>
    <div class="login-form">
        <form  action="" class="login-form">
            <table class="login_details">
                <tr>
                    <td><label for="login-type">I'm&nbsp;a</label></td>
                    <td colspan="2">
                        <select name="login_type" id="login-type" required>
                            <option value="admin">Admin</option>
                            <option value="doctor">Doctor</option>
                            <option value="phm">PHM</option>
                            <option value="mother">Mother</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td id="txt"><label for="login-username">Username</label></td>
                    <td><input type="text"  id="login-username"   name="txtUsername" placeholder="Username"></td>
                </tr>
                <tr>
                    <td id="txt"><label for="login-password">Password</label></td>
                    <td><input type="text" id="login-password"  name="txtPassword" placeholder="Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="f_psw"><a href="http://">Forgot Password?</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" value="Back">
                        <input type="submit"  value="Log In"></td>
                </tr>
            </table>    
        </form>

    </div>
</body>
</html