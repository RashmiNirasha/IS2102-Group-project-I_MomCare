<?php 
include "../../Assets/Includes/header_pages.php";
session_start();
include '../../Config/dbConnection.php';
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<head>
    <title>Home</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

<div class="main-mother">
        <div class="mom-filter">
        <h1>Find Child </h1>
        <form action=" " method="GET">
            <input class="mom-search" type="search" name="search" id="search" placeholder="Please enter a search term (Ex: First name, Last name, Child ID)" required autofocus>
            <input type="submit" name="submit" value="Search">
            </form>

        </div>

            <table class="MomBarTable">
            <?php 
           if (isset($_GET['submit'])){
                $search = $_GET['search'];
                $sql = "SELECT * FROM child_details WHERE child_id LIKE '%$search%' OR mom_email LIKE '%$search%' or child_name LIKE '%$search%' ORDER BY child_name ASC";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $childname=$row['child_name'];
                        $childid=$row['child_id'];
                        $PHM_id=$row['phm_id'];
                        echo '
                        <tr>
                        <td>
                        <div class="mom-bar">
                        <div class="mom-bar-left">
                        <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                            <div>
                                <h3>'.$childid.'</h3>
                                <p class="second-line">Name : '.$childname.' </p>
                                <label for="mother_id" name="mother_id" type="hidden" value="'.$row['mom_id'].'"></label>
                            </div>
                        </div>
                        <div class="mom-btns">
                        <button type ="submit" name="enternotes" onclick="window.location.href=\'pediatrician-addNotesView.php?childid='.$childid.'\'">Enter Notes</button>
                        <button type ="submit" name="enternotes" onclick="window.location.href=\'pediatrician-viewNotesView.php?childid='.$childid.'\'">View Notes</button>

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
</div>
</body>
</html>
<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>