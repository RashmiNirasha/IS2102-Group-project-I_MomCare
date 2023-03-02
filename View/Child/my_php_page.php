<!-- Form elements -->
<form id="myForm">
	<label for="name">Name:</label>
	<input type="text" id="name" name="name"><br><br>

	<label for="email">Email:</label>
	<input type="email" id="email" name="email"><br><br>

	<label for="message">Message:</label><br>
	<textarea id="message" name="message"></textarea><br><br>

	<input type="submit" value="Submit">
</form>

<script>
	// Get a reference to the form element
	var form = document.getElementById("myForm");

	// Add a submit event listener to the form element
	form.addEventListener("submit", function(event) {
		// Prevent the default form submission behavior
		event.preventDefault();

		// Get the form data as a URL-encoded string
		var formData = new FormData(form);

		// Send a POST request to a PHP script that handles the form submission
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				// Handle the server response here
				console.log(this.responseText);
			}
		};
		xhttp.open("POST", "submit_form.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send(new URLSearchParams(formData).toString());
	});
</script>
