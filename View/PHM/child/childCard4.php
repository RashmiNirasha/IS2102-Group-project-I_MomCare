<?php
include "child-cardFunctionsModel.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insert_child_newborn_health_chart($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Newborn Health Chart</title>
	<style><?php include "../../Assets/css/style-common.css"; ?></style>
</head>
<body>
	<!-- <h1>Newborn Health Chart</h1> -->
	<form class="ChildDataInput-cards" action="" method="post">
		<div>
        <label for="report-entry-date">Date of report entry</label>
		<input type="date" id="report-entry-date" name="report_entry_date" required>

		<label for="skin-color">Skin Color</label>
		<input type="text" id="skin-color" name="skin_color" required>

		<label for="eye-color">Eye Color</label>
		<input type="text" id="eye-color" name="eye_color" required>

		<label for="nature-of-pecan">Nature of pecan</label>
		<input type="text" id="nature-of-pecan" name="nature_of_pecan" required>

		<label for="temperature">Temperature</label>
		<input type="text" id="temperature" name="temperature" required>
	</div>
	<div>
		<label for="exclusive-breastfeeding">Exclusive breastfeeding</label>
		<input type="text" id="exclusive-breastfeeding" name="exclusive_breastfeeding" required>

		<label for="breastfeeding-establishment">Breastfeeding establishment</label>
		<input type="text" id="breastfeeding-establishment" name="breastfeeding_establishment" required>

		<label for="breastfeeding-relationship">Breastfeeding relationship</label>
		<input type="text" id="breastfeeding-relationship" name="breastfeeding_relationship" required>

		<label for="stool-color">Stool color</label>
		<input type="text" id="stool-color" name="stool_color" required>

		<label for="deficiency">Any other deficiency</label>
        <input type="text" id="deficiency" name="deficiency" required>

	<input class="childform-submit-btn" type="submit" value="Submit">
</div>
</form>
</body>
</html>


			
