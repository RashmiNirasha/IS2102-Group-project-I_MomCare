<?php
include "..\..\Config\admin-updatedoctorSQLprocess.php";
include ("..\..\Assets\Includes\header_admin.php");
// session_start();
// if (isset($_SESSION['s_email'])){
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Doctor</title>
    <link rel="stylesheet" href="..\..\Assets\css\style-common.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style>
</head>
<body>
    <div class="a-container">
         <div class="a-content">
            <div class="a-container-n">
            <h1>Update Doctor Details</h1>
            <div class="au-msg">
                        <?php 
                            // if (isset($_GET['status']) && $_GET['status']=='errorIDTaken'){
                            //     echo "<p class='au-imp-message'>Doctor ID is already taken.</p>";
                            // }else
                            if (isset($_GET['status']) && $_GET['status']=='erroremptyField'){
                                echo "<p class='au-imp-message'>All the fields are required.</p>";
                            }elseif (isset($_GET['status']) && $_GET['status']=='success'){
                                echo "<p class='au-nor-message'>Record Updated Successfully.</p>";
                                // echo "<script>setTimeout(\"location.href = 'admin-managedoctor.php';\",1500);</script>";
                            }
                        ?>
                    </div>
            <div class="a-container-m">
            <div class="a-dropdown"><div class="a-manage-icon"><i class="material-icons" alt="manage accounts">manage_accounts</i>
        </div>
        <div class="au-dropdown-content">
                <a href="..\..\View\Admin\admin-managemother.php">Manage Mother Accounts</a>
                <a href="..\..\View\Admin\admin-managedoctor.php">Manage Doctor Accounts</a>
                <a href="..\..\View\Admin\admin-managephm.php">Manage PHM Accounts</a>
                </div>
        </div>
            <a href = "admin-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
            </div></div>
            <div class="au-doctor-form">
                <form action="..\..\Config\admin-updatedoctorprocess.php" method="post">
                    <div class="au-first-raw">
                        <div class="au-doctor-id"><label>Doctor_ID</label  name="docid"><input type="text" name="docid" value="<?php  echo $id ?>" readonly></div>
                            <select class="au-dropdown" name = "dtype">
                                <option value="vog" <?php if ($type=='vog'){ echo 'selected';}?>>VOG</option>
                                <option value="ped" <?php if ($type=='ped'){ echo 'selected';}?>>Pediatrician</option>
                                <!--<option value="mo">MO</option>-->
                            </select>
                        </div>
                    <div class="au-middle">
                        <div class="au-middle-content">
                        <div class="au-labels">
                        <label>Name:</label>
                        <label>Age:</label>
                        <label>Telephone:</label>
                        <label>Email:</label>
                        <label>Address:</label>
                        <label>Date of Birth:</label>
                        <label>Work Place:</label>
                        </div>
                        <div class="au-inputs">
                        <input type="text" name="name" value="<?php  echo $name?>">
                        <input type="text" name="age" value="<?php  echo $age?>">
                        <input type="text" name="tel" value="<?php  echo $tel?>">
                        <input type="email" name="email" value="<?php  echo $email?>">
                        <input type="text" name="address" value="<?php  echo $address?>">
                        <input type="date" name="dob" value="<?php  echo $dob?>">
                        <input type="text" name="work" value="<?php  echo $work?>">
                        </div>
                        </div>
                        <div class="au-btn">
                            <span></span>
                            <button class="au-add-user-btn" type = "submit" name = "insert" value="1">Update User</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="a-content-2">
            <span></span>
            <a href = "..\..\Config\admin-logout.php"><button>
                <div class="a-btn-text"><h6>Log out</h6></div>
                <i class="material-icons" alt="logout">logout</i>
            </button></a>
        </div>
    </div>
</body>
</html>

<?php
// }else{
//     header("Location:admin-login.php");
// }

?>
