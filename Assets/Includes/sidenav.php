<style><?php include "../../Assets/css/style-child.css";?></style>

<div class="child-sidenav">
  <a href="../../View/Child/child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>">Child Dashboard</a>
    <a href="../../View/Child/child-childCardView.php?child_id=<?php echo $_GET['child_id']; ?>">Child Profile</a>
  <a href="../../View/Child/child-nutritionView.php?child_id=<?php echo $_GET['child_id']; ?>">Nutrition Report</a>
  <a href="../../View/Child/child-Eye&hearView.php?child_id=<?php echo $_GET['child_id']; ?>">Eyesight & Hearing Test</a>
  <a href="../../View/Child/child-developmentView.php?child_id=<?php echo $_GET['child_id']; ?>">Development Chart</a>
  <a href="../../View/Child/child-dentalView.php?child_id=<?php echo $_GET['child_id']; ?>">Dental Care</a>
</div>