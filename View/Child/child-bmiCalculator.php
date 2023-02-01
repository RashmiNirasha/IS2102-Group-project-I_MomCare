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
<div class="Bmi-cont-1">
  <table>
    <tr>
      <td>Date</td>
      <td><input type="date" class="text-input" id="date" autocomplete="off" required/>
    </tr>
    <tr>
      <td>Gender</td>
      <td><label for="Female">Female</label><input type="radio" name="radio" id="f"></td>
      <td><label for="male">Male</label><input type="radio" name="radio" id="m"></td>

    </tr>
    <tr>
      <td>Age</td>
      <td><input type="text" class="text-input" id="age" autocomplete="off" required/></td>
    </tr>
    <tr>
      <td>Height in cm</td>
      <td><input type="text" class="text-input" id="height" autocomplete="off" required/></td></td>
    </tr>
    <tr>
      <td>Weight in kg</td>
      <td><input type="text" class="text-input" id="weight" autocomplete="off" required/></td>
    </tr>
  </table>
</div>
<div class="Bmi-cont-2">
  <button type="button" id="clear">Clear</button>
<button type="button" id="submit">Calculate</button>
</div>
</form>
</div>

<script src="jsScript.js"></script>
</body>
</html>
