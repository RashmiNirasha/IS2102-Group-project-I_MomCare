<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
// include '../../Config/dbConnection.php';
include "../../Assets/Includes/sidenavphm.php";

// if (isset($_POST['submit'])) {
//   insertChildInfo($_POST);
// }

// function insertChildInfo($data)
// {
//   global $con;
//   $child_id = $data['child_id'];
//   $child_name = $data['child_name'];
//   $child_gender = $data['child_gender'];
//   $phm_id = $data['phm_id'];
//   $doc_id = $data['doc_id'];
//   $guardian_id = $data['guardian_id'];
//   $mom_email = $data['mom_email'];
//   $mom_id = $data['mom_id'];
//   $date_of_birth = $data['date_of_birth'];

//   $sql = "INSERT INTO child_details (child_id, child_name, child_gender, phm_id, doc_id, guardian_id, mom_email, mom_id, date_of_birth) 
//           VALUES ('$child_id','$child_name','$child_gender', '$phm_id', '$doc_id', '$guardian_id', '$mom_email', '$mom_id', '$date_of_birth')";

//   if (mysqli_query($con, $sql)) {
//     header("Location: child-cardMenuView.php?success=1");
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($con);
//   }
// }
?>
<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>

<div class="acc-container">
  <h2>Eyesight & Hearing Test</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="acc-title"><h3>Eyesight Test</h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST">
      <table class="acc-table">
        <tr>
          <th>Child ID</th> <td><div class="acc-input"><input type="text" id="child_id" name="child_id" required></div></td> </tr>
          <tr><th>Age</th> <td><div class="acc-input"><select required>
                                                          <option value="age1">1st month after birth</option>
                                                          <option value="age2">2nd month after birth</option>
                                                          <option value="age3">6th month after birth</option>
                                                          <option value="age4">10th month after birth</option>
                                                          <option value="age5">12th month after birth</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></div></td></tr>
          <tr> <th>Test</th><td><div class="acc-input"><select required>
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
                                                      </select></div></td></tr>
          <tr> <th>Response</th><td><div class="acc-input"><select required>
                                                          <option value="response1">yes</option>
                                                          <option value="response2">no</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></div></td></tr>
          <tr><th>Actions</th><td><button class = "acc-btn" type="submit" name="submit" value="Submit">Submit</button></td></tr>
        </tr>
        </table>
        </form>
                        </div>
                    </div>

                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="acc-title"><h3>Hearing Test</h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST">
      <table class="acc-table">
        <tr>
          <th>Child ID</th> <td><div class="acc-input"><input type="text" id="child_id" name="child_id" required></div></td> </tr>
          <tr><th>Age</th> <td><div class="acc-input"><select required>
                                                          <option value="age6">Shortly after birth</option>
                                                          <option value="age7">1st month after birth</option>
                                                          <option value="age8">From month 4</option>
                                                          <option value="age9">From month 7</option>
                                                          <option value="age10">By the 9th month</option>
                                                          <option value="age11">By the 12th month</option>
                                                          <option value="age12">12th month after birth</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></div></td></tr>
          <tr> <th>Test</th><td><div class="acc-input"><select required>
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
                                                      </select></div></td></tr>
          <tr> <th>Respose</th><td><div class="acc-input"><select required>
                                                          <option value="response1">yes</option>
                                                          <option value="response2">no</option>
                                                          <option value="" selected>Choose an option to proceed</option>
                                                      </select></div></td></tr>
          <tr><th>Actions</th><td><button class = "acc-btn" type="submit" name="submit" value="Submit">Submit</button></td></tr>
        </tr>
        </table>
        </form>
                        </div>
  </body>
</html>


