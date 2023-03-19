
<!DOCTYPE html>
<html>
<head>
	<title>Newborn Care Form</title>
	<style><?php include "../../Assets/css/style-common.css"; ?></style>
</head>
<body>
	<!-- <h1>Newborn Care </h1> -->
	<form method="POST">
		<div class="ChildDataInput-cards">
			<div class="child-container-2">
				<fieldset>
					<legend>Birth Information:</legend>
					<label for="child-id" style="display:none">Child ID:</label>
					<input type="hidden" name="childid" value="<?php echo $_GET['childid']; ?>">

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
			<div class="ChildForm-Container-Right">
				<fieldset >
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
			<?php
					include "child-cardFunctionsModel.php";
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						insert_child_newborn_care($_POST);
					}
					?>
			<div></div>
			<div class="childform-submit-btn-div"><input class="childform-submit-btn" type="submit" value="Submit"></div>
        </div>
    </form>
</body>
</html>
