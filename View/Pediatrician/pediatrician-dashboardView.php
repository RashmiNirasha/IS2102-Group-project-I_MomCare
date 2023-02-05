<?php
//session_start();
include "../../Assets/Includes/header_pages.php";
include "../../Config/dbConnection.php";
//if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
<div class="dashboard">
<div class="card-pack"><!--gap remover
        --><button class="card" ><a href="pediatrician-childCardSearchView.php"></a>
                <div class="card-content-left"><span class="material-symbols-outlined">acute</span></div>
                <div class="card-content-right"><p>Child Card Management</p></div>
            </button><!--gap remover -->
            <div class="card-pack"><!--gap remover
        --><button class="card"><a href="EngSignup.php"></a>
                <div class="card-content-left"><span class="material-symbols-outlined">acute</span></div>
                <div class="card-content-right"><p>Immunization Details</p></div>
            </button><!--gap remover -->
            <div class="card-pack"><!--gap remover
        --><button class="card"><a href="pediatrician-addNotesView.php"></a>
                <div class="card-content-left"><span class="material-symbols-outlined">acute</span></div>
                <div class="card-content-right"><p>Enter Notes</p></div>
            </button><!--gap remover -->
            <div class="card-pack"><!--gap remover
        --><button class="card"><a href="pediatrician-viewNotesView.php"></a>
                <div class="card-content-left"><span class="material-symbols-outlined">acute</span></div>
                <div class="card-content-right"><p>View Doctor's Notes</p></div>
            </button><!--gap remover -->
            <div class="card-pack"><!--gap remover
        --><div class="log-out"> <!--logout button-->
        <button onclick="window.location.href='logout.php';" class="log-out-btn">Log out</button>
    </div>     
</div>
        <?php //include_once '../../Assets/Includes/ped-footer.php';?>
</header>
</html>
<?php
// } else {
//    header("Location: ../../mainLogin.php");
//     exit();
//}?>