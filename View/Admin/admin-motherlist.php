<?php
    include "../../Assets/Includes/header_admin.php";
    // include "..\..\Config\admin-managedoctorprocess.php";
    // session_start();
    // if (isset($_SESSION['s_email'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Doctor</title>
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
                <h1>New Registrations</h1>
                <div class="a-container-m">
                <div class="a-dropdown"><div class="a-manage-icon"><i class="material-icons" alt="manage accounts">manage_accounts</i>
            </div>
            <div class="au-dropdown-content">
                    <a href="..\..\View\Admin\admin-managemother.php">Manage Mother Accounts</a>
                    <a href="..\..\View\Admin\admin-managedoctor.php">Manage Doctor Accounts</a>
                    <a href="..\..\View\Admin\admin-managephm.php">Manage PHM Accounts</a>
                    </div>
            </div>
                <i class="material-icons" alt="notification icon">notifications</i>
                </div></div>
            <div class="ml-middle">
                <p>Add User</p>
                <a href="admin-adddoctor.php"><img src="..\..\Assets\Images\images-Sachini\add-user.png" alt="add user"></a>
            </div>
            <div class="ml-bar-container"></div>

            <?php 
                if ($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $name = $row['doc_name'];
                        $type = $row['doc_type'];
                        $work = $row['doc_workplace'];
                
                        
                        $output =  '  <div class="ml-bar">
                
                                    <div class="ml-img-manage">
                                        <img src="..\..\Assets\Images\images-Sachini\guest.png" alt="doctor profile picture">
                                        <div class="ml-text-manage">';
                        $output .=  "<h3>Name - $name</h3>";
                        $output .=  "<p>Hospital - $type, $work</p>";
                        $output .= '</div>
                                        </div>
                                        <div class="ml-btn-container">
                                        <div class="mi-btn-manage">
                                            <a href = "admin-updatedoctor.php"><input type="button" value="Edit"></a>
                                            <a href = "#"><input type="button" value="Delete"></a>
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
    // }else{
    //     header("Location:admin-login.php");
    // }
?>