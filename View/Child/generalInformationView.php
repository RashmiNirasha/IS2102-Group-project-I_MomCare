<?php 
include "../../Assets/Includes/header_pages.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/css/style-common.css"; ?></style>
</head>
<body>

    <div class="ChildCardMain">
        <!-- title section -->
        <div class="ChildCardMain-titleOuter">
            <div class="ChildCardMain-TitleInner">
                <h3>General Information</h3>
            </div>
        </div>
        <!-- form section 1 -->
        <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">
                    <h3>Neonatal Examination</h3>
                    <table class="ChildCardInputSec-1">
                        <tr>
                            <td>Date</td>
                            <td><input type="date" name="Neonatal_Examination" id="Neonatal_Examination"></td>
                            <td>Maturity of the Baby</td>
                            <td><input type="text"></td>
                            <td>Weeks</td>
                        </tr>
                        <tr>
                            <td>Baby's Growth</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Grama Niladhari Division</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Child's Date of Birth</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Registered Date</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Name of the Mother</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Total No. of Children</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- form section 2 -->
        <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">
                    <table class="ChildCardInputSec-2">
                        <tr>
                            <td>Hospital Name</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Delivery Method</td>
                            <td><input type="radio" name="Delivery_Method_Normal" id="">Normal</td>
                            <td colspan="3"><input type="radio" name="Delivery_Method_Vaccum" id="">Vaccum</td>
                            <td><input type="radio" name="Delivery_Method_Cesarean" id="">Cesarean</td>
                        </tr>
                        <tr>
                            <td>Birth Weight</td>
                            <td><input type="text"></td>
                            <td>Circumferences of the head</td>
                            <td colspan="4"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Vitamin K</td>
                            <td colspan="5"><input type="checkbox" name="VitaminK" id="VitaminK">Given</td>
                        </tr>
                        <tr>
                            <td>Breast Feeding</td>
                            <td>Started in the 1st hour?</td>
                            <td><input type="radio" name="Delivery_Method_Vaccum" id="">Yes</td>
                            <td colspan="3"><input type="radio" name="Delivery_Method_Cesarean" id="">No</td>

                        </tr>
                        <tr>
                            <td>TSH Test</td>
                            <td><input type="radio" name="Delivery_Method_Vaccum" id="">Done</td>
                            <td><input type="radio" name="Delivery_Method_Cesarean" id="">Not done</td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td>Test Results</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- form section 3 -->
        <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">
                    <h3>Reasons for Special Care</h3>
                    <table class="ChildCardInputSec-3">
                        <tr>
                            <td>Immature births</td>
                            <td><input type="checkbox" name="Immature_births" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Under weight Births</td>
                            <td colspan="6"><input type="checkbox" name="Under_weight_Births" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Disorders</td>
                            <td colspan="6"><input type="checkbox" name="Disorders" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Serious issues for mother after the birth</td>
                            <td colspan="6"><input type="checkbox" name="Serious_issues_for_mother_after_the_birth" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Giving Milk powder during 6 moths</td>
                            <td colspan="6"><input type="checkbox" name="Giving_Milk_powder_during_6_moths" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Impairment og Growth</td>
                            <td colspan="6"><input type="checkbox" name="Impairment_og_Growth" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Feeding Issues</td>
                            <td colspan="6"><input type="checkbox" name="Feeding_Issues" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Death of Mother/Farther</td>
                            <td colspan="6"><input type="checkbox" name="Death_of_Mother_Farther" id=""><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Migration of Mother/Father</td>
                            <td colspan="6"><input type="checkbox" name="Migration_of_Mother_Father" id=""><input type="text"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="ChildFormButtons">
            <a href=""><button class="SaveBtn">Save</button></a>
            <a href=""><button class="NextBtn">Next</button></a>
        </div>
    </div>
</body>
</html>

<?php include "../../Assets/Includes/footer_pages.php"; ?>