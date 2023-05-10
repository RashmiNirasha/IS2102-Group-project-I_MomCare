<?php
    session_start();
    if (isset($_SESSION['email'])){
        include "../../Assets/Includes/header_pages.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHM Panel</title>
    <link rel="stylesheet" href="..\..\Assets\css\style-common.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <!-- <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style> -->
</head>
<body>
    <div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
            <h1>PHM Dashboard</h1>
            <div class="a-container-m">
            <a href = "phm-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
            </div>
            </div>
            <div class="p-cards">

                <a href="phm-handlerequests.php"><div class="p-card">
                <div class="a-icon-case">
                     <i class="material-icons" alt="pregnant woman">pregnant_woman</i> 
                </div>
                <div class="a-box">
                    <h3>Manage Registrations</h3>
                </div>
                </div> 
                </a>

                <a href="#"><div class="p-card">
                <div class="a-icon-case">
                    <i class="material-icons" alt="calendar icon">edit_calendar</i>
                </div>
                <div class="a-box">
                    <h3>Manage calendar</h3>
                 </div>
                </div> 
                </a>

                <a href="phm-mothers.php"><div class="p-card">
                <div class="a-icon-case">
                    <i class="material-icons" alt="mother icon">escalator_warning</i>
                </div>
                <div class="a-box">
                    <h3>Manage Mothers</h3>
                </div>
                </div> 
                </a>

                <a href="phm-children.php"><div class="p-card">
                <div class="a-icon-case">
                     <i class="material-icons" alt="child icon">child_care</i> 
                </div>
                <div class="a-box">
                    <h3>Manage Children</h3>
                </div>
                </div> 
                </a>

                <a href="phm-addchildprofile.php"><div class="p-card">
                <div class="a-icon-case">
                    <i class="material-icons" alt="records">library_books</i>
                </div>
                <div class="a-box">
                    <h3>Maintain Child Records</h3>
                </div>
                </div> 
                </a>

                <a href="../../View/PHM/phm-addChildRecords.php"><div class="p-card">
                <div class="a-icon-case">
                     <i class="material-icons" alt="records">library_books</i> 
                </div>
                <div class="a-box">
                    <h3>Maintain Pregnancy Records</h3>
                </div>
                </div> 
                </a>

            </div>
        </div>

        <!-- <div class="a-content-2">
            <span></span>
            <a href = "..\..\Config\admin-logout.php"><button>
                <div class="a-btn-text"><h6>Log out</h6></div>
                <i class="material-icons" alt="logout">logout</i>
            </button></a>
        </div> -->
    </div>
</body>
</html>

<?php
}else{
    header("Location:admin-login.php");
}

?>