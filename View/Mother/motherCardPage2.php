<?php 
   session_start();
    include '../../Config/dbConnection.php';
   if (isset($_SESSION['email']))
   {
?>
<?php 
    include "../../Assets/Includes/header_pages.php"; 
    include "../../Config/mother-mcardPage2.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Card</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="MotherCardMainDiv">
        <div class="SectionNameDiv">
            <h3>Section A</h3>
        </div>
        <div class="MotherCardOuterDiv">
            <div class="MotherCardMiddleDiv">
                <div class="MotherCardInnerDiv">
                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3>Clinic Care</h3></div>
                        <div class="ClinicDetailsDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <td>Date of Visit</td>
                                    <td><?php echo $mom_clinicdate ?></td>
                                </tr>
                                <tr>
                                    <td>POA</td>
                                    <td><?php echo $mom_poa ?></td>
                                </tr>
                                <tr>
                                    <td>Urine
                                        <table class="innerTable">
                                            <tr>
                                                <td>Sugar</td>
                                            </tr>
                                            <tr>
                                                <td>Albumin</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>Status<table class="innerTable">
                                        <tr>
                                            <td><?php echo $mom_urine_sugar ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $mom_urine_albumin ?></td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td>Pallor</td>
                                    <td><?php echo $mom_pallor ?></td>
                                </tr>
                                <tr>
                                    <td>Oedema<table class="innerTable">
                                        <tr>
                                            <td>Sugar</td>
                                        </tr>
                                        <tr>
                                            <td>Albumin</td>
                                        </tr>
                                    </table></td>
                                    <td>Status<table class="innerTable">
                                        <tr>
                                            <td><?php echo $mom_oedema_sugar ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $mom_oedema_albumin ?></td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td>BP</td>
                                    <td><?php echo $mom_bp ?></td>
                                </tr>
                                <tr>
                                    <td>Fundal height(cm)</td>
                                    <td><?php echo $mom_fh ?></td>
                                </tr>
                                <tr>
                                    <td>Foetal lie</td>
                                    <td><?php echo $mom_fl ?></td>
                                </tr>
                                <tr>
                                    <td>Presentation</td>
                                    <td><?php echo $mom_presentation ?></td>
                                </tr>
                                <tr>
                                    <td>Engagement of the presenting parent</td>
                                    <td><?php echo $mom_engagement ?></td>
                                </tr>
                                <tr>
                                    <td>FM</td>
                                    <td><?php echo $mom_fm ?></td>
                                </tr>
                                <tr>
                                    <td>FHS</td>
                                    <td><?php echo $mom_fhs ?></td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td><?php echo $mom_iron ?></td>
                                </tr>
                                <tr>
                                    <td>Folate</td>
                                    <td><?php echo $mom_folate ?></td>
                                </tr>
                                <tr>
                                    <td>Calcium</td>
                                    <td><?php echo $mom_calcium ?></td>
                                </tr>
                                <tr>
                                    <td>Vitamin C</td>
                                    <td><?php echo $mom_vitamin ?></td>
                                </tr>
                                <tr>
                                    <td>Food supplementation</td>
                                    <td><?php echo $mom_food_suppliment ?></td>
                                </tr>
                                <tr>
                                    <td>Signature of the officer examined</td>
                                    <td><?php echo $siganture ?></td>
                                </tr>
                                <tr>
                                    <td>Designation</td>
                                    <td><?php echo $designation ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="ThreeColumnSection">
                        <div class="ThreeColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Auscultation & Mental Health</h3>
                            </div>
                            <div class="Auscultation&MentalHealth">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td class="emptyTableCell"></td>
                                        <td>Auscultation</td>
                                        <td>Mental health</td>
                                    </tr>
                                        <?php 
                                            $sql = "SELECT * FROM mcard_auscultation WHERE mom_id = '$mom_id'";
                                            $result = $con->query($sql);
                                            if($result->num_rows > 0){
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $test_id = $row['id'];
                                                    $mom_auscultation = $row['auscultation'];
                                                    $mom_mental_health = $row['mental_health'];
                                                    $output = "<tr>
                                                                <td>$test_id</td>
                                                                <td>$mom_auscultation</td>
                                                                <td>$mom_mental_health</td>
                                                            </tr>";
                                                    echo $output;
                                                }
                                            }
                                        ?>
                                </table>
                            </div>
                        </div>
                        <div class="ThreeColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Dental Care</h3>
                            </div>
                            <div class="DentalCare">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Referred date</td>
                                        <td><?php echo $mom_refdate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of examination</td>
                                        <td><?php echo $mom_examdate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Treatment</td>
                                        <td><?php echo $mom_treatment ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="ThreeColumnSec3">
                            <div>
                                <div class="MotherCardTableTitles">
                                    <h3>Respiratory System</h3>
                                </div>
                                <div class="RespiratorySystem">
                                    <table class="MotherCardTables">
                                        <tr><td><?php echo $mom_respiratory ?>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <div class="MotherCardTableTitles">
                                    <h3>Breast examination</h3>
                                </div>
                                <div class="BreastExamination">
                                    <table class="MotherCardTables">
                                        <tr><td><?php echo $mom_breast ?></td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection">
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Investigations</h3>
                            </div>
                            <div class="Investigations">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td></td>
                                        <td>POA</td>
                                        <td>Result</td>
                                    </tr>
                                    <tr>
                                        <td>Blood Sugar</td>
                                        <td><?php echo $mom_blood_sugar ?></td>
                                        <td><?php echo $mom_blood_sugarr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hemoglobin</td>
                                        <td><?php echo $mom_blood_hb ?></td>
                                        <td><?php echo $mom_blood_hbr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Other Investigation</td>
                                        <td colspan="2"><?php echo $mom_other ?></td>
                                    </tr>
                                    <tr>
                                        <td>Antihelminthic drugs</td>
                                        <td colspan="2"><?php echo $mom_adrugs ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of issuing lick count chart</td>
                                        <td colspan="2"><?php echo $mom_dateissued ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of taking blood sample for HIV</td>
                                        <td colspan="2"><?php echo $mom_datehiv ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of result informed to mother</td>
                                        <td colspan="2"><?php echo $mom_dateresults ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div>
                                <div class="MotherCardTableTitles">
                                    <h3>Syphilis screeningtem</h3>
                                </div>
                                <div class="SyphilisScreening">
                                    <table class="MotherCardTables">
                                        <tr>
                                            <td>POA at blood sampling</td>
                                            <td><?php echo $mom_POA_sample ?></td>
                                        </tr>
                                        <tr>
                                            <td>Date of blood sampling</td>
                                            <td><?php echo $mom_datesample ?></td>
                                        </tr>
                                        <tr>
                                            <td>Date of result received</td>
                                            <td><?php echo $mom_date_result ?></td>
                                        </tr>
                                        <tr>
                                            <td>Result</td>
                                            <td><?php echo $mom_result ?></td>
                                        </tr>
                                        <tr>
                                            <td>If (R) date of referral</td>
                                            <td><?php echo $mom_ref ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="OneColumnSection">
                    <div>
                                <div class="MotherCardTableTitles">
                                    <h3>Tetanus Toxoid Immunization</h3>
                                </div>
                                <div class="TetanusToxoidImmunization">
                                    <table class="MotherCardTables">
                                        <tr>
                                            <th>Dose</th>
                                            <th>Date</th>
                                            <th>Batch No</th>
                                        </tr>
                                        <?php 
                                            $sql = "SELECT * FROM mcard_tetanus WHERE mom_id = '$mom_id'";
                                            $result = $con->query($sql);
                                            if($result->num_rows > 0)
                                            {
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $mom_tetanus_dose = $row['dose'];
                                                    $mom_tetanus_date = $row['date'];
                                                    $mom_tetanus_batch = $row['batch_no'];

                                                    $output = "
                                                    <tr>
                                                        <td>$mom_tetanus_dose</td>
                                                        <td>$mom_tetanus_date</td>
                                                        <td>$mom_tetanus_batch</td>
                                                    </tr>";
                                                    echo $output;
                                                }
                                            }
                                            else{
                                                echo "0 results";
                                            }
                                            
                                        ?>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="OneColumnSection">
                        <div class="BP_Chart">
                            <div class="MotherCardTableTitles">
                                <h3>BP Chart</h3>
                            </div>
                            <div class="BP_Chart_Image">
                                <img src="../Images/Chart.png" alt="BP Chart">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="MotherCardButtonSet">
        <a href="mothercard.php?mom_id=<?php echo $_SESSION['user_id']; ?>"><button class="PrintBtn">Print</button></a>
        <a href="motherCardPage1.php"><button class="BackBtn">Back</button></a>
        <a href="motherCardPage3.php"><button class="NextBtn">Next</button></a>
        </div>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>