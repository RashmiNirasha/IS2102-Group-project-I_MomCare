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
                            <table class="MotherCardTables">
                                <tr>
                                    <th>1st month after birth</th>
                                    <td>Does the baby direct its eyes towards the light?</td>
                                    <td class="yes" >yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Does the baby look at the mother's face well?</td>
                                    <td class="yes">yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>2nd month after birth</th>
                                    <td>when the mother/caregiver moves his/her face sideways's,does the baby smile responsively?</td>
                                    <td class="yes">yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Does the baby's eye's move along?</td>
                                    <td class="yes">yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>6th month after birth</th>
                                    <td>Does the child look around curiously?</td>
                                    <td class="yes">yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Does the child reach out and try to grab something?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Do you suspect that the child has a mole?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>10th month after birth</th>
                                    <td>Is the child able to pick up small objects with the thumb and little toe?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>12th month after birth</th>
                                    <td>Does the child reach out to various things and ask for them?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>When seen by an acquaintance, does the child recognize them before they speak to the child?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                            </table>

                            <!-- <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" /> -->
                        </div>
                        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Hearing Test  </h3></div>
                        <div class="MotherGeneralDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Shortly after birth</th>
                                    <td>Does the child startle and blink when he hears a sudden loud noise (such as clapping, a door slamming shut)? Or do you widen your eyes?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>1st month after birth</th>
                                    <td>Does the child begin to recognize sudden, persistent sounds (such as the sound of a truck loading) and respond quietly to them?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>From month 4 </th>
                                    <td>Even when the mother or caregiver is not in sight, is the baby silent when they hear their sound? Or smile a little?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Does the baby turn her/his head or eyes when mother/caregiver speaks from the side or behind?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>From month 7</th>
                                    <td>Does the child immediately turn to the mother/caregiver when spoken to?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>By the 9th month</th>
                                    <td>Does the child listen carefully to familiar sounds heard every day?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Looking for sounds from a place where the child can't see?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Does the baby like to be spoken to in a loud tone?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>By the 12th month</th>
                                    <td>Is the child able to pick up small objects with the thumb and little toe?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th>12th month after birth</th>
                                    <td>Does the child respond to his name and other familiar sounds?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>Does the child respond to words such as "no", "Tata" even if she/he did not do the corresponding action?</td>
                                    <td>yes</td>
                                    <td>no</td>
                                </tr>
                            </table>
                            </div>
  </body>
</html>


