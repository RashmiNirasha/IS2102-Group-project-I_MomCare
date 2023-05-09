<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email']) && isset($_SESSION['id'])) { 

    include "../../Assets/Includes/header_pages.php" ;

    // fetch childid from the url and store it in a variable
    $child_id = $_GET['child_id'];
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
    <div class="child-dashboard">
        <div class="card-pack">
       <button class="card" onclick="window.location.href = 'child-ChildCardView.php?child_id=<?php echo $_GET['child_id']; ?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">description</span></div>
                <div class="card-content-right"><p>Child Cards</p></div>
            </button><!--gap remover -->
            
       <button class="card" onclick="window.location.href = 'child-immunizationView.php?child_id=<?php echo $_GET['child_id']; ?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">vaccines</span></div>
                <div class="card-content-right"><p>Immunization Card</p></div>
            </button>

            <button class="card" onclick="window.location.href = 'child-viewMedicalNotes.php?child_id=<?php echo $_GET['child_id']; ?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">note_add</span></div>
                <div class="card-content-right"><p>Medical Notes</p></div>
            </button>
            <button class="card" onclick="window.location.href = 'child-chartsView.php?child_id=<?php echo $_GET['child_id']?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">calculate</span></div>
                <div class="card-content-right"><p>BMI Calculator</p></div>
            </button>
            
            </button>
        </div>
    </div>

</body>
</html>
<?php } else {
    header("Location: ../../mainLogin.php");
    exit();}
?>