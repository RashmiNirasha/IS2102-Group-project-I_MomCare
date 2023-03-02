<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<body>
	<!-- Clickable title element -->
	<h1 id="title">Click Me</h1>

	<!-- Container for the dynamic content -->
	<div id="content"></div>

	<script>
		// Get a reference to the title element and the content element
		var title = document.getElementById("title");
		var content = document.getElementById("content");

		// Initialize the content state to be hidden
		var contentVisible = false;

		// Add a click event listener to the title element
		title.addEventListener("click", function() {
			// Toggle the content visibility based on the current state
			if (contentVisible) {
				content.innerHTML = "";
				content.style.display = "none";
				contentVisible = false;
			} else {
				// Load content from a PHP page using an AJAX request
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						// Replace the content with the loaded content
						content.innerHTML = this.responseText;
						content.style.display = "block";
						contentVisible = true;
					}
				};
				xhttp.open("GET", "my_php_page.php", true);
				xhttp.send();
			}
		});
	</script>
</body>
</html>
