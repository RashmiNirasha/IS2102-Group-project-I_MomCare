<?php
    session_start();
    if (isset($_SESSION['email'])){
        include "../../Assets/Includes/header_pages.php";
        include "../../Config/admin-searchdoctorprocess.php";
        //print_r($s_result);

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
                <h1>Manage Doctor Accounts</h1>
                <div class="au-msg">
                <?php 
                if (isset($_GET['status']) && $_GET['status']=='success'){
                    echo "<p class='au-nor-message'>Record Deleted Successfully.</p>";
                }elseif (isset($_GET['status']) && $_GET['status']=='not_success'){
                    echo "<p class='au-imp-message'>Record Cannot Be Deleted.</p>";
                } 
                ?>
            </div>
                <div class="a-container-m">
                <!-- <div class="a-dropdown"><div class="a-manage-icon"><i class="material-icons" alt="manage accounts">manage_accounts</i>
            </div>
            <div class="au-dropdown-content">
                    <a href="..\..\View\Admin\admin-managemother.php">Manage Mother Accounts</a>
                    <a href="..\..\View\Admin\admin-managedoctor.php">Manage Doctor Accounts</a>
                    <a href="..\..\View\Admin\admin-managephm.php">Manage PHM Accounts</a>
                    </div>
            </div> -->
                <a href = "admin-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
                </div></div>
                <form class="ma-searchbar" action="admin-searchdoctor.php" style="margin-left:15%;max-width:300px" method="get">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
            <div class="ma-table">
            <table>
                <tr>
                    <th>Doctor ID</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Work Place</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>

                <?php 
                if ($noResult == "True"){
                    echo "<tr><td colspan='9' style='text-align:center'>No Result Found</td></tr>";
                }else{
                    // echo "record exist";
                    // print_r($result);
                    while($row = $s_result->fetch_assoc()){
                        $id = $row['doc_id'];
                        $name = $row['doc_name'];
                        $type = $row['doc_type'];
                        $work = $row['doc_workplace'];
                        $age = $row['doc_age'];
                        $address = $row['doc_address'];
                        $email = $row['doc_email'];
                        $tel = $row['doc_tele'];

                $output = '<tr>';
                $output .= "<td>$id</td>";
                $output .= "<td>$name</td>";
                $output .= "<td>$tel</td>";
                $output .= "<td>$email</td>";
                $output .= "<td>$address</td>";
                $output .= "<td>$age</td>";
                $output .= "<td>$work</td>";
                $output .= "<td>$type</td>";
                $output .= '<td><div class="ma-actions">
                            <a href = "#"><div class="ma-img-action"><i class="material-icons" alt="view icon">visibility</i></div></a>
                            <a href = "admin-updatedoctor.php?id=';
                $output .=$id;
                $output .='"><div class="ma-img-action"><i class="material-icons" alt="edit icon">edit</i></div></a>
                            <a href = "..\..\Config\admin-deletedoctorprocess.php?status=delete&id=';
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
    </div>
</body>
</html>
<?php
    }else{
        header("Location: ../../mainLogin.php");
    }
?>