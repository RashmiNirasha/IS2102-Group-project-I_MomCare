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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>
<div class = "acc-icons"><i class="material-icons" alt="edit">edit</i>
<i class="material-icons" alt="delete">delete</i></div>
<div class="acc-container">
  <h2>Child Profile</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="acc-title"><h3>New Child Card </h3></div>
                        <div class="MotherGeneralDetails">
                        <form method="POST" action="../../Config/phm-addchildprofileprocess.php">
      <table class="acc-table">
        <tr>
          <th>Child ID</th> <td><div class="acc-input"><input type="text" id="child_id" name="child_id" required></div></td> </tr>
          <tr><th>Child Name</th> <td><div class="acc-input"><input type="text" id="child_name" name="child_name" required></div></td></tr>
          <tr> <th>Date of Birth</th><td><div class="acc-input"><input type="date" id="date_of_birth" name="date_of_birth" class="inputDate" required></div></td></tr>
          <tr><th>Child Gender</th> <td><div class="acc-radio"><input type="radio" id="male" name="gender" value="M"></div><label for="male">Male</label><div class = "acc-radio"><input type="radio" id="female" name="gender" value="F"></div><label for="female">Female</label></td></tr>
          <tr> <th>Mother Name</th><td><div class="acc-input"><input type="text" id="mom_name" name="mom_name" required></div></td></tr>
          <tr><th>Mother ID</th> <td><div class="acc-input"><input type="text" id="mom_id" name="mom_id" required></div></td></tr>
          <tr><th>Mother Email</th> <td><div class="acc-input"><input type="email" id="mom_email" name="mom_email" required></div></td></tr>
          <tr><th>Mother Age</th> <td><div class="acc-input"><input type="text" id="mom_age" name="mom_age" required></div></td></tr>
          <tr><th>MOH Area</th> <td><div class="acc-input"><input type="text" id="moh_area" name="moh_area" required></div></td></tr>
          <tr><th>PHM Area</th> <td><div class="acc-input"><input type="text" id="phm_area" name="phm_area" required></div></td></tr>
          <tr><th>Name of the Field Clinic</th> <td><div class="acc-input"><input type="text" id="field_clinic" name="field_clinic" required></div></td></tr>
          <tr><th>Grama Niladhari Division</th> <td><div class="acc-input"><input type="text" id="division_name" name="division_name" required></div></td></tr>
          <tr><th>Name of the Hospital Clinic</th> <td><div class="acc-input"><input type="text" id="hospital_clinic" name="hospital_clinic" required></div></td></tr>
          <tr><th>Name of the Consultant Obstetrician</th><td><div class="acc-input"><input type="text" id="o_name" name="o_name" required></div></td></tr>
          <tr>  <th>Identified Antenatal Risks Conditions and Mobilities</th><td><div class="acc-input"><input type="text" id="risk" name="risk" required></div></td></tr>
          <tr>  <th>PHM ID</th><td><div class="acc-input"><input type="text" id="phm_id" name="phm_id" required></div></td></tr>
          <!-- <tr> <th>Doc ID</th><td><div class="acc-input"><input type="text" id="doc_id" name="doc_id" required></div></td></tr> -->
          <!-- <tr> <th>Guardian ID</th><td><div class="acc-input"><input type="text" id="guardian_id" name="guardian_id" required></div></td></tr> -->
          <tr>  <th>Registration Number</th><td><div class="acc-input"><input type="text" id="reg_no" name="reg_no" required></div></td></tr>
          <tr>  <th>Registration Date</th><td><div class="acc-input"><input type="date" id="reg_date" name="reg_date" required></div></td></tr>
          <tr><th>Actions</th><td><button class = "acc-btn" type="submit" name="submit" value="Submit">Create</button></td></tr>
        </tr>
        </table>
        </form>
                        </div>
                    </div>
  </body>
</html>


