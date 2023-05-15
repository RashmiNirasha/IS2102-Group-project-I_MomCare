

<?php
session_start();
include '../../Config/dbConnection.php';
if (isset($_SESSION['email'])) {

    $doc_id = $_SESSION['user_id'];
    $search = (isset($_GET['search']) || isset($_GET['submit'])) ? $_GET['search'] : '';

    $sql = "SELECT * FROM mother_details WHERE doc_id = '$doc_id' AND (mom_fname LIKE '%$search%' OR mom_lname LIKE '%$search%' OR mom_id LIKE '%$search%')";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $mom_id = $row['mom_id'];
            $mom_fname = $row['mom_fname'];
            $mom_lname = $row['mom_lname'];
            $mom_age = $row['mom_age'];
            $mom_email = $row['mom_email'];
            $mom_mobile = $row['mom_mobile'];
            $mom_address = $row['mom_address'];

            $sql2 = "SELECT * FROM mcard_general WHERE mom_id = '$mom_id'";
            $result2 = mysqli_query($con, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $mom_bg = $row2['blood_group'];
            }

            echo '
                <div class="momBarMain">
                    <div class="momProfilePic">
                        <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                    </div>
                    <div class="momBarContent">
                        <div class="momBarHeader"><b><h7>Ms. ' . $mom_fname . ' ' . $mom_lname . ' </h7></b></div>
                        <div class="momBarDetails">
                            <div class="momBarDetailsSec1">
                                <ul>
                                    <li>Mother ID: ' . $mom_id . ' </li>
                                    <li>Email: ' . $mom_email . '</li>
                                </ul>
                            </div>
                            <div class="momBarDetailsSec2">
                                <ul>
                                    <li>Phone: ' . $mom_mobile . '</li>
                                    <li>Address: ' . $mom_address . '</li>
                                </ul>
                            </div>
                            <div class="momBarDetailsSec3">
                                <ul>
                                <li>Age: ' . $mom_age . '</li>
                                <li>Blood Group: </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="momBarBtn">
                        <a href="../Mother/mother-motherCardUpdate.php?mom_id=' . $mom_id . '"><button class="momBarBtn-1">View Profile</button></a>
                        <a href="vog-tests.php?mom_id=' . $mom_id . '"><button class="momBarBtn-2">View Reports</button></a>
                        <a href="#">
                        
                        <select name="momBarChildSelect" id="momBarChildSelect" onchange="goToChildProfile(this.value);">';

                        $sql3 = "SELECT * FROM child_details WHERE mom_id = '$mom_id'";
                        $result3 = mysqli_query($con, $sql3);
                        
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $child_id = $row3['child_id'];
                            echo '<option value="' . $child_id . '">' . $child_id . '</option>';
                        }

            echo '</select></a>
                    </div>
                </div>';
        }
    } else {
        echo '<h3>No mothers found</h3>';
    }
?>
<?php } else {
    header("Location: ../../mainLogin.php");
    exit();
} ?>

<script>
    function goToChildProfile(childId) {
        if (childId) {
            window.location.href = "../Child/child-fullChildCard.php?child_id=" + childId;
        }
    }
</script>