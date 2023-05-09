<?php 
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION['id'])) { 
    include "../../Assets/Includes/header_pages.php";
    include "../../Config/child-fullCardModel.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="MotherCardMainDiv">
    <?php 
    if($_SESSION['user_role'] == "ped"){
?>
    <div class="top-button" >
        <a href="../pediatrician/ped-dashboardView.php"><button class="goBackBtn">Go back</button></a>
    </div>
<?php
    } 
    else if($_SESSION['user_role'] == "mother"){
?>
    <div class="top-button" >
    <a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="goBackBtn">Go back</button></a>
    </div>
<?php
    } 
?>
        <div class="SectionNameDiv">
            <h3>Section A</h3>
        </div>
        <div class="MotherCardOuterDiv">
            <div class="MotherCardMiddleDiv">
                <div class="MotherCardInnerDiv">
                    <div class="Section1">
                        <div class="MotherBasicDetails">
                            <div class="MotherBasicDetails-Pic"><img src="..\..\Assets\images\common\baby.png" alt="mother_Profile_Pic"></div>
                            <div class="MotherBasicDetails-Text">
                                <table>
                                    <div class="MotherStatus"><b>Blue</b></div>
                                    <tr>
                                        <td class="tableTitle"><b>Child Name:</b></td>
                                        <td colspan="5"><?php echo $child_name ?></td>
                                        <td class="tableTitle"><b>Birth Date:</b></td>
                                        <td><?php echo $birth_date?></td>
                                    </tr>
                                <table>
                                    <tr>
                                        <td class="tableTitle"><b>Allergies:</b></td>
                                        <td colspan="5"><?php echo $allergies?></td>
                                        <td class="tableTitle"><b>Blood group:</b></td>
                                        <td><?php echo $blood_group?></td>
                                    </tr>

                                </table>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3>General Details</h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Name of the Mother:</th>
                                    <td><?php echo $mother_name?></td>
                                </tr>
                                <tr>
                                    <th>Age:</th>
                                    <td><?php echo $age ?></td>
                                </tr>
                                <tr>
                                    <th>MOH area:</th>
                                    <td> <?php echo $MOH_area ?></td>
                                </tr>
                                <tr>
                                    <th>PHM area:</th>
                                    <td><?php echo $PHM_area ?></td>
                                </tr>
                                <tr>
                                    <th>Name of the Field Clinic:</th>
                                    <td><?php echo $field_clinic ?></td>
                                </tr>
                                <tr>
                                    <th>Grama Niladhari Division:</th>
                                    <td><?php echo $GN_division ?></td>
                                </tr>
                                <tr>
                                    <th>Name of the Hospital Clinic:</th>
                                    <td><?php echo $hospital_clinic ?></td>
                                </tr>
                                <tr>
                                    <th>Name of the Consultant Obstetrician:</th>
                                    <td><?php echo $consultant_obstetrician ?></td>
                                </tr>
                                <tr>
                                    <th>Identified anatal risks conditions and mobilities:</th>
                                    <td><?php echo $identified_antatal_risks ?></td>
                                </tr>
                                <tr>
                                    <th>Registration Number:</th>
                                    <td><?php echo $registration_number ?></td>
                                </tr>
                                <tr>
                                    <th>Registration Date:</th>
                                    <td><?php echo $registration_date ?></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>

                    <div class="TwoColumnSection"> <!--when a section have two tables, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Vitamin A </h3>
                            </div>
                            <div class="PersonalInformation">
                                    <?php
                                     include "../../Config/dbConnection.php";
                                     $sql = "SELECT * FROM child_cvitamin_view WHERE child_id = '$child_id'";
                                     $result = mysqli_query($con, $sql);
                                     if (mysqli_num_rows($result) > 0) {
                                        echo '<table class="MotherCardTables">';
                                        echo '<tr>
                                           <th>Age</th>
                                           <th>Date</th>
                                           <th>Batch No</th>
                                         </tr>';
                                   while($row = mysqli_fetch_assoc($result)) {
                                       echo "<tr>
                                               <th>".$row["age"]."</th>
                                               <td>".$row["date"]."</td>
                                               <td>".$row["batch_no"]."</td>
                                             </tr>";
                                   }
                                   echo "</table>";
                               } else {
                                   echo "0 results";
                               }
                                ?>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Worm Treatment</h3>
                            </div>
                            <div class="PersonalInformation">
                            <?php 
                                $sql = "SELECT * FROM child_cworm_treatment WHERE child_id = '$child_id'";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    echo '<table class="MotherCardTables">';
                                    echo '<tr>
                                            <th>Age</th>
                                            <th>Date</th>
                                            <th>Batch No</th>
                                          </tr>';
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                                <th>".$row["age"]."</th>
                                                <td>".$row["date"]."</td>
                                                <td>".$row["batchno"]."</td>
                                              </tr>";
                                    }
                                    echo "</table>";
                                } else {
                                    echo "0 results";
                                }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3>Eyesight Test</h3></div>
                        <div class="MotherGeneralDetails">
                        <?php
    $child_id = $_GET['child_id'];
    $sql = "SELECT * FROM child_ceyesight_test WHERE child_id = '$child_id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<table class="MotherCardTables">';
        echo '<tr>
               <th>Age</th>
               <th>Test</th>
               <th>Response</th>
             </tr>';
        while($row = mysqli_fetch_assoc($result)) {
            $test = $row["test_name"];
            echo "<tr>";
            echo "<th>" . $row["age_range"] . "</th>";
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
                    </div>

                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3>Hearing Test</h3></div>
                        <div class="MotherGeneralDetails">
                        <?php
                        $sql = "SELECT * FROM child_chearting_test WHERE child_id = '$child_id'";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="MotherCardTables">';
                            echo '<tr>
                                   <th>Age</th>
                                   <th>Test</th>
                                   <th>Response</th>
                                 </tr>';
                            while($row = mysqli_fetch_assoc($result)) {
                                $test = $row["test_name"];
                                echo "<tr>";
                                echo "<th>" . $row["age_range"] . "</th>";
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
                    </div>

                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles">
                            <h3>Dental Report</h3>
                        </div>
                        <div class="PregnancyHistory">
                             <table class="MotherCardTables">
    <?php
        // Get the dental report data for the specified child
        $sql = "SELECT * FROM child_dental_report WHERE child_id = '$child_id'";
        $result = mysqli_query($con, $sql); 
    
        // Display the dental report data for the specified child
        if (mysqli_num_rows($result) > 0) {
            echo "<tr><th>Age (months)</th><th>Number of erupted teeth</th><th>Status : healthy/unhealthy</th><th>Date : </th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row["age"]."</td>
                        <td>".$row["no_of_teeth"]."</td>
                        <td>".$row["status"]."</td>
                        <td>".$row["date"]."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No dental report data found.</td></tr>";
        }?>

    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="MotherCardButtonSet">
        <a href="childCard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="PrintBtn">Print</button></a>
        <a href="motherCardPage2.php"><button class="NextBtn">Next</button></a>
        </div>
    </div>
</body>
</html>
<?php } else {
    header("Location: ../../mainLogin.php");
    exit();}
?>



