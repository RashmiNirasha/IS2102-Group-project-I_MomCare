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
    <style><?php include '../../Assets/Css/style-common.css'; ?></style> 
    <script><?php include './vog-search.js'; ?></script>
    <title>My Patients</title>
</head>
<body>
    <div class="myPatientsMainDiv">
        <div class="myPatientsInnerDiv">
            <div class="myPatientsHeader"><h3>My Patients</h3></div>
            <div class="myPatientsSearch-Main">
            <form action="" onsubmit="event.preventDefault(); submitMyPatientsSearch();">
                    <div class="myPatientsSearch"><input type="search" name="myPatientsSearch" id="myPatientsSearch" placeholder="Please enter a search term (Ex: First name, Last name, Mother ID)" oninput="myPatientSearch()" onkeydown="if (event.key === 'Enter') { event.preventDefault(); submitMyPatientsSearch(); }" required autofocus></div>
                    <button type="submit" class="myPatientsSearchBtn">Search</button> 
                </form>
            </div>
            <div class="myPatientsCardsDiv"></div>
        </div>
    </div>
</body>
</html>

<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
    exit();
} ?>