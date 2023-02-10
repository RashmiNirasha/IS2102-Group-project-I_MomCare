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
                                    <td>2022/2/4</td>
                                </tr>
                                <tr>
                                    <td>POA</td>
                                    <td>test</td>
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
                                            <td>Normal</td>
                                        </tr>
                                        <tr>
                                            <td>Normal</td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td>Pallor</td>
                                    <td>test</td>
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
                                            <td>Normal</td>
                                        </tr>
                                        <tr>
                                            <td>Normal</td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td>BP</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td>Fundal height(cm)</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Foetal lie</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Presentation</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td>Engagement of the presenting parent</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td>FM</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>FHS</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Folate</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Calcium</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Vitamin C</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Food supplementation</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Signature of the officer examined</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>Designation</td>
                                    <td>test</td>
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
                                    <tr>
                                        <td>T1</td>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                    <tr>
                                        <td>T2</td>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                    <tr>
                                        <td>T3</td>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
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
                                        <td>2022/02/15</td>
                                    </tr>
                                    <tr>
                                        <td>Date of examination</td>
                                        <td>2022/02/15</td>
                                    </tr>
                                    <tr>
                                        <td>Treatment</td>
                                        <td>No treatment needed</td>
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
                                        <tr><td>No issue</td></tr>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <div class="MotherCardTableTitles">
                                    <h3>Breast examination</h3>
                                </div>
                                <div class="BreastExamination">
                                    <table class="MotherCardTables">
                                        <tr><td>No issue</td></tr>
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
                                        <td>test</td>
                                        <td>normal</td>
                                    </tr>
                                    <tr>
                                        <td>Hemoglobin</td>
                                        <td>test</td>
                                        <td>normal</td>
                                    </tr>
                                    <tr>
                                        <td>Other Investigation</td>
                                        <td colspan="2">test</td>
                                    </tr>
                                    <tr>
                                        <td>Antihelminthic drugs</td>
                                        <td colspan="2">test</td>
                                    </tr>
                                    <tr>
                                        <td>Date of issuing lick count chart</td>
                                        <td colspan="2">test</td>
                                    </tr>
                                    <tr>
                                        <td>Date of taking blood sample for HIV</td>
                                        <td colspan="2">2022/2/5</td>
                                    </tr>
                                    <tr>
                                        <td>Date of result informed to mother</td>
                                        <td colspan="2">2022/2/20</td>
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
                                            <td>test</td>
                                        </tr>
                                        <tr>
                                            <td>Date of blood sampling</td>
                                            <td>test</td>
                                        </tr>
                                        <tr>
                                            <td>Date of result received</td>
                                            <td>test</td>
                                        </tr>
                                        <tr>
                                            <td>Result</td>
                                            <td>R</td>
                                        </tr>
                                        <tr>
                                            <td>If (R) date of referral</td>
                                            <td>test</td>
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
                                            <td>Dose</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                        </tr>
                                        <tr>
                                            <td>Batch no.</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                            <td>2022/02/03</td>
                                        </tr>
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
        <a href="#"><button class="PrintBtn">Print</button></a>
        <a href="motherCardPage1.php"><button class="BackBtn">Back</button></a>
        <a href="motherCardPage3.php"><button class="NextBtn">Next</button></a>
        </div>
    </div>
</body>
</html>
<?php include "../../Assets/Includes/footer_pages.php"; ?>