<?php
    session_start();
    if (isset($_SESSION['email'])){
        include "../../Assets/Includes/header_pages.php";
        include "../../Config/phm-childrenprocess.php";

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
                <h1>List of Children</h1>
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
                <a href = "phm-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
                </div></div>
                <form class="ma-searchbar" action="phm-searchchildren.php" style="margin-left:15%;max-width:300px" method="get">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
            <div class="ma-table">
            <table>
                <tr>
                    <th>Child ID</th>
                    <th>Child Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Mother ID</th>
                    <th>Mother Name</th>
                    <th>Father Name</th>
                    <th>Action</th>
                </tr>

                <?php 
                
                if ($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $id = $row['child_id'];
                        $name = $row['child_name'];
                        $dob = $row['birth_date'];
                        $gender = $row['child_gender'];
                        $mom_id = $row['mom_id'];
                        $mom_name = $row['mother_name'];
                        $dad_name = $row['fathers_name'];
                        //$guardian_id = $row['guardian_id'];

                $output = '<tr>';
                $output .= "<td>$id</td>";
                $output .= "<td>$name</td>";
                $output .= "<td>$dob</td>";
                $output .= "<td>$gender</td>";
                $output .= "<td>$mom_id</td>";
                $output .= "<td>$mom_name</td>";
                $output .= "<td>$dad_name</td>";
                // $output .= "<td>$guardian_id</td>";
                $output .= '<td><div class="ad-actions">
                                        <div class="ma-img-action"><a href="phm-allocateped.php?child_id=';
                            $output .=$id;
                            $output .="'";
                            $output .='"><div class = "ad-button">Allocate Pediatrician</div></a><a href = "..\..\View\Child\child-fullChildCard.php?child_id=';
                            $output .=$id;
                            // $output .="'";
                            $output .='"><div class="ad-button">Child Card</div></a></div>
                                    </div>
                                </td>';
                            '</tr>';
                            echo "$output";

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