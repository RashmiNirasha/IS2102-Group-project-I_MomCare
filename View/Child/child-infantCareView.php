<?php include "../../Assets/Includes/header_pages.php";?>

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
                <h3>Infant Care</h3>
            </div>
        </div>
        <!-- form section 1 -->
        <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">
                    
                    <table class="ChildCardInputSec-1">
                       
                        <tr>
                            <td>MOH area</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>PHM area</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Name of the field Clinic</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Grama Niladhari Division</td>
                            <td colspan="6"><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Child’s Date of Birth</td>
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
            <a href="child-immunizationView.php"><button class="NextBtn">Next</button></a>
            <a href="child-childCardView.php"><button class="NextBtn">Back</button></a>
        </div>
    </div>
</body>
</html>

<?php // include "../../Assets/Includes/footer_pages.php"; ?>
<!-- <div class="child-buttons">
<div class="child-button1">
<a href="generalInformationView.php"><button class="NextBtn" type="submit">Back</button></a>
</div>

<div class="child-button2">
<a href="immunizationView.php"><button class="NextBtn" type="submit">Next</button></a>
</div>
</div> -->


    
<!-- <div class="childCard-container">

<div class="childCard-container-row2">
    <label for="text"> Hospital Name </label>
    <input type="text" name="Length" ></div>

    <div class="childCard-container-row1"> 
    <label for="text">Delivery Method</label>
        <lable for="text">Normal</lable>
        <input type="radio" name="Delivery" value="Normal">
        <lable for="text">Vaccum</lable>
        <input type="radio" name="Delivery" value="Caesarean">
        <lable for="text">Caesarean</lable>
        <input type="radio" name="Delivery" value="Caesarean">
</div>

<div class="childCard-container-row1">
    <label for="text">Birth Weight</label>
    <input type="text" name="Length" >
    <label for="text">Circumfarance of the head</label>
    <input type="text" name="Length" >
</div>

<div class="childCard-container-row2">
    <label for="text"> Vitamin K </label>
    <input type="checkbox" name="Length" ></div>

    <div class="childCard-container-row1">
    <label for="text"> Breast Feeding </label>
    <label for="text"> Started in the 1st hour: </label>
    <input type="checkbox" name="Length" ></div>

    <div class="childCard-container-row1">
    <label for="text">TSH Test </label>
        <lable for="text">Done</lable>
        <input type="radio" name="Delivery" value="Normal">
        <lable for="text">Not Done</lable>
        <input type="radio" name="Delivery" value="Caesarean">
    </div>
   <div class="childCard-container-row2">
            <label for="text"> Test Results </label>
            <input type="text" name="Length" >
     </div>
</div> -->


    
   
    
    
