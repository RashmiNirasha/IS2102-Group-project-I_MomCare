<?php
    session_start();
    if (isset($_SESSION['email'])){
        include "../../Assets/Includes/header_pages.php";
        include "../../Config/admin-managedoctorprocess.php";
    // $user_role = $_SESSION['user_role'];
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
    <!-- <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .confirm-box {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 30px 80px;
        max-width: 400px;
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .confirm-box .material-icons {
            font-size:40px;
            color: red;
            margin-bottom: 30px;
        }

        .confirm-box h3 {
        font-size: 20px;
        margin-top: 0;
        padding-top:3%;
        padding-left:1%
        }

        .confirm-box p {
        font-size: 16px;
        margin-bottom: 30px;
        text-align: center;
        }

        .deletediv {
            display: flex;
            justify-content:space-evenly;
        }

        .confirm-buttons {
        display: flex;
        justify-content: center;
        }

        .confirm-delete, .confirm-cancel {
        display: inline-block;
        padding: 8px 12px;
        border: none;
        cursor: pointer;
        font-size: 14px;
        margin: 10px;
        }

        .confirm-delete {
        background-color: #029EE4;
        color: #fff;
        }

        .confirm-delete:hover {
        background-color: #0062cc;
        }

        .confirm-cancel {
        background-color: #ccc;
        color: #333;
        }

        .confirm-cancel:hover {
        background-color: #eee;
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
                
                if ($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
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
                            <a href = "admin-updatedoctor.php?id=';
                $output .=$id;
                $output .='"><div class="ma-img-action"><i class="material-icons" alt="edit icon">edit</i></div></a>
                <div class="ma-img-action"><i class="material-icons" alt="delete icon" onclick="deleteConfirm(';
                $output .="'$id'";
                $output .= ');">delete</i></div></a>
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

    <div class="confirm-box" id="confirm-box" style="display:none;">
    <div class="deletediv">
    <i class = "material-icons" alt = "delete">delete</i>
    <h3>Confirm Deletion</h3>
    </div>
    <p>Are you sure you want to delete?</p>
    <div class="confirm-buttons">
    <button class="confirm-delete" id="confirm-delete" onclick="deleteConfirmed('doctor')">Delete</button>
    <button class="confirm-cancel" onclick="hideConfirmBox();">Cancel</button>
    </div>
    </div>
        <!-- <div class="a-content-2">
            <span></span>
            <a href = "..\..\Config\admin-logout.php"><button>
                <div class="a-btn-text"><h6>Log out</h6></div>
                <i class="material-icons" alt="logout">logout</i>
            </button></a>
        </div> -->
    </div>
    <script src="../../Assets/js/deleteconfirm.js"></script>
</body>
</html>
<?php
    }else{
        header("Location: ../../mainLogin.php");
    }
?>