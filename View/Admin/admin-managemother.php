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
    <title>Manage Mother</title>
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
                <h1>Manage Mother Accounts</h1>
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
            <div class="ma-table">
            <table>
                <tr>
                    <th>Mother ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>PHM ID</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Mother ID</td>
                    <td>Mother ID</td>
                    <td>Mother ID</td>
                    <td>Mother ID</td>
                    <td>Mother ID</td>
                    <td>Mother ID</td>
                    <td>Mother ID</td>
                    <td><div class="ma-actions">
                            <div class="ma-btn-action"></div>
                            <div class="ma-btn-action"></div>
                            <div class="ma-btn-action"></div>
                        </div>
                    </td>
                </tr>
            </table>
            </div> 
        </div>
    </div>
</body>
</html>
<?php
    // }else{
    //     header("Location:admin-login.php");
    // }
?>