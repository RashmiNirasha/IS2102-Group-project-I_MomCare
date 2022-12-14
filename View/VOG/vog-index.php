<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing_Git</title>
    <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
    <style><?php include '../../Assets/css/vog-style.css' ?></style>
</head>
<body>
    <nav class="topnav"> <!-- top navigation bar -- start -->
        <img class="logo-MomCare" src="../../Assets/Images/images-vog/Project Logo - landscape-01 1 (1).png" alt="logo-MomCare">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
        <img class="profile_pic" src="../../Assets/Images/images-vog/doctor.png" alt="profile_pic">
    </nav> <!-- top navigation bar -- end -->
        <div class="main">
        <div class="left"></div>
        <div class="right">
            <div class="login-container">
                <div class="div-logo">
                    <img src="../../Assets/images/images-vog/Project Logo - landscape-01 2.png" alt="login-logo">
                </div>
                <div class="div-form">
                    <form method="post" class="login-form" action="vog-loginModel.php">
                        <?php if(isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p> 
                        <?php } ?>
                        <fieldset>
                            <legend>&nbsp;Email:&nbsp;</legend>
                            <input type="email" name="username" id="username" placeholder="Enter your user name">
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>&nbsp;Password:&nbsp;</legend>
                            <input type="password" name="password" id="password" placeholder="Enter your password">
                        </fieldset>
                        <div class="end">
                            <div class="forgot-psw">
                                <a href="">Forgot password?</a>
                            </div>
                            <div class="sign-in-btn">
                                <button class="submit-btn" type="submit">Sign in</button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>