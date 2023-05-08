<?php
session_start();
include '../../Config/dbConnection.php';

if (!isset($_SESSION['email'])) {
    if (isset($_GET['submit'])) {
        $search = $_GET['mom-search'];
        $query = "SELECT mom_fname, mom_lname, mom_id, mom_mobile FROM mother_details WHERE mom_id LIKE '%$search%' OR mom_email LIKE '%$search%' OR mom_fname LIKE '%$search%' OR mom_lname LIKE '%$search%' ORDER BY mom_fname ASC";
        $result = mysqli_query($con, $query);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0) { 
            while ($row = mysqli_fetch_assoc($result)) { 
                echo 
                '<div class="mom-bar">
                    <div class="mom-bar-left">
                        <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                        <div>
                            <h3>Ms. '.$row['mom_fname'].' '.$row['mom_lname'].'</h3>
                            <p class="second-line">'.$row['mom_mobile'].'</p>
                        </div>
                    </div>
                    <div class="mom-btns">
                        <button name="viewMotherCard" onclick="window.location.href=\'../Mother/motherCardPage1.php?mom_id='.$row['mom_id'].'\'">Mother Card</button>
                        <button name="viewTests" onclick="window.location.href=\'vog-tests.php?mom_id='.$row['mom_id'].'\'">Scan & Tests</button>
                    </div>
                </div>';
            }
        }else{ ?>
            <p class="error_mother_search"><?php echo "There are no results matching your search!"; ?></p>
        <?php }
    }else{
        echo "No result found!";
    }
}
?>