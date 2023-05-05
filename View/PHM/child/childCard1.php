<?php
include "child-cardFunctionsModel.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insert_child_health_record($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Identification Information</title>
	<style><?php include "../../../Assets/css/style-common.css"; ?></style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
		$("#child-form").submit(function(event) {
			event.preventDefault();
			var form_data = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "child-form.php",
				data: form_data,
				success: function(response) {
					// handle success response
				},
				error: function(xhr, status, error) {
					// handle error response
				}
			});
		});
	});
	</script>
</head>
<body>
	<!-- <h1>Identification Information</h1> -->
	<form id="child-form" class="ChildDataInput-cards">
		<div class="ChildForm-Container-Light">
			<label for="child-name">Child Name:</label>
			<input type="text" id="child-name" name="child-name" required>

			<label for="child-birth-date">Child Birth Date:</label>
			<input type="date" id="child-birth-date" name="child-birth-date" required>

			<label for="registration-date">Registration Date:</label>
			<input type="date" id="registration-date" name="registration-date" required>

			<label for="mothers-address">Mother's Address:</label>
			<textarea id="mothers-address" name="mothers-address" required></textarea>
		</div>
		<div class="ChildForm-Container-Right">
			<label for="mothers-name">Mother's Name:</label>
			<input type="text" id="mothers-name" name="mothers-name" required>

			<label for="mothers-age">Mother's Age:</label>
			<input type="number" id="mothers-age" name="mothers-age" required>

			<label for="fathers-name">Father's Name:</label>
			<input type="text" id="fathers-name" name="fathers-name" required>

			<label for="fathers-age">Father's Age:</label>
			<input type="number" id="fathers-age" name="fathers-age" required>

			<label for="no-of-children">Number of Children Alive (including this child):</label>
            <input type="number" id="no-of-children" name="no-of-children" required>
    	</div>
		<div></div>
		<div class="childform-submit-btn-div">
		<input class="childform-submit-btn" type="submit" value="Submit">
		</div>
	</form>
</body>
</html>
