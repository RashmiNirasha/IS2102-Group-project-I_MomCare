<?php
    include "../../Assets/Includes/header_admin.php";
    include "..\..\Config\admin-managemotherprocess.php";
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
                <form class="ma-searchbar" action="/action_page.php" style="margin:auto;max-width:300px">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
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
                </div>
            </div>
            <div class="ma-table">
                <table>
                    <tr>
                        <th>Mother ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Telephone</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Registered Date</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                    if ($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            $id = $row['mom_id'];
                            $fname = $row['mom_fname'];
                            $lname = $row['mom_lname'];
                            $age = $row['mom_age'];
                            $address = $row['mom_address'];
                            $email = $row['mom_email'];
                            $tel1 = $row['mom_landline'];
                            $tel2 = $row['mom_mobile'];
                            $regdate = $row['mom_regdate'];

                    $output = '<tr>';
                    $output .= "<td>$id</td>";
                    $output .= "<td>$fname</td>";
                    $output .= "<td>$lname</td>";
                    $output .= "<td>$tel1</td>";
                    $output .= "<td>$tel2</td>";
                    $output .= "<td>$email</td>";
                    $output .= "<td>$address</td>";
                    $output .= "<td>$age</td>";
                    $output .= "<td>$regdate</td>";
                    $output .= '<td><div class="ma-actions">
                                <a href = "#"><div class="ma-img-action"><i class="material-icons" alt="view icon">visibility</i></div></a>
                                <a href = "admin-updatemother.php"><div class="ma-img-action"><i class="material-icons" alt="edit icon">edit</i></div></a>
                                <a href = "..\..\Config\admin-deletemotherprocess.php?status=delete&id=';
                $output .=$id;
                $output .='"><div class="ma-img-action"><i class="material-icons" alt="delete icon">delete</i></div></a>
                            </div>
                        </td>';
                    '</tr>';
                    echo "$output";

                        }
                    }
                    ?>
                </table>
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