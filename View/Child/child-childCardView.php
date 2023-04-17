<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";

if (isset($_SESSION['email'])){
  $sql = "SELECT * FROM child_details WHERE child_id = '{$_GET['child_id']}'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>

<div class="top-button" >
<a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="goBackBtn">Go back</button></a>
        </div>
  <div class="child-cardMenu">
       <!-- topic and notifications -->
      <div class="heading">
        <h1>Child Card Menu</h1>
        <a href="#">
          <span class="material-icons">notifications</span>
        </a>
        </div>
<!-------- Child Card Topic Section ----------->

        <div class="CardTitles">
          <a href="child-generalInformationView.php"><h3>General information</h3></a>
        </div>
        <div class="CardTitles">
          <a href="infantCareView.php"><h3>Infant Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Age - Weight Graph</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Dental Care</h3></a>
        </div>
        <div class="CardTitles">
          <a href="#"><h3>Medical Check</h3></a>
        </div>
    </div>
  </body>
</html>


