<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";
include "../../Assets/Includes/sidenav.php";?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-child.css";?></style>
</Head>
<body>

<div class="child-container">
  <h2>Eyesight & Hearing Test</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Eyesight Test  </h3></div>
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
                            <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
                        </div>
                        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Hearing Test  </h3></div>
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
  </body>
</html>


