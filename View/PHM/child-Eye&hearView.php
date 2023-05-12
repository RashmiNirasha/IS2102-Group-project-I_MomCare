<?php 
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['user_id'])) { 
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_pages.php";
    include "../../Assets/Includes/sidenav2.php";
    $Phm_id = $_SESSION['user_id'];
?>

<html lang="en">
<Head>
  <style><?php include "../../Assets/css/style-child.css";?></style>
  <script src="../../Assets/js/functions.js"></script>
</Head>
<body>

<div class="child-container">
    <h2>Eyesight & Hearing Test </h2>
    
<!-- Add a record -->
<div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>Eyesight Test</h3></div>
            <div class="MotherGeneralDetails">
        <form action="../../Config/child-Eye&hearViewModel.php" method="POST">
        <table class="MotherCardTables">
        <?php
        if (isset($_GET['message'])) {
            echo "<tr><td colspan='6'><p class='error3'>" . $_GET['message'] . "</p></td></tr>";
        } elseif (isset($_GET['error'])) {
            echo "<tr><td colspan='6'><p class='error-message'>" . $_GET['error'] . "</p></td></tr>";
        }
        ?>
        <tr><input type="hidden" name="phm_id" value="<?php echo $Phm_id; ?>">
            <th>Child ID</th>
            <td><select id="child_id" name="child_id" required>
                        <option value="">Select a child</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT child_id FROM `child_details` WHERE phm_id = '$Phm_id'");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['child_id']);?>">
                            <?php echo htmlentities($row['child_id']);?>
                        </option>
                        <?php
                        }
                        ?>
                    </select></td>     

    </tr>
    <tr> 
        <th>Age</th>
        <td><select required>
                                                          <option value="age1">1st month after birth</option>
                                                          <option value="age2">2nd month after birth</option>
                                                          <option value="age3">6th month after birth</option>
                                                          <option value="age4">10th month after birth</option>
                                                          <option value="age5">12th month after birth</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    </tr>
    <tr>
        <th>Test</th>
        <td><select required>
                                                          <option value="test1">light_direction</option>
                                                          <option value="test2">looks_at_face</option>
                                                          <option value="test3">smiles_responsively</option>
                                                          <option value="test4">eyes_move</option>
                                                          <option value="test5">looks_around_curiously</option>
                                                          <option value="test6">grab_something</option>
                                                          <option value="test7">suspect_mole</option>
                                                          <option value="test8">pick_up_small_objects</option>
                                                          <option value="test9">reach_out_various_things</option>
                                                          <option value="test10">recognize_acquaintance</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    <tr>
        <th>Response</th>
        <td><select required>
                                                          <option value="response1">yes</option>
                                                          <option value="response2">no</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    </tr>
    <tr>
         <td colspan="2"><input type="submit" class="small-child-btn" value="submit" name="insert"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>

    <!-- section two  -->
    <div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>Hearing Test</h3></div>
            <div class="MotherGeneralDetails">
        <form action="../../Config/child-Eye&hearViewModel.php" method="POST">
        <table class="MotherCardTables">
        <?php
        if (isset($_GET['message'])) {
            echo "<tr><td colspan='6'><p class='error3'>" . $_GET['message'] . "</p></td></tr>";
        } elseif (isset($_GET['error'])) {
            echo "<tr><td colspan='6'><p class='error-message'>" . $_GET['error'] . "</p></td></tr>";
        }
        ?>
        <tr><input type="hidden" name="phm_id" value="<?php echo $Phm_id; ?>">
            <th>Child ID</th>
            <td><select id="child_id" name="child_id" required>
                        <option value="">Select a child</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT child_id FROM `child_details` WHERE phm_id = '$Phm_id'");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['child_id']);?>">
                            <?php echo htmlentities($row['child_id']);?>
                        </option>
                        <?php
                        }
                        ?>
                    </select></td>     

    </tr>
    <tr> 
        <th>Age</th>
        <td><select required>
                                                          <option value="age6">Shortly after birth</option>
                                                          <option value="age7">1st month after birth</option>
                                                          <option value="age8">From month 4</option>
                                                          <option value="age9">From month 7</option>
                                                          <option value="age10">By the 9th month</option>
                                                          <option value="age11">By the 12th month</option>
                                                          <option value="age12">12th month after birth</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    </tr>
    <tr>
        <th>Test</th>
        <td><select required>
                                                          <option value="test11">startle_and_blink</option>
                                                          <option value="test12">recognize_persistent_sounds</option>
                                                          <option value="test13">silent_when_hearing_sound</option>
                                                          <option value="test14">turn_head_or_eyes_to_sound</option>
                                                          <option value="test15">immediately_turn_to_speaker</option>
                                                          <option value="test16">listen_to_familiar_sounds</option>
                                                          <option value="test17">look_for_sounds</option>
                                                          <option value="test18">like_loud_tone</option>
                                                          <option value="test19">respond_to_name</option>
                                                          <option value="test20">respond_to_words</option>
                                                          <option value="test21">pick_up_objects</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    <tr>
        <th>Response</th>
        <td><select required>
                                                          <option value="response1">yes</option>
                                                          <option value="response2">no</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    </tr>
    <tr>
         <td colspan="2"><input type="submit" class="small-child-btn" value="submit" name="insert2"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>

    <!-- section three  -->

  </body>
</html>

<?php } else {
   header("Location: ../../mainLogin.php");
    exit();
}
?>
