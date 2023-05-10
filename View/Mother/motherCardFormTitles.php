<?php 
   session_start();
    include '../../Config/dbConnection.php';
   if (isset($_SESSION['email']))
   {
?>
<?php 
include "mother-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body class="motherCardFormTitles-body">
  <div class="content">
       <!-- topic and notifications -->
      <div class="heading">
        <h1>Mother Card Menu</h1>
        <a href="#">
          <span class="material-icons">notifications</span>
        </a>
        </div>

<!-------- Child Card Topic Section ----------->

        <div class="CardTitles">
          <a href="mother-profileDetails.php"><h3>About Mother</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage1.php"><h3>General Details</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage1.php"><h3>Present Obstetric History</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage1.php"><h3>Personal Information</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage1.php"><h3>Family History</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage1.php"><h3>Medical / Surgical History</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage1.php"><h3>Past Obstetric History</h3></a>
        </div>        
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Clinic Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Auscultation</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Mental Health</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Respiratory System</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Breast Examination</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Dental Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Investigations</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Syphilis Screening </h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage2.php"><h3>Tetanus Toxoid Immunization</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage3.php"><h3>Weight Gain Chart</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage3.php"><h3>Birth and emergency preparedness plan</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage3.php"><h3>Attendance at antenatal classes</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage3.php"><h3>IEC Material</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage3.php"><h3>Family Planning</h3></a>
        </div>
        <div class="CardTitles">
          <a href="motherCardPage3.php"><h3>Referrals</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Hospital Clinic Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Delivery & Postnatal Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Post Partum Field Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Postnatal Clinic Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Emergency Contact</h3></a>
        </div>
    </div>
  </body>
</html>

<?php //include "../../Assets/Includes/footer.php";?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>

