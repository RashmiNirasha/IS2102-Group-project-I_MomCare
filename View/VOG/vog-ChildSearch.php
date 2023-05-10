<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
include '../../Config/dbConnection.php';
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<head>
    <title>Home</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <button class="goBackBtn" onclick="history.back()">Go back</button>
    <div class="main-mother">
        <div class="child-filter">
            <h1>Find Child </h1>
            <form action=" " method="POST">
                <input class="mom-search" type="search" name="query" id="query" placeholder="Please enter a search term (Ex: First name, Last name, Child ID)" required autofocus>
                <input type="submit" name="submit" value="Search">
            </form>
        </div>
        <div class="AllMotherCardsDiv">
        <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['query'])) {
                    echo "Please enter a search term.";
                    return;
                }

                $query = mysqli_real_escape_string($con, $_POST['query']);
                $query = trim($query);

                if (is_numeric($query)) {
                    echo "Search term should not be a number.";
                    return;
                }

                $sql = "SELECT * FROM child_details WHERE child_id LIKE '%$query%' OR mom_email LIKE '%$query%' or child_name LIKE '%$query%' ORDER BY child_name ASC";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $child_name = $row['child_name'];
                        $child_id = $row['child_id'];
                        $PHM_id = $row['phm_id'];
                        echo '
                        <div class="momBarMain">
                            <div class="momProfilePic">
                                <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                            </div>
                            <div class="momBarContent">
                                <div class="momBarHeader"><b><h7>'.$child_name.'</h7></b></div>
                                <div class="momBarDetails">
                                    <div class="momBarDetailsSec1">
                                        <ul>
                                            <li>Child ID: '.$child_id.' </li>
                                            <li>PHM ID: '.$PHM_id.'</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="momBarBtn">
                                <a href="#"><button class="momBarBtn-1">View Profile</button></a>
                                <a href="#"><button class="momBarBtn-2">View Reports</button></a>
                            </div>
                        </div>';
                    }
                } else {
                    echo "There are no results matching your search!";
                }
            } else {
                    
                }
            ?>      
        </div>
    </div>
</body>
</html>
<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>