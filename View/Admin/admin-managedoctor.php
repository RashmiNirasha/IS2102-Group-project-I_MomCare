<?php
    include "..\..\Config\admin-managedoctorprocess.php";
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
    <link rel="stylesheet" href="..\..\Assets\css\admin-managedoctor.css" type="text/css">
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
            <h1>Manage Doctor Accounts</h1>
            <img src="..\..\Assets\Images\images-Sachini\notification.png" alt="notification icon">
            </div>
            <div class="middle">
                <p>Add User</p>
                <a href="admin-adddoctor.php"><img src="..\..\Assets\Images\images-Sachini\add-user.png" alt="add user"></a>
            </div>
            <div class="bar-container"></div>

            <?php 
                if ($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $name = $row['doc_name'];
                        $type = $row['doc_type'];
                        $work = $row['doc_workplace'];
                
                        
                        $output =  '  <div class="bar">
                
                                    <div class="img-manage">
                                        <img src="..\..\Assets\Images\images-Sachini\guest.png" alt="doctor profile picture">
                                        <div class="text-manage">';
                        $output .=  "<h3>Name - $name</h3>";
                        $output .=  "<p>Hospital - $type, $work</p>";
                        $output .= '</div>
                                        </div>
                                        <div class="btn-container">
                                        <div class="btn-manage">
                                            <input type="button" value="Edit">
                                            <input type="button" value="Delete">
                                        </div>
                                        </div>
                                    </div>';
                        echo "$output";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php
    }else{
        header("Location:admin-login.php");
    }
?>