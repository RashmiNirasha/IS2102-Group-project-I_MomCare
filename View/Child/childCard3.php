<?php 
//include "../../Assets/Includes/header_pages.php";

include "child-cardFunctionsModel.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insert_child_special_care_reasons($_POST);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include 'Style-child.css'; ?></style>
</head>
<body>

    <div>
        <div class="childcontainer-3">
            <h1>Reasons for Special Care</h1>
            <form method="post">
                <table>
                    <tr>
                        <td>Immature births</td>
                        <td><input type="checkbox" name="Immature_births" id=""><input type="text" name="immature_births_text"></td>
                    </tr>
                    <tr>
                        <td>Under weight Births</td>
                        <td colspan="6"><input type="checkbox" name="Under_weight_Births" id=""><input type="text" name="under_weight_births_text"></td>
                    </tr>
                    <tr>
                        <td>Disorders</td>
                        <td colspan="6"><input type="checkbox" name="Disorders" id=""><input type="text" name="disorders_text"></td>
                    </tr>
                    <tr>
                        <td>Serious issues for mother after the birth</td>
                        <td colspan="6"><input type="checkbox" name="Serious_issues_for_mother_after_the_birth" id=""><input type="text" name="serious_issues_for_mother_text"></td>
                    </tr>
                    <tr>
                        <td>Giving Milk powder during 6 moths</td>
                        <td colspan="6"><input type="checkbox" name="Giving_Milk_powder_during_6_moths" id=""><input type="text" name="milk_powder_during_6_months_text"></td>
                    </tr>
                    <tr>
                        <td>Impairment of Growth</td>
                        <td colspan="6"><input type="checkbox" name="Impairment_of_Growth" id=""><input type="text" name="growth_impairment_text"></td>
                    </tr>
                    <tr>
                        <td>Feeding Issues</td>
                        <td colspan="6"><input type="checkbox" name="Feeding_Issues" id=""><input type="text" name="feeding_issues_text"></td>
                    </tr>
                    <tr>
                        <td>Death of Mother/Farther</td>
                        <td colspan="6"><input type="checkbox" name="Death_of_Mother_Farther" id=""><input type="text" name="death_of_parent_text"></td>
                    </tr>
                    <tr>
                        <td>Migration of Mother/Father</td>
                        <td colspan="6"><input type="checkbox" name="Migration_of_Mother_Father" id=""><input type="text" name="parent_migration_text"></td>
                    </tr>
                </table>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>


</body>
</html>
