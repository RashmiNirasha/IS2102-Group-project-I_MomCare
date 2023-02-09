<?php
include "../../Assets/Includes/header_pages.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <title>BMI Calculator</title>
    <style>
  form {
    width: 500px;
    margin: 0 auto;
    text-align: left;
    padding: 20px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 10px;
  }
  
  label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
  }
  
  input[type="text"] {
    padding: 10px;
    width: 100%;
    margin-top: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  input[type="submit"] {
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: #029ee4;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .main-mother{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f2f2f2;}
</style>
  </head>
  <body>

<div class="main-mother">
    <form action="bmi_calculator.php" method="post">
      <label for="age">Age in weeks:</label>
      <input type="text" id="age" name="age">
      <br><br>
      <label for="height">Height (in centimeters):</label>
      <input type="text" id="height" name="height">
      <br><br>
      <label for="weight">Weight (in kilograms):</label>
      <input type="text" id="weight" name="weight">
      <br><br>
      <input type="submit" value="Calculate BMI">
    </form> 
</div>
</div>
  </body>
</html>
