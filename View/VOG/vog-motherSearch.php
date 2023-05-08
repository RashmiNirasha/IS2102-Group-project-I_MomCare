<?php 
session_start();
include '../../Config/dbConnection.php';
if (isset($_SESSION['email'])){?>

<?php include "../../Assets/Includes/header_pages.php" ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/Css/style-common.css" ?></style>
    <script><?php include './vog-search.js'; ?></script>
</head>
<body>
    <a href="dashboardVog.php"><button class="goBackBtn">Go back</button></a>
    <div class="main-mother">
        <div class="mom-filter">
        <h1>Find mother card</h1>
            <form action="" method="GET">
                <input class="mom-search" type="search" name="mom-search" id="allMotherSearch" placeholder="Please enter a search term (Ex: First name, Last name, Mother ID)" oninput="allMotherSearch()" required autofocus>
                <input type="submit" name="submit" value="Search">
                <h3></h3>
            </form>
        </div>
        <div class="AllMotherCardsDiv"></div>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../index.php");
    exit();
} ?>