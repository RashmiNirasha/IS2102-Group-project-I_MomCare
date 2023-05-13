<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>
<?php include "../../Assets/Includes/header_pages.php" ?>
<?php 
$sql="SELECT doc_name, doc_id FROM doctor_details WHERE doc_email='".$_SESSION['email']."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$doc_name=$row['doc_name'];
$doc_id=$row['doc_id'];
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
    <div class="dashboard-vog">
        <div class="dashboard-header">
            <h1>Welcome to the dashboard Dr. <?php echo $doc_name ?></h1>
        </div>
        <div class="card-pack"><!--gap remover
        --><button class="card" onclick="window.location.href='vog-scheduleManager.php?doc_id=<?php echo $doc_id ?>'">
                <div class="card-content-left"><span class="material-symbols-outlined">acute</span></div>
                <div class="card-content-right"><p>My Calendar</p></div>
            </button><!--gap remover 
        --><button class="card" onclick="window.location.href = 'vog-motherSearch.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">pregnant_woman</span></div>
                <div class="card-content-right"><p>Mothers</p></div>
            </button><!--gap remover
        --><button class="card" onclick="window.location.href='vog-ChildSearch.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">child_care</span></div>
                <div class="card-content-right"><p>Children</p></div>
            </button><!-- gap remover 
        --><button class="card" onclick="window.location.href='vog-myPatients.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">patient_list</span></div>
                <div class="card-content-right"><p>My Patients</p></div>
            </button><!-- gap remover 
        --><button class="card" onclick="window.location.href='vog-addInstructions.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">feed</span></div>
                <div class="card-content-right"><p>Add Instructions</p></div>
            </button>
        </div> 
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>