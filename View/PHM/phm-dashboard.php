<?php
    session_start();
    if (isset($_SESSION['email'])){
        include "../../Assets/Includes/header_pages.php";
?>
<?php 
$sql="SELECT phm_name, phm_id FROM phm_details WHERE phm_email='".$_SESSION['email']."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$phm_name=$row['phm_name'];
$phm_id=$row['phm_id'];
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
</head>
<body>
    <div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
            <h1>Welcome to the Dashboard Dr. <?php echo $phm_name ?></h1>
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

                <a href="phm-scheduleManager.php?phm_id=<?php echo $phm_id ?>"><div class="p-card">
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

                <a href="child-addchild.php"><div class="p-card">
                <div class="a-icon-case">
                    <i class="material-icons" alt="records">library_books</i>
                </div>
                <div class="a-box">
                    <h3>Maintain Child Records</h3>
                </div>
                </div> 
                </a>

                <!-- <a href="../../View/PHM/phm-addChildRecords.php"><div class="p-card">
                <div class="a-icon-case">
                     <i class="material-icons" alt="records">library_books</i> 
                </div>
                <div class="a-box">
                    <h3>Maintain Pregnancy Records</h3>
                </div>
                </div> 
                </a> -->

            </div>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header("Location:admin-login.php");
}

?>