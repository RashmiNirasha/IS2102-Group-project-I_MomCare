<?php 
session_start();
include '../../Config/dbConnection.php';
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
<?php 
   include '../../Config/dbConnection.php';

   $sql="SELECT ci.*, nc.*, nhc.*, cscr.*
   FROM `child_identification_information` ci
   LEFT JOIN `child_newborn_care_form` nc ON ci.`child_id` = nc.`child_id`
   LEFT JOIN `child_newborn_health_chart` nhc ON ci.`child_id` = nhc.`child_id`
   LEFT JOIN `child_special_care_reasons` cscr ON ci.`child_id` = cscr.`child_id`
   Where ci.`child_id` = Session['child_id']";

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $age = date_diff(date_create($row['child_birth_date']), date_create('today'))->m . ' months';

?>
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
                    <h3>Identification Information</h3>
                    <table class="ChildCardInputSec-1">
                        <tr>
                            <td>Child's Name</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['child_name'] ?>" disabled></td>
                            <td>Child's Birth Date </td>
                            <td colspan="6"><input type="text" value="<?php echo $row['child_birth_date'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Registration Date</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['registration_date'] ?>" disabled></td>
                            <td>Child's Age</td>
                            <td colspan="6"><input type="text" value="<?php echo $age ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Mother's Name</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['mothers_name'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Mother's Age</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['mothers_age'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Mother's Address</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['mothers_address'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Father's Name</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['fathers_name'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Father's Age</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['fathers_age'] ?>" disabled></td>
                           
                        </tr>
                        <tr>
                            <td>No. of Children Alive</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['no_of_children_alive'] ?>" disabled></td> 
                        </tr>
                    </table>
                </div>
            </div>
        </div> 
        <!-- form section 2 -->
        <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">
                    <h3>Newborn Care</h3>
                    <table class="ChildCardInputSec-2">
                        <tr>
                            <td>Birth Place</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['birth_place'] ?>" disabled></td>
                            <td>Dilivery Mode</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['delivery_mode'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Apgar Score</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['apgar_score'] ?>" disabled></td>
                            <td>Birth Weight</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['birth_weight'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Head Circumference</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['head_circumference'] ?>" disabled></td>
                            <td>Baby Length</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['baby_length'] ?>" disabled></td>
                            
                        </tr>
                        <tr>
                            <td>Discharge Weight</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['discharge_weight'] ?>" disabled></td>
                            <td>Vitamin K</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['vitamin_k'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Breastfeeding Start</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['breastfeeding_start'] ?>" disabled></td>
                            <td>Breastfeeding Establishment</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['breastfeeding_establishment'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Breastfeeding Relationship</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['breastfeeding_relationship'] ?>" disabled></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- form section 4 -->
        <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">
                    <h3>Reasons for Special Care</h3>
                    <table class="ChildCardInputSec-3">
                        <tr>
                            <td>Immature Births</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['immature_births_text'] ?>" disabled></td>
                        <tr>
                            <td>Under Weight Births</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['under_weight_births_text'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Disorders</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['disorders_text'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Serious Issues for Mother</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['serious_issues_for_mother_text'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Milk Powder During 6 Months</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['milk_powder_during_6_months_text'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Growth Impairment</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['growth_impairment_text'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Feeding Issues</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['feeding_issues_text'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Death of Parent</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['death_of_parent_text'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Parent Migration</td>
                            <td colspan="6"><input type="text" value="<?php echo $row['parent_migration_text'] ?>" disabled></td>
                        </tr>
                        <td>   
                    </table>
                </div>
            </div>
        </div>
        <div class="ChildFormButtons">
            <a href="child-infantCareView.php"><button class="NextBtn">Next</button></a>
            <a href="child-childCardView.php"><button class="NextBtn">Back</button></a>
        </div>
    </div>
</body>
</html>

