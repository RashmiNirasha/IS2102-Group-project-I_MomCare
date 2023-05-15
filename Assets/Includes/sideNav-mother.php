<style><?php include "../../Assets/css/mother-card.css";?></style>

<div class="mother-sidenav">
  <div class="mCard-Tltles">
    <a href="../../View/Mother/mother-motherCardUpdate.php?mom_id=<?php echo $_GET['mom_id']; ?>">General Details</a>
    <a href="../../View/Mother/mother-mCardPersonalD.php?mom_id=<?php echo $_GET['mom_id']; ?>">Personal Information</a>
    <a href="../../View/Mother/mother-mCard-familyHistory.php?mom_id=<?php echo $_GET['mom_id']; ?>">Family History</a>
    <a href="../../View/Mother/mother-mCard-MShistory.php?mom_id=<?php echo $_GET['mom_id']; ?>">Medical / Surgical History</a>
    <a href="../../View/Mother/mother-mCard-presentOHhistory.php?mom_id=<?php echo $_GET['mom_id']; ?>">Present Obsteric History</a>
    <a href="../../View/Mother/mother-mCard-pregnancyH.php?mom_id=<?php echo $_GET['mom_id']; ?>">Pregnancy History</a>
    <a href="../../View/Mother/mother-mCard-ClinicCare.php?mom_id=<?php echo $_GET['mom_id']; ?>">Clinic Care</a>
    <a href="../../View/Mother/mother-mCard-AMhealth.php?mom_id=<?php echo $_GET['mom_id']; ?>">Auscultation & Mental Health</a>
    <a href="../../View/Mother/mother-mCard-DentalCare.php?mom_id=<?php echo $_GET['mom_id']; ?>">Dental Care</a>
    <a href="../../View/Mother/mother-mCard-ResSystem.php?mom_id=<?php echo $_GET['mom_id']; ?>">Respiratory System</a>
    <a href="../../View/Mother/mother-mCard-BreastExam.php?mom_id=<?php echo $_GET['mom_id']; ?>">Breast examination</a>
    <a href="../../View/Mother/mother-mCard-Investigation.php?mom_id=<?php echo $_GET['mom_id']; ?>">Investigations</a>
    <a href="../../View/Mother/mother-mCard-SyphilisScreen.php?mom_id=<?php echo $_GET['mom_id']; ?>">Syphilis screeningtem</a>
    <a href="../../View/Mother/mother-mCard-TetanusEx.php?mom_id=<?php echo $_GET['mom_id']; ?>">Tetanus Toxoid Immunization</a>
    <!-- <a href="../../View/Mother/mother-mCard-BPchart.php?mom_id=<?php echo $_GET['mom_id']; ?>">BP Chart</a> -->
    <a href="../../View/Mother/mother-mCard-WeightGainChart.php?mom_id=<?php echo $_GET['mom_id']; ?>">Weight Gain Chart</a>
    <a href="../../View/Mother/mother-mCard-SFHChart.php?mom_id=<?php echo $_GET['mom_id']; ?>">SFH Chart</a>
    <a href="../../View/Mother/mother-mCard-Emergency.php?mom_id=<?php echo $_GET['mom_id']; ?>">Birth and emergency preparedness plan</a>
    <a href="../../View/Mother/mother-mCard-Attendence.php?mom_id=<?php echo $_GET['mom_id']; ?>">Attendance at antenatal classes</a>
    <a href="../../View/Mother/mother-mCard-BirthPlan.php?mom_id=<?php echo $_GET['mom_id']; ?>">Family Planning</a>
  </div>
</div>

<script>
  var mCardTltles = document.getElementsByClassName("mCard-Tltles");
  
</script>