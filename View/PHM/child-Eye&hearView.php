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
        if (isset($_GET['message1'])) {
            echo "<tr><td colspan='6'><p class='error3'>" . $_GET['message1'] . "</p></td></tr>";
            unset($_GET['message1']);
        } elseif (isset($_GET['error'])) {
            echo "<tr><td colspan='6'><p class='error-message'>" . $_GET['error'] . "</p></td></tr>";
            unset($_GET['error']);
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
        <td><select id= "age" name="age" required>
                                                          <option value="1st month after birth">1st month after birth</option>
                                                          <option value="2nd month after birth">2nd month after birth</option>
                                                          <option value="6th month after birth">6th month after birth</option>
                                                          <option value="10th month after birth">10th month after birth</option>
                                                          <option value="12th month after birth">12th month after birth</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    </tr>
    <tr>
        <th>Test</th>
        <td><select id="test" name="test" required>
                                                          <option value="light_direction">Does the baby direct its eyes towards the light?</option>
                                                          <option value="looks_at_face">Does the baby look at the mother's face well?</option>
                                                          <option value="smiles_responsively">When the mother/caregiver moves his/her face sideways, does the baby smile responsively?</option>
                                                          <option value="eyes_move">Does the baby's eyes move along?</option>
                                                          <option value="looks_around_curiously">Does the child look around curiously?</option>
                                                          <option value="grab_something">Does the child reach out and try to grab something?</option>
                                                          <option value="suspect_mole">Do you suspect that the child has a mole?</option>
                                                          <option value="pick_up_small_objects">Is the child able to pick up small objects with the thumb and little toe?</option>
                                                          <option value="reach_out_various_things">Does the child reach out to various things and ask for them?</option>
                                                          <option value="recognize_acquaintance">When seen by an acquaintance, does the child recognize them before they speak to the child?</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    <tr>
        <th>Response</th>
        <td><select id="response" name="response" required>
                                                          <option value="yes">yes</option>
                                                          <option value="no">no</option>
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
        <td><select id="age" name="age" required>
                                                          <option value="Shortly after birth">Shortly after birth</option>
                                                          <option value="1st month after birth">1st month after birth</option>
                                                          <option value="From month 4">From month 4</option>
                                                          <option value="From month 7">From month 7</option>
                                                          <option value="By the 9th month">By the 9th month</option>
                                                          <option value="By the 12th month">By the 12th month</option>
                                                          <option value="12th month after birth">12th month after birth</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    </tr>
    <tr>
        <th>Test</th>
        <td><select id="test" name="test" required>
                                                          <option value="startle_and_blink">Does the child startle and blink when he hears a sudden loud noise (such as clapping, a door slamming shut)? Or do you widen your eyes?</option>
                                                          <option value="recognize_persistent_sounds">Does the child begin to recognize sudden, persistent sounds (such as the sound of a truck loading) and respond quietly to them?</option>
                                                          <option value="silent_when_hearing_sound">Even when the mother or caregiver is not in sight, is the baby silent when they hear their sound? Or smile a little?</option>
                                                          <option value="turn_head_or_eyes_to_sound">Does the baby turn her/his head or eyes when mother/caregiver speaks from the side or behind?</option>
                                                          <option value="immediately_turn_to_speaker">Does the child immediately turn to the mother/caregiver when spoken to?</option>
                                                          <option value="listen_to_familiar_sounds">Does the child listen carefully to familiar sounds heard every day?</option>
                                                          <option value="look_for_sounds">Looking for sounds from a place where the child can't see?</option>
                                                          <option value="like_loud_tone">Does the baby like to be spoken to in a loud tone?</option>
                                                          <option value="respond_to_name">Does the child respond to his name and other familiar sounds?</option>
                                                          <option value="respond_to_words">Does the child respond to words such as 'no', 'Tata' even if she/he did not do the corresponding action?</option>
                                                          <option value="pick_up_objects">Is the child able to pick up small objects with the thumb and little toe?</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></td>
    <tr>
        <th>Response</th>
        <td><select id="response" name="response" required>
                                                          <option value="yes">yes</option>
                                                          <option value="No">no</option>
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
    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Eyesight Test  </h3></div>
                        <div class="MotherGeneralDetails">
                        <?php
    $sql = "SELECT * FROM child_ceyesight_test";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<table class="MotherCardTables">';
        echo '<tr>
        <th>Child ID</th>
               <th>Age</th>
               <th>Test</th>
               <th>Response</th>
             </tr>';
        while($row = mysqli_fetch_assoc($result)) {
            $test = $row["test_name"];
            echo "<tr>";
            echo "<th>" . $row["child_id"] . "</th>
            <th>" . $row["age_range"] . "</th>";
            if ($row['test_name'] == "light_direction") {
                echo "<td>Does the baby direct its eyes towards the light?</td>";
            } else if ($row['test_name'] == "looks_at_face") {
                echo "<td>Does the baby look at the mother's face well?</td>";
            } else if ($row['test_name'] == "smiles_responsively") {
                echo "<td>When the mother/caregiver moves his/her face sideways, does the baby smile responsively?</td>";
            } elseif ($row['test_name'] == "eyes_move") {
                echo "<td>Does the baby's eyes move along?</td>";
            } elseif ($row['test_name'] == "looks_around_curiously") {
                echo "<td>Does the child look around curiously?</td>";
            } elseif ($row['test_name'] == "grab_something") {
                echo "<td>Does the child reach out and try to grab something?</td>";
            } elseif ($row['test_name'] == "suspect_mole") {
                echo "<td>Do you suspect that the child has a mole?</td>";
            } elseif ($row['test_name'] == "pick_up_small_objects") {
                echo "<td>Is the child able to pick up small objects with the thumb and little toe?</td>";
            } elseif ($row['test_name'] == "reach_out_various_things") { 
                echo "<td>Does the child reach out to various things and ask for them?</td>";
            } elseif ($row['test_name'] == "recognize_acquaintance") {
                echo "<td>When seen by an acquaintance, does the child recognize them before they speak to the child?</td>";
            }
            echo "<td class='" . ($row["response"] == "yes" ? "light-purple" : "light-red") . "'>" . $row["response"]. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?>
                        </div>

    <!-- section four  -->
  <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
  </div>
                        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Hearing Test  </h3></div>
                        <div class="MotherGeneralDetails">
                        <?php
                        $sql = "SELECT * FROM child_chearting_test ";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="MotherCardTables">';
                            echo '<tr>
                                   <th>Child ID </th>
                                   <th>Age</th>
                                   <th>Test</th>
                                   <th>Response</th>
                                 </tr>';
                            while($row = mysqli_fetch_assoc($result)) {
                                $test = $row["test_name"];
                                echo "<tr>";
                                echo "<th>" . $row["child_id"] . "</th>
                                <th>" . $row["age_range"] . "</th>";
                                if ($row['test_name'] == "startle_and_blink") {
                                    echo "<td>Does the child startle and blink when he hears a sudden loud noise (such as clapping, a door slamming shut)? Or do you widen your eyes?</td>";
                                } else if ($row['test_name'] == "recognize_persistent_sounds") {
                                    echo "<td>Does the child begin to recognize sudden, persistent sounds (such as the sound of a truck loading) and respond quietly to them?</td>";
                                } else if ($row['test_name'] == "silent_when_hearing_sound") {
                                    echo "<td>Even when the mother or caregiver is not in sight, is the baby silent when they hear their sound? Or smile a little?</td>";
                                } elseif ($row['test_name'] == "turn_head_or_eyes_to_sound") {
                                    echo "<td>Does the baby turn her/his head or eyes when mother/caregiver speaks from the side or behind?</td>";
                                } elseif ($row['test_name'] == "immediately_turn_to_speaker") {
                                    echo "<td>Does the child immediately turn to the mother/caregiver when spoken to?</td>";
                                } elseif ($row['test_name'] == "listen_to_familiar_sounds") {
                                    echo "<td>Does the child listen carefully to familiar sounds heard every day?</td>";
                                } elseif ($row['test_name'] == "look_for_sounds") {
                                    echo "<td>Looking for sounds from a place where the child can't see?</td>";
                                } elseif ($row['test_name'] == "like_loud_tone") {
                                    echo "<td>Does the baby like to be spoken to in a loud tone?</td>";
                                }elseif ($row['test_name'] == "pick_up_objects") {
                                    echo "<td>Is the child able to pick up small objects with the thumb and little toe?</td>";
                                }elseif ($row['test_name'] == "respond_to_name") {
                                    echo "<td>Does the child respond to his name and other familiar sounds?</td>";
                                }elseif ($row['test_name'] == "respond_to_words") {
                                    echo "<td>Does the child respond to words such as 'no', 'Tata' even if she/he did not do the corresponding action?</td>";
                                }
                                echo "<td class='" . ($row["response"] == "yes" ? "light-purple" : "light-red") . "'>" . $row["response"]. "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        ?>
                        </div>


  </body>
</html>

<?php } else {
   header("Location: ../../mainLogin.php");
    exit();
}
?>
