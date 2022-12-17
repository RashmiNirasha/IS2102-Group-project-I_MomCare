<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="..\..\Assets\css\login.css"/>
</head>
<body>
    <div class="container">
            <div class="header"><img src="..\..\Assets\Images\images-Sachini\logo.png"><p><a href="..\..\View\Admin\login.php">Already have an account? <button>Log in</button></a></p></div>
            <div class="content">
            <div class="msg">
                        <?php 
                            if (isset($_GET['error']) && $_GET['error']=='confirmPasswordError'){
                                echo "<p class='imp-message'>Confirmation Password should be same as the Password.</p>";
                            }elseif (isset($_GET['error']) && $_GET['error']=='emptyFields'){
                                echo "<p class='imp-message'>All the fields are required.</p>";
                            }elseif (isset($_GET['error']) && $_GET['error']=='emailExist'){
                                echo "<p class='imp-message'>Email address is already taken.</p>";
                            }elseif (isset($_GET['error']) && $_GET['error']=='passLength'){
                                echo "<p class='imp-message'>Password should have at least 6 characters.</p>";
                            }elseif (isset($_GET['status']) && $_GET['status']=='success'){
                                echo "<p class='nor-message'>Your account has been created. Please Login to Proceed.</p>";
                            }
                        ?>
                    </div>
                <h1>Welcome!</h1>
                <form action = "..\..\Config\signupProcess.php" method="POST">
                    <div class="container-2">
                            <div class="form-container">
                                <h2>Sign Up</h2>
                                <div class="input-fields">
                                    <div class="labels">
                                        <label>User Role</label>
                                        <label>User Email</label>
                                        <label>Password</label>
                                        <label>Confirm Password</label>
                                    </div>
                                    <div class="inputs">
                                        <select name="role">
                                            <option value="admin">Admin</option>
                                            <option value="mother">Mother</option>
                                            <option value="vog">VOG</option>
                                            <option value="phm">PHM</option>
                                            <!--<option value="mo">MO</option>-->
                                            <option value="pediatrician">Pediatrician</option>
                                            <option value="gaurdian">Guardian</option>
                                            <options value="" selected>Select</option></select>
                                        <input type="email" name = "email" placeholder="user email">
                                        <input type="password" name = "password" placeholder="password">
                                        <input type="password" name = "confirmpass" placeholder="re-enter password">
                                    </div>
                                </div>
                                    <p><a href="password-reset.html">Forgot Password?</a></p>
                                    <div class="btn">
                                        <button>Back</button>
                                        <button name="insert" value="1">Sign Up</button>
                                    </div>
                            </div>
                                    <div class="background"></div>
                    </div>
                </form>
            </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>