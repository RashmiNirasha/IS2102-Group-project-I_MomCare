<?php
include "../../Config/dbConnection.php";

function insert_child_health_record($data) {
    global $con;
    $child_name = $data['child-name'];
    $child_birth_date = $data['child-birth-date'];
    $registration_date = $data['registration-date'];
    $mothers_name = $data['mothers-name'];
    $mothers_address = $data['mothers-address'];
    $mothers_age = $data['mothers-age'];
    $fathers_name = $data['fathers-name'];
    $fathers_age = $data['fathers-age'];
    $no_of_children_alive = $data['no-of-children'];

// Prepare the SQL statement to insert the form data into the database
$sql = "INSERT INTO child_identification_information (child_name, child_birth_date, registration_date, mothers_name, mothers_address, mothers_age, fathers_name, fathers_age, no_of_children_alive) VALUES 
('$child_name', '$child_birth_date', '$registration_date', '$mothers_name', '$mothers_address', $mothers_age, '$fathers_name', $fathers_age, $no_of_children_alive)";

if (mysqli_query($con, $sql)) {
    header("Location: childCard1.php?success=1");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

function insert_child_newborn_care($data) {
    global $con;
    $birth_place = $data['birth_place'];
    $delivery_mode = $data['delivery_mode'];
    $apgar_score = $data['apgar_score'];
    $birth_weight = $data['birth_weight'];
    $head_circumference = $data['head_circumference'];
    $baby_length = $data['baby_length'];
    $discharge_weight = $data['discharge_weight'];
    $vitamin_k = $data['vitamin_k'];
    $breastfeeding_start = $data['breastfeeding_start'];
    $breastfeeding_establishment = $data['breastfeeding_establishment'];
    $breastfeeding_relationship = $data['breastfeeding_relationship'];

    $sql = "INSERT INTO child_newborn_care_form (birth_place, delivery_mode, apgar_score, birth_weight, head_circumference, baby_length, discharge_weight, vitamin_k, breastfeeding_start, breastfeeding_establishment, breastfeeding_relationship)
  VALUES ('$birth_place', '$delivery_mode', '$apgar_score', '$birth_weight', '$head_circumference', '$baby_length', '$discharge_weight', '$vitamin_k', '$breastfeeding_start', '$breastfeeding_establishment', '$breastfeeding_relationship')";

    if (mysqli_query($con, $sql)) {
        header ("Location: childCard2.php?success=1");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

}

function insert_child_special_care_reasons($data) {
    global $con;
    $immature_births = isset($data['Immature_births']) ? 1 : 0;
    $immature_births_text = isset($data['immature_births_text']) ? mysqli_real_escape_string($con, $data['immature_births_text']) : '';
    $under_weight_births = isset($data['Under_weight_Births']) ? 1 : 0;
    $under_weight_births_text = isset($data['under_weight_births_text']) ? mysqli_real_escape_string($con, $data['under_weight_births_text']) : '';
    $disorders = isset($data['Disorders']) ? 1 : 0;
    $disorders_text = isset($data['disorders_text']) ? mysqli_real_escape_string($con, $data['disorders_text']) : '';
    $serious_issues_for_mother = isset($data['Serious_issues_for_mother_after_the_birth']) ? 1 : 0;
    $serious_issues_for_mother_text = isset($data['serious_issues_for_mother_text']) ? mysqli_real_escape_string($con, $data['serious_issues_for_mother_text']) : '';
    $milk_powder_during_6_months = isset($data['Giving_Milk_powder_during_6_moths']) ? 1 : 0;
    $milk_powder_during_6_months_text = isset($data['milk_powder_during_6_months_text']) ? mysqli_real_escape_string($con, $data['milk_powder_during_6_months_text']) : '';
    $growth_impairment = isset($data['Impairment_of_Growth']) ? 1 : 0;
    $growth_impairment_text = isset($data['growth_impairment_text']) ? mysqli_real_escape_string($con, $data['growth_impairment_text']) : '';
    $feeding_issues = isset($data['Feeding_Issues']) ? 1 : 0;
    $feeding_issues_text = isset($data['feeding_issues_text']) ? mysqli_real_escape_string($con, $data['feeding_issues_text']) : '';
    $death_of_parent = isset($data['Death_of_Mother_Farther']) ? 1 : 0;
    $death_of_parent_text = isset($data['death_of_parent_text']) ? mysqli_real_escape_string($con, $data['death_of_parent_text']) : '';
    $parent_migration = isset($data['Migration_of_Mother_Father']) ? 1 : 0;
    $parent_migration_text = isset($data['parent_migration_text']) ? mysqli_real_escape_string($con, $data['parent_migration_text']) : '';

    $sql = "INSERT INTO child_special_care_reasons (immature_births, immature_births_text, under_weight_births, under_weight_births_text, disorders, disorders_text, serious_issues_for_mother, serious_issues_for_mother_text, milk_powder_during_6_months, milk_powder_during_6_months_text, growth_impairment, growth_impairment_text, feeding_issues, feeding_issues_text, death_of_parent, death_of_parent_text, parent_migration, parent_migration_text)
  VALUES ('$immature_births', '$immature_births_text', '$under_weight_births', '$under_weight_births_text', '$disorders', '$disorders_text', '$serious_issues_for_mother', '$serious_issues_for_mother_text', '$milk_powder_during_6_months', '$milk_powder_during_6_months_text', '$growth_impairment', '$growth_impairment_text', '$feeding_issues', '$feeding_issues_text', '$death_of_parent', '$death_of_parent_text', '$parent_migration', '$parent_migration_text')";

    if (mysqli_query($con, $sql)) {
        header ("Location: childCard3.php?success=1");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

function insert_child_newborn_health_chart($data) {
    global $con;
    $report_entry_date = $data['report_entry_date'];
    $skin_color = $data['skin_color'];
    $eye_condition = $data['eye_condition'];
    $pecan_nature = $data['pecan_nature'];
    $temperature = $data['temperature'];
    $exclusive_breastfeeding = $data['exclusive_breastfeeding'];
    $breastfeeding_establishment = $data['breastfeeding_establishment'];
    $breastfeeding_relationship = $data['breastfeeding_relationship'];
    $stool_color = $data['stool_color'];
    $deficiency = $data['deficiency'];

    $sql = "INSERT INTO child_newborn_health_chart (report_entry_date, skin_color, eye_condition, pecan_nature, temperature, exclusive_breastfeeding, breastfeeding_establishment, breastfeeding_relationship, stool_color, deficiency) 
    VALUES ('$report_entry_date', '$skin_color', '$eye_condition', '$pecan_nature', '$temperature', '$exclusive_breastfeeding', '$breastfeeding_establishment', '$breastfeeding_relationship', '$stool_color', '$deficiency')";

    if (mysqli_query($con, $sql)) {
        header("Location: childCard4.php?success=1");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>



