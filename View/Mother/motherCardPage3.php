<?php include "../../Assets/Includes/header_pages.php" ?>
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
        <div class="SectionNameDiv">
            <h3>Section A</h3>
        </div>
        <div class="MotherCardOuterDiv">
            <div class="MotherCardMiddleDiv">
                <div class="MotherCardInnerDiv">
                    <div class="TwoColumnSection"> <!--when a section have two tables, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="WeightGainChart_Title">
                                <h3>Weight Gain Chart</h3>
                            </div>
                            <div class="WeightGainChar">
                                <!-- add chart code here -->
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="SFHchart_Title">
                                <h3>SFH Chart</h3>
                            </div>
                            <div class="SFHchart">
                                <!-- add chart code here -->
                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection">
                        <div class="TwoColumnSec1">
                            <div class="EmergencyPreparednesPlan_Title">
                                <h3>Birth and emergency preparedness plan</h3>
                            </div>
                            <div class="MedicalHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <th class="emptyTableCell"></th>
                                        <th>Delivery</th>
                                        <th>In an emergency</th>
                                    </tr>
                                    <tr>
                                        <th>Intended hospital</th>
                                        <td>txt</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <th>Mode of transport</th>
                                        <td>txt</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <th>Mode of transport</th>
                                        <td>txt</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <th>Distance from home(km)</th>
                                        <td>5</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>Time taken to reach</th>
                                        <td>15</td>
                                        <td>10</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="AttendanceAtAntenatalClasses_Title">
                                <h3>Attendance at antenatal classes</h3>
                            </div>
                            <div class="AttendanceAtAntenatalClasses">
                                <table class="MotherCardTables">
                                    <tr>
                                        <th>Session</th>
                                        <th>Date</th>
                                        <th>Husband</th>
                                        <th>Wife</th>
                                        <th>Other</th>
                                        <th>Signature</th>
                                    </tr>
                                    <tr>
                                        <th>T1</th>
                                        <td>2022/5/6</td>
                                        <td>came</td>
                                        <td>came</td>
                                        <td>not came</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <th>T2</th>
                                        <td>2022/5/6</td>
                                        <td>came</td>
                                        <td>came</td>
                                        <td>not came</td>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <th>T3</th>
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
                            <div class="IEC_Material_Title">
                                <h3>IEC Material</h3>
                            </div>
                            <div class="IEC_Material">
                                <table class="MotherCardTables">
                                    <tr>
                                        <th>Prenatal ployband book</th>
                                        <td>Given</td>
                                    </tr>
                                    <tr>
                                        <th>The book on breastfeeding</th>
                                        <td>Given</td>
                                    </tr>
                                    <tr>
                                        <th>Books on early childhood development</th>
                                        <td>Given</td>
                                    </tr>
                                    <tr>
                                        <th>Family planning methods</th>
                                        <td>Given</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="FamilyPlanning_Title">
                                <h3>Family Planning</h3>
                            </div>
                            <div class="FamilyPlanning">
                                <table class="MotherCardTables">
                                    <tr>
                                        <th>Date of counselling</th>
                                        <td>2022/05/06</td>
                                    </tr>
                                    <tr>
                                        <th>Chosen method</th>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <th>Reason for not using a method</th>
                                        <td>txt</td>
                                    </tr>
                                    <tr>
                                        <th>Consent from sign date</th>
                                        <td>2022/05/06</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="OneColumnSection">
                        <div class="Referrals_Title">
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