<?php
session_start();
include "../../Assets/Includes/header_pages.php";
include "../../Config/dbConnection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>

<?php 
$sql="SELECT doc_name FROM doctor_details WHERE doc_email='".$_SESSION['email']."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$doc_name=$row['doc_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
<div class="ped-Dashboard">
    <div class="dashboard-header">
        <h1>Welcome to the Dashboard Dr. <?php echo $doc_name ?></h1>
    </div>
</div>
<div class="card-pack"><!--gap remover
        --><button class="card" onclick="window.location.href = 'pediatrician-childCardSearchView.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">Child_care</span></div>
                <div class="card-content-right"><p>Child Management</p></div>
            </button><!--gap remover -->
         
        <button class="card" onclick="window.location.href = ' enterNotes.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">description</span></div>
                <div class="card-content-right"><p>Doctor Notes</p></div>
            </button>

           <!--gap remover
        --><button class="card" onclick="window.location.href = 'childs.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">List</span></div>
                <div class="card-content-right"><p>View Pateint Details</p></div>
            </button><!--gap remover -->
            <!--gap remover
        --><button class="card" onclick="window.location.href = 'pediatrician-viewNotesView.php ';">
                <div class="card-content-left"><span class="material-symbols-outlined">note_add</span></div>
                <div class="card-content-right"><p>Manage Notes</p></div>
            </button><!--gap remover -->
            
        <div class="log-out"> <!--logout button-->
        <button onclick="window.location.href='../../Config/logout.php';" class="log-out-btn">Log out</button>
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