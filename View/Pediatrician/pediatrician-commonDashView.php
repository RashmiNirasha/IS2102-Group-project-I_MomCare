<?php
session_start();
include "../../Assets/Includes/header_pages.php";
include "../../Config/dbConnection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>

<?php 
$vid=$_GET['childid'];
$sql="select * from child_details where child_id='$vid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['child_name'];

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
        <h1>Welcome to the Dashboard of <?php echo $name ?></h1>
    </div>
</div>

<div class="card-pack">

<button class="card" onclick="window.location.href = '../Child/test.php?childid=<?php echo $vid; ?>'">
                <div class="card-content-left"><span class="material-symbols-outlined">Child_care</span></div>
                <div class="card-content-right"><p>Immunization Card</p></div>
            </button><!--gap remover -->

        <button class="card" onclick="window.location.href = 'enterNotes.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">description</span></div>
                <div class="card-content-right"><p>Doctor Notes</p></div>
            </button>

           <!--gap remover
        --><button class="card" onclick="window.location.href = 'pedia-searchChild.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">List</span></div>
                <div class="card-content-right"><p>View Child List</p></div>
            </button><!--gap remover -->
            <!--gap remover
        --><button class="card" onclick="window.location.href = 'pediatrician-viewNotesView.php ';">
                <div class="card-content-left"><span class="material-symbols-outlined">note_add</span></div>
                <div class="card-content-right"><p>Manage Notes</p></div>
            </button><!--gap remover -->
            
        
</div>
</header>
</html>
<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>