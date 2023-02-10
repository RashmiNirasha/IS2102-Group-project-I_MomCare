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
                    <div class="TwoColumnSection"> <!--when a section have two tables, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Weight Gain Chart</h3>
                            </div>
                            <div class="WeightGainChar">
                                <!-- add chart code here -->
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>SFH Chart</h3>
                            </div>
                            <div class="SFHchart">
                                <!-- add chart code here -->
                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection">
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Birth and emergency preparedness plan</h3>
                            </div>
                            <div class="MedicalHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td class="emptyTableCell"></td>
                                        <td>Delivery</td>
                                        <td>In an emergency</td>
                                    </tr>
                                    <tr>
                                        <td>Intended hospital</td>
                                        <td>txt</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <td>Mode of transport</td>
                                        <td>txt</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <td>Mode of transport</td>
                                        <td>txt</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <td>Distance from home(km)</td>
                                        <td>5</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Time taken to reach</td>
                                        <td>15</td>
                                        <td>10</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Attendance at antenatal classes</h3>
                            </div>
                            <div class="AttendanceAtAntenatalClasses">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Session</td>
                                        <td>Date</td>
                                        <td>Husband</td>
                                        <td>Wife</td>
                                        <td>Other</td>
                                        <td>Signature</td>
                                    </tr>
                                    <tr>
                                        <td>T1</td>
                                        <td>2022/5/6</td>
                                        <td>came</td>
                                        <td>came</td>
                                        <td>not came</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <td>T2</td>
                                        <td>2022/5/6</td>
                                        <td>came</td>
                                        <td>came</td>
                                        <td>not came</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <td>T3</td>
                                        <td>2022/5/6</td>
                                        <td>came</td>
                                        <td>came</td>
                                        <td>not came</td>
                                        <td>txt</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>IEC Material</h3>
                            </div>
                            <div class="IEC_Material">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Prenatal ployband book</td>
                                        <td>Given</td>
                                    </tr>
                                    <tr>
                                        <td>The book on breastfeeding</td>
                                        <td>Given</td>
                                    </tr>
                                    <tr>
                                        <td>Books on early childhood development</td>
                                        <td>Given</td>
                                    </tr>
                                    <tr>
                                        <td>Family planning methods</td>
                                        <td>Given</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Family Planning</h3>
                            </div>
                            <div class="FamilyPlanning">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Date of counselling</td>
                                        <td>2022/05/06</td>
                                    </tr>
                                    <tr>
                                        <td>Chosen method</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <td>Reason for not using a method</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <td>Consent from sign date</td>
                                        <td>2022/05/06</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="OneColumnSection">
                        <div class="MotherCardTableTitles">
                            <h3>Referrals</h3>
                        </div>
                        <div class="Referrals">
                            <table class="MotherCardTables">
                                <tr>
                                    <td>txt</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="MotherCardButtonSet">
        <a href="#"><button class="PrintBtn">Print</button></a>
        <a href="motherCardPage2.php"><button class="BackBtn">Back</button></a>
        </div>
    </div>
</body>
</html>
<?php include "../../Assets/Includes/footer_pages.php"; ?>