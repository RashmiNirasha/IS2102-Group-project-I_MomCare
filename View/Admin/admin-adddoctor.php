<?php
session_start();
if (isset($_SESSION['s_email'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="..\..\Assets\css\admin-adddoctor.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="nav">
               <div class="logo"><img src="..\..\Assets\Images\images-Sachini\logo.png" alt="website logo"></div>
               <span></span>
               <div class="nav-text">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="admin-dashboard.php">Dashboard</a>
               </div>
               <div class="image-user"><img src="..\..\Assets\Images\images-Sachini\people.png" alt="user profile picture"></div> 
            </div>
        </div>
        <div class="content">
            <div class="container-n">
            <h1>Add Doctor Details</h1>
            <div class="msg">
                        <?php 
                            if (isset($_GET['status']) && $_GET['status']=='errorIDTaken'){
                                echo "<p class='imp-message'>Doctor ID is already taken.</p>";
                            }elseif (isset($_GET['status']) && $_GET['status']=='erroremptyField'){
                                echo "<p class='imp-message'>All the fields are required.</p>";
                            }elseif (isset($_GET['status']) && $_GET['status']=='success'){
                                echo "<p class='nor-message'>Record Added Successfully.</p>";
                                echo "<script>setTimeout(\"location.href = 'admin-managedoctor.php';\",1500);</script>";
                            }
                        ?>
                    </div>
            <img src="..\..\Assets\Images\images-Sachini\notification.png" alt="notification icon">
            </div>
            <div class="doctor-form">
                <form action="..\..\Config\admin-adddoctorprocess.php" method="post">
                    <div class="first-raw">
                        <div class="doctor-id"><label>Doctor_ID</label><input type="text" name="docid"></div>
                            <select class="dropdown" name = "dtype">
                                <option value="VOG">VOG</option>
                                <option value="Pediatrician">Pediatrician</option>
                                <!--<option value="mo">MO</option>-->
                                <option value="" selected>select</option>
                            </select>
                        </div>
                    <div class="middle">
                        <div class="middle-content">
                        <div class="labels">
                        <label>Name:</label>
                        <label>Age:</label>
                        <label>Telephone:</label>
                        <label>Email:</label>
                        <label>Address:</label>
                        <label>Date of Birth:</label>
                        <label>Work Place:</label>
                        </div>
                        <div class="inputs">
                        <input type="text" name="name">
                        <input type="text" name="age">
                        <input type="text" name="tel">
                        <input type="email" name="email">
                        <input type="text" name="address">
                        <input type="date" name="dob">
                        <input type="text" name="work">
                        </div>
                        </div>
                        <div class="btn">
                            <span></span>
                            <button class="add-user-btn" type = "submit" name = "insert" value="1">Add User</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header("Location:admin-login.php");
}

?>