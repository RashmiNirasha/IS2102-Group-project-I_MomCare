<?php 
session_start();
include '../../Config/dbConnection.php';
if (isset($_SESSION['email'])){?>

<?php include "../../Assets/Includes/header_pages.php" ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/Css/style-common.css" ?></style>
</head>
<body>
    <div class="main-mother">
    <a href="vog-dashboard.php"><button class="goBackBtn">Go back</button></a>

        <div class="mom-filter">
            <h1>Find mother card</h1>
            <form action="" method="GET">
                <input class="mom-search" type="search" name="mom-search" id="mom-search" placeholder="Please enter a search term (Ex: First name, Last name, Mother ID)" required autofocus>
                <input type="submit" name="submit" value="Search">
            </form>
        </div>
        
        <div class="AllMotherCardsDiv">
        <?php
            if (isset($_GET['submit'])) {
                $search = $_GET['mom-search'];
                $query = "SELECT mom_fname, mom_lname, mom_id, mom_email FROM mother_details WHERE mom_id LIKE '%$search%' OR mom_email LIKE '%$search%' OR mom_fname LIKE '%$search%' OR mom_lname LIKE '%$search%' ORDER BY mom_fname ASC";
                $result = mysqli_query($con, $query);
                $queryResult = mysqli_num_rows($result);
                if ($queryResult > 0) { 
                    while ($row = mysqli_fetch_assoc($result)) { 
                        $mom_fname = $row['mom_fname'];
                        $mom_lname = $row['mom_lname'];
                        $mom_id = $row['mom_id'];
                        $mom_email = $row['mom_email'];
                        echo '
                        <div class="momBarMain">
                            <div class="momProfilePic">
                                <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                            </div>
                            <div class="momBarContent">
                                <div class="momBarHeader"><b><h7>Ms. '.$mom_fname.' '. $mom_lname.' </h7></b></div>
                                <div class="momBarDetails">
                                    <div class="momBarDetailsSec1">
                                        <ul>
                                            <li>Mother ID: '.$mom_id.' </li>
                                            <li>Email: '.$mom_email.'</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="momBarBtn">
                                <a href="#"><button class="momBarBtn-1">View Profile</button></a>
                                <a href="vog-tests.php?mom_id='.$mom_id.'"><button class="momBarBtn-2">View Reports</button></a>
                                <a href="#"><select name="momBarChildSelect" id="momBarChildSelect">
                                    <option value="child1">Child 1</option>
                                    <option value="child2">Child 2</option>
                                </select></a>
                            </div>
                        </div>';
                    }
                }else{ ?>
                    <p class="error_mother_search"><?php echo "There are no results matching your search!"; ?></p>
                <?php }
            }else{
                //echo "please enter a search term";
            }
            ?>
        </div>

    </div>
    <!--logout button-->
    <div class="log-out"> 
    <!-- <button onclick="window.location.href='../../Config/logout.php';" class="log-out-btn">Log out</button> -->
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../index.php");
    exit();
} ?>