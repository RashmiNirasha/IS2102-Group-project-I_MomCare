
  <?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    
</head>
<body>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img src="Project Logo.png" alt="" class="img" /> </a>
    <nav class="navbar">
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php">About</a>
    </nav>
</header>

<div class="container">
<div class="content">
<img src="Assets\About MOM CARE.png" alt="" class="img" />
<img src="Assets\Project Logo - landscape-01 1 (2).png" alt="" class="img" />
                <h3>What is MomCare?</h3>
                <p>As the youth striving for the betterment of the world, we are concerned about Sri Lanka's maternal healthcare well-being, since its quality has a significant bearing on the fundamental growth of the future to be born. </p></br>

<p>Through our platform, we intend to facilitate our consumers with an easy and effective means of raising the standard of both maternal healthcare and early childhood health and development services across the nation.</p>
                <a href="#" class="btn">Read More</a>
            </div>

    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="<?php echo URLROOT; ?>/users/login">Log in</a> or <a href="<?php echo URLROOT; ?>/users/Register">Sign up</a></p>
        
    <?php endif; ?>

    </div>
    </div>

    <div class="footer">
            <p>Created by Rashmi Gunawardana | all rights reserved © 2022</p> 
        </div>

</body>

</html>
