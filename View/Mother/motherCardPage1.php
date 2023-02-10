<?php 
    include "../../Config/mother-mcardPage1.inc.php";
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
    <?php 
    include('mother-header.php');
    ?>
    <div class="MotherCardMainDiv">
        <div class="SectionNameDiv">
            <h3>Section A</h3>
            <!-- <?php echo $_SESSION['mom_id']; ?> -->
            <!-- <h4>1</h4> -->
        </div>
        <div class="MotherCardOuterDiv">
            <div class="MotherCardMiddleDiv">
                <div class="MotherCardInnerDiv">
                    <div class="Section1">
                        <div class="MotherBasicDetails">
                            <div class="MotherBasicDetails-Pic"><img src="..\..\Assets\images\mother\mother_Profile_Pic.png" alt="mother_Profile_Pic"></div>
                            <div class="MotherBasicDetails-Text">
                                <table>
                                    <div class="MotherStatus"><b>Blue</b></div>
                                    <tr>
                                        <td class="tableTitle"><b>Blood group:</b></td>
                                        <td><?php echo $mom_blood_group ?></td>
                                        <td class="tableTitle"><b>BMI:</b></td>
                                        <td><?php echo $mom_bmi ?></td>
                                        <td class="tableTitle"><b>Height(cm):</b></td>
                                        <td><?php echo $mom_height ?></td>
                                    </tr>
                                <table>
                                    <tr>
                                        <td class="tableTitle"><b>Allergies:</b></td>
                                        <td colspan="5"><?php echo $allergies ?></td>
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
                                    <td><?php echo $mom_fullname ?></td>
                                </tr>
                                <tr>
                                    <th>Age:</th>
                                    <td><?php echo $mom_age ?></td>
                                </tr>
                                <tr>
                                    <th>MOH area:</th>
                                    <td><?php echo $moh_area ?></td>
                                </tr>
                                <tr>
                                    <th>PHM area:</th>
                                    <td><?php echo $phm_area ?></td>
                                </tr>
                                <tr>
                                    <th>Name of the Field Clinic:</th>
                                    <td><?php echo $clinic_name ?></td>
                                </tr>
                                <tr>
                                    <th>Grama Niladhari Division:</th>
                                    <td><?php echo $gn_division ?></td>
                                </tr>
                                <tr>
                                    <th>Name of the Hospital Clinic:</th>
                                    <td><?php echo $hospital_name ?></td>
                                </tr>
                                <tr>
                                    <th>Name of the Consultant Obstetrician:</th>
                                    <td><?php echo $vog_name ?></td>
                                </tr>
                                <tr>
                                    <th>Identified anatal risks conditions and mobilities:</th>
                                    <td><?php echo $anatal_risks ?></td>
                                </tr>
                                <tr>
                                    <th>Registration Number:</th>
                                    <td><?php echo $reg_number ?></td>
                                </tr>
                                <tr>
                                    <th>Registration Date:</th>
                                    <td><?php echo $reg_date ?></td>
                                </tr>
                                <tr>
                                    <th>Eligible Family Register:</th>
                                    <td><?php echo $family_reg ?></td>
                                </tr>
                                <tr>
                                    <th>Pregnant Mother's Register:</th>
                                    <td><?php echo $mother_reg ?></td>
                                </tr>
                                <tr>
                                    <th>Identified antenatal risk conditions & morbidities:</th>
                                    <td><?php echo $antenatal_risks ?></td>
                                </tr>
                                <tr>
                                    <th>Consanguinity:</th>
                                    <td><?php echo $cb1 ?></td>
                                </tr>
                                <tr>
                                    <th>Rubella immunization:</th>
                                    <td><?php echo $cb2 ?></td>
                                </tr>
                                <tr>
                                    <th>Pre-pregnancy screening done:</th>
                                    <td><?php echo $cb3 ?></td>
                                </tr>
                                <tr>
                                    <th>Preconceptional folic acid:</th>
                                    <td><?php echo $cb4 ?></td>
                                </tr>
                                <tr>
                                    <th>History of subfertility:</th>
                                    <td><?php echo $cb5 ?></td>
                                </tr>
                                <tr>
                                    <th>Planned pregnancy or not:</th>
                                    <td><?php echo $cb6 ?></td>
                                </tr>
                                <tr>
                                    <th>Family planning method last used:</th>
                                    <td><?php echo $cb7 ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="TwoColumnSection"> <!--when a section have two tables, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Personal Information</h3>
                            </div>
                            <div class="PersonalInformation">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td class="emptyTableCell"></td>
                                        <td>Wife</td>
                                        <td>Husband</td>
                                    </tr>
                                    <tr>
                                        <td>Age:</td>
                                        <td><?php echo $mom_age ?></td>
                                        <td><?php echo $dad_age ?></td>
                                    </tr>
                                    <tr>
                                        <td>Highest level of education:</td>
                                        <td><?php echo $mom_edu ?></td>
                                        <td><?php echo $dad_edu ?></td>
                                    </tr>
                                    <tr>
                                        <td>Occupation</td>
                                        <td><?php echo $mom_occupation ?></td>
                                        <td><?php echo $dad_occupation ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Family History</h3>
                            </div>
                            <div class="PersonalInformation">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Diabetes mellitus:</td>
                                        <td><?php echo $diabetes1 ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hypertension:</td>
                                        <td><?php echo $hypertension ?></td>
                                    </tr>
                                    <tr>
                                        <td>Haematological diseases:</td>
                                        <td><?php echo $h_diseases ?></td>
                                    </tr>
                                    <tr>
                                        <td>Twin / multiple pregnancies:</td>
                                        <td><?php echo $m_pregnancies ?></td>
                                    </tr>
                                    <tr>
                                        <td>Any other (specify):</td>
                                        <td><?php echo $fhistory_others ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection">
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Medical / Surgical History</h3>
                            </div>
                            <div class="MedicalHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Diabetes:</td>
                                        <td><?php echo $diabetes2 ?></td>
                                        <td>Haematologies:</td>
                                        <td><?php echo $haematologies?></td>
                                    </tr>
                                    <tr>
                                        <td>Hypertension:</td>
                                        <td><?php echo $hypertension2 ?></td>
                                        <td>Thyroid diseases:</td>
                                        <td><?php echo $thyroid_d ?></td>
                                    </tr>
                                    <tr>
                                        <td>Cardiac diseases:</td>
                                        <td><?php echo $cardiac_d ?></td>
                                        <td>Bronchial asthma:</td>
                                        <td><?php echo $bronchial_d ?></td>
                                    </tr>
                                    <tr>
                                        <td>Renal diseases:</td>
                                        <td><?php echo $renal_d ?></td>
                                        <td>Tuberculosis:</td>
                                        <td><?php echo $tuberculosis ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hepatic diseases:</td>
                                        <td><?php echo $hepatic_d ?></td>
                                        <td>Previous DVT:</td>
                                        <td><?php echo $previous_DVT ?></td>
                                    </tr>
                                    <tr>
                                        <td>Psychiatric illnesses:</td>
                                        <td><?php echo $psychiatric_d ?></td>
                                        <td>Surgeries other than LSCS:</td>
                                        <td><?php echo $surgeries_other ?></td>
                                    </tr>
                                    <tr>
                                        <td>Epilepsy:</td>
                                        <td><?php echo $epilepsy ?></td>
                                        <td>Other (specify):</td>
                                        <td><?php echo $mhistory_other ?></td>
                                    </tr>
                                    <tr>
                                        <td>Malignancies:</td>
                                        <td><?php echo $malignancies ?></td>
                                        <td>Social Z score:</td>
                                        <td><?php echo $social_zscore ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Present Obsteric History</h3>
                            </div>
                            <div class="ObstericHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Gravidity G:</td>
                                        <td><?php echo $gravidity_G ?></td>
                                    </tr>
                                    <tr>
                                        <td>Age of the youngest child::</td>
                                        <td><?php echo $youngest_child_age ?></td>
                                    </tr>
                                    <tr>
                                        <td>LRMP:</td>
                                        <td><?php echo $LRMP ?></td>
                                    </tr>
                                    <tr>
                                        <td>EED:</td>
                                        <td><?php echo $EED ?></td>
                                    </tr>
                                    <tr>
                                        <td>US corrected EED (To be filled by VOG/MO):</td>
                                        <td><?php echo $us_eed ?></td>
                                    </tr>
                                    <tr>
                                        <td>POA at dating scan: :</td>
                                        <td><?php echo $poa_at_dating ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of quickening:</td>
                                        <td><?php echo $date_quickning ?></td>
                                    </tr>
                                    <tr>
                                        <td>POA at registration: :</td>
                                        <td><?php echo $poa_at_reg ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles">
                            <h3>Pregnancy History</h3>
                        </div>
                        <div class="PregnancyHistory">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Pregnancy</th>
                                    <th>Antenatal complications</th>
                                    <th>Place & mode of delivery</th>
                                    <th>Outcome</th>
                                    <th>Birth weight</th>
                                    <th>Postal complications(specify)</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                </tr>
                                <?php
                                    $sql = "SELECT * FROM mcard_preghistory WHERE mom_id = '$mom_id'";
                                    $result = $con->query($sql);
                                    if($result->num_rows > 0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            $pregnancy_type = $row['pregnancy_type'];
                                            $antenatal = $row['antenatal'];
                                            $place = $row['place'];
                                            $outcome = $row['outcome'];
                                            $weight = $row['weight'];
                                            $postal_complications = $row['postal_complications'];
                                            $sex = $row['sex'];
                                            $age = $row['age'];

                                            $output = "<tr>
                                                        <td>$pregnancy_type</td>
                                                        <td>$antenatal</td>
                                                        <td>$place</td>
                                                        <td>$outcome</td>
                                                        <td>$weight</td>
                                                        <td>$postal_complications</td>
                                                        <td>$sex</td>
                                                        <td>$age</td>
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
            </div>
        </div>
        <div class="MotherCardButtonSet">
        <a href="#"><button class="PrintBtn">Print</button></a>
        <a href="motherCardPage2.php"><button class="NextBtn">Next</button></a>
        </div>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>




