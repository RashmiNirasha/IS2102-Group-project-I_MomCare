<?php
// Assuming that the MySQL connection has already been established
include "../../Config/dbConnection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Retrieve the form data
  $birth_place = $_POST["birth_place"];
  $delivery_mode = $_POST["delivery_mode"];
  $apgar_score = $_POST["apgar_score"];
  $birth_weight = $_POST["birth_weight"];
  $head_circumference = $_POST["head_circumference"];
  $baby_length = $_POST["baby_length"];
  $discharge_weight = $_POST["discharge_weight"];
  $vitamin_k = $_POST["vitamin_k"];
  $breastfeeding_start = $_POST["breastfeeding_start"];
  $breastfeeding_establishment = $_POST["breastfeeding_establishment"];
  $breastfeeding_relationship = $_POST["breastfeeding_relationship"];

  // SQL query to insert the form data into the database table
  $sql = "INSERT INTO newborn_care_form (birth_place, delivery_mode, apgar_score, birth_weight, head_circumference, baby_length, discharge_weight, vitamin_k, breastfeeding_start, breastfeeding_establishment, breastfeeding_relationship)
  VALUES ('$birth_place', '$delivery_mode', '$apgar_score', '$birth_weight', '$head_circumference', '$baby_length', '$discharge_weight', '$vitamin_k', '$breastfeeding_start', '$breastfeeding_establishment', '$breastfeeding_relationship')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

  // Execute the SQL query and check for errors

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Newborn Care Form</title>
	<style>
		body {
            font-family: sans-serif;
			font-size: 14px;
			line-height: 1.5;
            width: 100%;
            background-color: white;
		}
		fieldset {
            margin: 20px 20px 20px 20px;
		}
		input[type="radio"],
		input[type="checkbox"] {
			margin-right: 5px;
		}
		label {
			display: block;
			margin-bottom: 5px;
		}
		input[type="text"],
		input[type="number"] {
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="radio"] {
			margin-right: 10px;
		}
		form > div {
			display: flex;
			flex-wrap: wrap;
			margin-right: -10px;
			margin-bottom: -10px;
		}
		form > div > div {
			flex: 1 0 calc(50% - 10px);
			margin-right: 10px;
			margin-bottom: 10px;
		}
		form > div > div:last-child {
			margin-right: 0;
		}
        .child-container-1 {
            background-color: aliceblue;
            margin-bottom: 20px;
        }	
        .child-container-2 {
            background-color: antiquewhite;
            margin-bottom: 20px;
        }
	</style>
</head>
<body>
	<h1>Newborn Care Form</h1>
	<form method="POST">
		<div class="child-container-1">
			<div class="child-container-2">
				<fieldset>
					<legend>Birth Information:</legend>
					<label>Birth Place (hospital):</label>
					<input type="text" name="birth_place">
					<label>Mode of Delivery:</label>
					<label><input type="radio" name="delivery_mode" value="normal"> Normal Delivery</label>
					<label><input type="radio" name="delivery_mode" value="forceps"> Forceps Delivery</label>
					<label><input type="radio" name="delivery_mode" value="vacuum"> Vacuum Delivery</label>
					<label><input type="radio" name="delivery_mode" value="cesarean"> Cesarean Delivery</label>
					<label>Apgar Score:</label>
					<input type="number" name="apgar_score" min="0" max="10">
					<label>Birth Weight:</label>
					<input type="number" name="birth_weight" min="0" step="0.01">
					<label>Head Circumference at Birth:</label>
					<input type="number" name="head_circumference" min="0" step="0.01">
					<label>Baby’s Length at Birth:</label>
					<input type="number" name="baby_length" min="0" step="0.01">
					<label>Weight at Birth:</label>
					<input type="number" name="birth_weight" min="0" step="0.01">
					<label>Weight at Hospital Discharge:</label>
					<input type="number" name="discharge_weight" min="0" step="0.01">
					<label>Vitamin K given:</label>
					<label><input type="radio" name="vitamin_k" value="yes"> Yes</label>
					<label><input type="radio" name="vitamin_k" value="no"> No</label>
				</fieldset>
			</div>
			<div>
				<fieldset>
			<legend>Breastfeeding:</legend>
			<label>Started within the first hour at birth:</label>
			<label><input type="radio" name="breastfeeding_start" value="yes"> Yes</label>
			<label><input type="radio" name="breastfeeding_start" value="no"> No</label>
			<label>Establishment:</label>
			<label><input type="radio" name="breastfeeding_establishment" value="correct"> Correct</label>
			<label><input type="radio" name="breastfeeding_establishment" value="incorrect"> Incorrect</label>
			<label>Relationship:</label>
            <label><input type="radio" name="breastfeeding_relationship" value="correct"> Correct</label>
			<label><input type="radio" name="breastfeeding_relationship" value="incorrect"> Incorrect</label>
        </fieldset>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
