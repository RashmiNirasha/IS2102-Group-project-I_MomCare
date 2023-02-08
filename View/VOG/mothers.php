<?php 
session_start();
include '../../Config/dbConnection.php';
$_SESSION['mom_search'] = $_GET['search'];
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
        <div class="mom-filter">
        <h1>Find mother card</h1>
            <form action="" method="GET">
                <input class="mom-search" type="search" name="mom-search" id="mom-search" placeholder="Please enter a search term (Ex: First name, Last name, Mother ID)" required autofocus>
                <input type="submit" name="submit" value="Search">
                <h3></h3>
            </form>
        </div>
        
        <table class="MomBarTable">
            <?php
            if (isset($_GET['submit'])) {
                $search = $_GET['mom-search'];
                $query = "SELECT mom_fname, mom_lname, mom_id, mom_mobile FROM mother_details WHERE mom_id LIKE '%$search%' OR mom_email LIKE '%$search%' OR mom_fname LIKE '%$search%' OR mom_lname LIKE '%$search%' ORDER BY mom_fname ASC    ";
                $result = mysqli_query($con, $query);
                $queryResult = mysqli_num_rows($result);
                if ($queryResult > 0) { 
                    while ($row = mysqli_fetch_assoc($result)) { 
                        echo 
                        '<tr>
                            <td>
                                <div class="mom-bar">
                                    <div class="mom-bar-left">
                                        <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                                        <div>
                                            <h3>Ms. '.$row['mom_fname'].' '.$row['mom_lname'].'</h3>
                                            <p class="second-line">'.$row['mom_mobile'].'</p>
                                        </div>
                                    </div>
                                    <div class="mom-btns">
                                        <button name="viewMotherCard" onclick="window.location.href=\'../Mother/motherCardPage1.php\'">Mother Card</button>
                                        <button name="viewTests" onclick="window.location.href=\'TestsVog.php?mom_id='.$row['mom_id'].'\'">Scan & Tests</button>
                                    </div>
                                </div>
                            </td>
                        </tr>';
                    }
                }else{
                    echo "There are no results matching your search!";
                }
            }else{
                //echo "please enter a search term";
            }
            ?>
        </table>
    </div>
    <!--logout button-->
    <div class="log-out"> 
    <button onclick="window.location.href='../../Config/logout.php';" class="log-out-btn">Log out</button>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../index.php");
    exit();
} ?>