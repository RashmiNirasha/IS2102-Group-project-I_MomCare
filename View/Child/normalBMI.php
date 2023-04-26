<?php include "../../Assets/Includes/header_pages.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <title>BMI Calculator</title>
    <style>
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
      }
      
      .form-container {
        width: 50%;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 10px;
        justify-content: center;
        align-items: center;
      }
      
      .image-container {
        width: 50%;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      
      label {
        width: 75%;
        font-weight: bold;
        margin-top: 10px;
      }
      
      input[type="text"] {
        margin-left: 10px;
        width: 55%;
        padding: 10px;
        margin-top: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      
      input[type="submit"] {
        width: 75%;
        margin-top: 20px;
        padding: 10px;
        font-size: 16px;
        background-color: #029ee4;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      
      img {
        max-width: 100%;
        height: auto;
      }
    </style>
    
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <form action="bmi_calculator.php" method="post">
        <label for="age">Age :</label>
          <select id="age" name="age" required>
            <option value="">Select age</option>
            <?php for ($i = 1; $i <= 20; $i++) { ?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
          </select>
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
      <div class="image-container">
      <img src="https://via.placeholder.com/400x300.png" alt="BMI Image">
      </div>
    </div>
  </body>
</html>
