<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
	<style><?php include "../../Assets/css/style-common.css"; ?></style>
</head>
<body>
	<div class="ChildCardMenuView-MainDiv">
		<div class="heading">
				<h1>Child Card Menu</h1>
		</div>
		<!-- Clickable title element -->
		<div id = "title" class="CardTitles">
			<div class="CardTitles-1">
				<h1>Identification Information</h1>
			</div>
		</div>
		<div id="content"></div>

		<div id = "title2" class="CardTitles">
			<div class="CardTitles-1">
				<h1>Newborn Care</h1>
			</div>
		</div>
		<div id="content2"></div>
		<div id = "title3" class="CardTitles">
			<div class="CardTitles-1">	
				<h1>Reasons for Special Care</h1>
			</div>
		</div>
		<div id="content3"></div>
		<div id = "title4" class="CardTitles">
			<div class="CardTitles-1">
				<h1>Newborn Health Chart</h1>
			</div>
		</div>
		<div id="content4"></div>
		
		<script>
			// Get a reference to the title element and the content element
			var title = document.getElementById("title");
			var content = document.getElementById("content");
			var title2 = document.getElementById("title2");
			var content2 = document.getElementById("content2");
			var title3 = document.getElementById("title3");
			var content3 = document.getElementById("content3");
			var title4 = document.getElementById("title4");
			var content4 = document.getElementById("content4");

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
					xhttp.open("GET", "childCard1.php", true);
					xhttp.send();
				}
			});

			title2.addEventListener("click", function() {
				// Toggle the content visibility based on the current state
				if (contentVisible) {
					content2.innerHTML = "";
					content2.style.display = "none";
					contentVisible = false;
				} else {
					// Load content from a PHP page using an AJAX request
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							// Replace the content with the loaded content
							content2.innerHTML = this.responseText;
							content2.style.display = "block";
							contentVisible = true;
						}
					};
					xhttp.open("GET", "childCard2.php", true);
					xhttp.send();
				}
			});

			title3.addEventListener("click", function() {
				// Toggle the content visibility based on the current state
				if (contentVisible) {
					content3.innerHTML = "";
					content3.style.display = "none";
					contentVisible = false;
				} else {
					// Load content from a PHP page using an AJAX request
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							// Replace the content with the loaded content
							content3.innerHTML = this.responseText;
							content3.style.display = "block";
							contentVisible = true;
						}
					};
					xhttp.open("GET", "childCard3.php", true);
					xhttp.send();
				}
			});

			title4.addEventListener("click", function() {
				// Toggle the content visibility based on the current state
				if (contentVisible) {
					content4.innerHTML = "";
					content4.style.display = "none";
					contentVisible = false;
				} else {
					// Load content from a PHP page using an AJAX request
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							// Replace the content with the loaded content
							content4.innerHTML = this.responseText;
							content4.style.display = "block";
							contentVisible = true;
						}
					};
					xhttp.open("GET", "childCard4.php", true);
					xhttp.send();
				}
			});

		</script>
	</div>
</body>
</html>
