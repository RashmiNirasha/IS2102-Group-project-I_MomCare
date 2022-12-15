<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "../config/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Dashboard</title>
    <link rel="stylesheet" href="pediatrician-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
   <?php include_once '../../Assets/Includes/ped-header.php';?>
</header>

            <div class="main-dash">
            <h1>Pediatrician Dashboard</h1>
            <a href="notificationsView.php"><img src="../../Assets/Images/notifications_black_24dp.svg" alt="notification icon"></a>
            </div>
            <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>

        <?php endif; ?>
            <div class="cards">
               
               <a href="childCardSearchView.php"><div class="card">
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

               <a href="notes.php"><div class="card">
                <div class="Icon">
                    <img src="../../Assets/Images/file-text.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Enter Notes</h3>
                 </div>
               </div></a>
 
               <a href="notes.php"><div class="card">
                <div class="Icon">
                    <img src="../../Assets/Images/file-text.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>View Doctor's Notes</h3>
                 </div>
               </div></a>

             </div>
                    <div class="button-text"><p><a href="logout.php">Log out<span class="material-symbols-outlined">logout</span></a></p></div>
            </div>
        </div>
        <?php include_once '../../Assets/Includes/ped-footer.php';?>
</header>
</html>
