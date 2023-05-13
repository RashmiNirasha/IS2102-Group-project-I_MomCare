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
    <?php 
        $sql="SELECT phm_name, phm_id FROM phm_details WHERE phm_email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $phm_name=$row['phm_name'];
        $phm_id=$row['phm_id'];
    ?>
</head>
<body>
<div class="dashboard-vog">
        <div class="dashboard-header">
            <h1>Welcome to the dashboard Ms. <?php echo $phm_name ?></h1>
        </div>
        <div class="card-pack"><!--gap remover
        --><button class="card" onclick="window.location.href='phm-handlerequests.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">patient_list</span></div>
                <div class="card-content-right"><p>Manage Registrations</p></div>
            </button><!--gap remover 
        --><button class="card" onclick="window.location.href = ''">
                <div class="card-content-left"><span class="material-symbols-outlined">acute</span></div>
                <div class="card-content-right"><p>Manage calendar</p></div>
            </button><!--gap remover
        --><button class="card" onclick="window.location.href='phm-children.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">child_care</span></div>
                <div class="card-content-right"><p>Manage Children</p></div>
            </button><!-- gap remover 
        --><button class="card" onclick="window.location.href='phm-mothers.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">pregnant_woman</span></div>
                <div class="card-content-right"><p>Manage Mothers</p></div>
            </button><!-- gap remover 
        --><button class="card" onclick="window.location.href='child-addchild.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">library_books</span></div>
                <div class="card-content-right"><p>Maintain Child Records</p></div>
            </button><!-- gap remover 
        --><button class="card" onclick="window.location.href='../../View/PHM/phm-addChildRecords.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">library_books</span></div>
                <div class="card-content-right"><p>Maintain Pregnancy Records</p></div>
            </button>
        </div> 
    </div>
</body>
</html>

<?php
}else{
    header("Location:admin-login.php");
}

?>