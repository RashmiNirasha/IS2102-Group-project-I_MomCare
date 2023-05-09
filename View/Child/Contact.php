<?php
 session_start();
 if (isset($_SESSION['email']) && isset($_SESSION['id'])) { 

 include '../../Config/dbConnection.php';
 include "../../Assets/Includes/header_pages.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style><?php include "../../Assets/css/style-child.css";?></style>
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">SUWASIRIPAYA</div>
          <div class="text-two">No. 385,</div>
          <div class="text-two">Rev. Baddegama Wimalawansa Thero Mawatha,</div>
            <div class="text-two">Colombo 10, Sri Lanka</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">( 94)112 694033</div>
          <div class="text-two">( 94)112 675011</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">momcare@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any questions or problems regarding the site or any personal inquiries , Please reach out to us .</p>

      <form action="../../Config/admin-contact.php" method="POST">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
            <textarea name="message" placeholder="Enter your message" required></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" >
        </div>
        
      </form>
    </div>
    </div>
  </div>
</body>
</html>

<?php } else {
    header("Location: ../../mainLogin.php");
    exit();}
?>