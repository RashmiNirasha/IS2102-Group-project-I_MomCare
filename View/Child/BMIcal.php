<?php 
include "../../Assets/Includes/heading.php";
?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>
<div class="content">
        <!-- topic and notifications -->
        <div class="heading">
            <h1>Body Mass Index Calculator</h1>
            <a href="#">
                <span class="material-icons">notifications</span>
            </a>
        </div>
<div class="Bmi-container">
<form class="form" id="form" onsubmit="return validateForm()">
<div class="row-one">
  <input type="text" class="text-input" id="age" autocomplete="off" required/><p class="text">Age</p>
  <label class="container">
  <input type="radio" name="radio" id="f"><p class="text">Female</p>
    <span class="checkmark"></span>
  </label>
  <label class="container">
  <input type="radio" name="radio" id="m"><p class="text">Male</p>
    <span class="checkmark"></span>
  </label>
  </div>

<div class="row-two">
  <input type="text" class="text-input" id="height" autocomplete="off" required><p class="text">Height (cm)</p>
  <input type="text" class="text-input" id="weight" autocomplete="off" required><p class="text">Weight (kg)</p>
</div>
<button type="button" id="submit">Clear</button>
<button type="button" id="submit">Calculate</button>
</form>
</div>

<script src="jsScript.js"></script>
</body>
</html>
