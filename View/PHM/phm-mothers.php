<?php
    session_start();
    if (isset($_SESSION['email'])){
        include "../../Assets/Includes/header_pages.php";
        include "../../Config/phm-mothersprocess.php";
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
</head>
<body>
    <div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
                <h1>List of Mothers</h1>
                <form class="ma-searchbar" action="admin-searchdoctor.php" style="margin:auto;max-width:300px" method="get">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="material-icons">search</i></button>

                 

                </form>
                <div class="a-container-m">
                <!-- <div class="a-dropdown"><div class="a-manage-icon"><i class="material-icons" alt="manage accounts">manage_accounts</i>
            </div>
            <div class="au-dropdown-content">
                    <a href="..\..\View\Admin\admin-managemother.php">Manage Mother Accounts</a>
                    <a href="..\..\View\Admin\admin-managedoctor.php">Manage Doctor Accounts</a>
                    <a href="..\..\View\Admin\admin-managephm.php">Manage PHM Accounts</a>
                    </div>
            </div> -->
                <a href = "phm-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
                </div></div>
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
                    <!-- <th>Age</th> -->
                    <!-- <th>phm_id</th> -->
                    <th>Action</th>
                </tr>

                <?php 
                if ($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        if ($_SESSION['phm_id'] == $row['phm_id']){
                                    $id = $row['mom_id'];
                                    $fname = $row['mom_fname'];
                                    $lname = $row['mom_lname'];
                                    $tel = $row['mom_landline'];
                                    $mobile = $row['mom_mobile'];
                                    $email = $row['mom_email'];
                                    $address = $row['mom_address'];
                                    //$age = $row['mom_age'];
                                    //$phm_id = $row['phm_id'];

                            $output = '<tr>';
                            $output .= "<td>$id</td>";
                            $output .= "<td>$fname</td>";
                            $output .= "<td>$lname</td>";
                            $output .= "<td>$tel</td>";
                            $output .= "<td>$mobile</td>";
                            $output .= "<td>$email</td>";
                            $output .= "<td>$address</td>";
                            //$output .= "<td>$age</td>";
                            //$output .= "<td>$phm_id</td>";
                            $output .= '<td><div class="ad-actions">
                                        <div class="ma-img-action"><a href="phm-allocatevog.php?mom_id=';
                            $output .=$id;
                            $output .="'";
                            $output .='"><div class = "ad-button">Allocate VOG</div></a><a href = "#"><div class="ad-button">Mother Card</div></a></div>
                                    </div>
                                </td>';
                            '</tr>';
                            echo "$output";
                        }

                    }
                }
                ?>

                <!-- <tr>
                    <td>D01</td>
                    <td>Ama Rathnayake</td>
                    <td>071 876 5637</td>
                    <td>ama@chiranthi.gmail.com</td>
                    <td>Ranna, Tangalle</td>
                    <td>28 years</td>
                    <td>Colombo</td>
                    <td>VOG</td>
                    <td><div class="ma-actions">
                            <a href = "#"><div class="ma-img-action"><i class="material-icons" alt="view icon">visibility</i></div></a>
                            <a href = "admin-updatedoctor.php"><div class="ma-img-action"><i class="material-icons" alt="edit icon">edit</i></div></a>
                            <a href = "#"><div class="ma-img-action"><i class="material-icons" alt="delete icon">delete</i></div></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>D01</td>
                    <td>Ama Rathnayake</td>
                    <td>071 876 5637</td>
                    <td>ama@chiranthi.gmail.com</td>
                    <td>Ranna, Tangalle</td>
                    <td>28 years</td>
                    <td>Colombo</td>
                    <td>VOG</td>
                    <td><div class="ma-actions">
                            <a href = "#"><div class="ma-img-action"><i class="material-icons" alt="view icon">visibility</i></div></a>
                            <a href = "admin-updatedoctor.php"><div class="ma-img-action"><i class="material-icons" alt="edit icon">edit</i></div></a>
                            <a href = "#"><div class="ma-img-action"><i class="material-icons" alt="delete icon">delete</i></div></a>
                        </div>
                    </td>
                </tr> -->
            </table>
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
</body>
</html>
<?php
    }else{
        header("Location: ../../mainLogin.php");
    }
?>