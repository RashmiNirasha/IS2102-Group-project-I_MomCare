<?php
session_start();
include "../../Config/dbConnection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../Assets/css/pediatrician-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
<?php 
include "../../Assets/Includes/header_pages.php";
?>
</header>

            <div class="main-dash">
            <h1>Pediatrician Dashboard</h1>
            <a href="Pediatrician-notificationsView.php"><img src="../../Assets/Images/notifications_black_24dp.svg" alt="notification icon"></a>
            </div>
            <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["doc_name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>

        <?php endif; ?>
            <div class="cards">
               
               <a href="pediatrician-childCardSearchView.php"><div class="card">
                <div class="Icon">
                    <img src="../../Assets/Images/child.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Child Card Management</h3>
                 </div>
               </div></a>

               <a href="EngSignup.php"><div class="card">
                <div class="Icon">
                    <img src="../../Assets/Images/Syringe.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Immunization Details</h3>
                 </div>
               </div></a>

               <a href="pediatrician-addNotesView.php"><div class="card">
                <div class="Icon">
                    <img src="../../Assets/Images/file-text.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Enter Notes</h3>
                 </div>
               </div></a>
 
               <a href="pediatrician-viewNotesView.php"><div class="card">
                <div class="Icon">
                    <img src="../../Assets/Images/file-text.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>View Doctor's Notes</h3>
                 </div>
               </div></a>
             </div>
             <div class="log-out">
                    <div class="log-out-btn"><p><a href="../../Config/ped-logoutModel.php">Log out</a></p></div>
                </div>
            </div>
        </div>
        <?php //include_once '../../Assets/Includes/ped-footer.php';?>
</header>
</html>
<?php
} else {
   header("Location: ../../mainLogin.php");
    exit();
}?>