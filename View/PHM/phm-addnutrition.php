<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
// include '../../Config/dbConnection.php';
include "../../Assets/Includes/sidenavphm.php";

// if (isset($_POST['submit'])) {
//   insertChildInfo($_POST);
// }

// function insertChildInfo($data)
// {
//   global $con;
//   $child_id = $data['child_id'];
//   $child_name = $data['child_name'];
//   $child_gender = $data['child_gender'];
//   $phm_id = $data['phm_id'];
//   $doc_id = $data['doc_id'];
//   $guardian_id = $data['guardian_id'];
//   $mom_email = $data['mom_email'];
//   $mom_id = $data['mom_id'];
//   $date_of_birth = $data['date_of_birth'];

//   $sql = "INSERT INTO child_details (child_id, child_name, child_gender, phm_id, doc_id, guardian_id, mom_email, mom_id, date_of_birth) 
//           VALUES ('$child_id','$child_name','$child_gender', '$phm_id', '$doc_id', '$guardian_id', '$mom_email', '$mom_id', '$date_of_birth')";

//   if (mysqli_query($con, $sql)) {
//     header("Location: child-cardMenuView.php?success=1");
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($con);
//   }
// }
?>
<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>

<div class="acc-container">
  <h2>Nutrition Report</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="acc-title"><h3>Vitamin A </h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST">
      <table class="acc-table">
        <tr>
          <th>Child ID</th> <td><div class="acc-input"><input type="text" id="child_id" name="child_id" required></div></td> </tr>
          <tr><th>Age</th> <td><div class="acc-input"><input type="text" id="child_age" name="child_age" required></div></td></tr>
          <tr> <th>Date</th><td><div class="acc-input"><input type="date" id="date" name="date" class="inputDate" required></div></td></tr>
          <tr> <th>Batch No</th><td><div class="acc-input"><input type="text" id="batch_no" name="batch_no" required></div></td></tr>
          <tr><th>Actions</th><td><button class = "acc-btn" type="submit" name="submit" value="Submit">Submit</button></td></tr>
        </tr>
        </table>
        </form>
                        </div>
                    </div>

                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="acc-title"><h3>Worm Treatment</h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST">
      <table class="acc-table">
        <tr>
          <th>Child ID</th> <td><div class="acc-input"><input type="text" id="child_id" name="child_id" required></div></td> </tr>
          <tr><th>Age</th> <td><div class="acc-input"><input type="text" id="child_age" name="child_age" required></div></td></tr>
          <tr> <th>Date</th><td><div class="acc-input"><input type="date" id="date" name="date" class="inputDate" required></div></td></tr>
          <tr> <th>Batch No</th><td><div class="acc-input"><input type="text" id="batch_no" name="batch_no" required></div></td></tr>
          <tr><th>Actions</th><td><button class = "acc-btn" type="submit" name="submit" value="Submit">Submit</button></td></tr>
        </tr>
        </table>
        </form>
                        </div>
  </body>
</html>


