<?php include "../../Assets/Includes/header_pages.php" ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="main-mother">
        <div class="mom-filter">
            <input class="mom-search" type="search" name="mom-search" id="mom-search" placeholder="Search">
            <div class="mom-filter-right">
                <label for="searched-by">Searched by</label>
                <select class="dropdown-menu" name="dropdown-menu" id="dropdown-menu">
                    <option value="name">Name</option>
                    <option value="id">ID</option>
                </select>
            </div>
        </div>
        <div class="mom-bar">
            <div class="mom-bar-left">
                <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                <div>
                    <h3>Ms. Indrani Perera</h3>
                    <p class="second-line">0712345678</p>
                </div>
            </div>
            <div class="mom-btns">
                <button onclick="window.location.href='../Mother/motherCardPage1.php'">Mother Card</button>
                <button onclick="window.location.href='TestsVog.php';">Scan & Tests</button>
            </div>
        </div>
    </div>
    <!--logout button-->
    <div class="log-out"> 
        <button onclick="window.location.href='logout.php';" class="log-out-btn">Log out</button>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>