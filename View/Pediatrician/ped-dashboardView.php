<?php
session_start();

include "../../Config/dbConnection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { 
    include "../../Assets/Includes/header_pages.php";
    ?>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style><?php include "../../Assets/css/style-common.css" ?></style>

    <script type = "text/javascript">
        $(document).ready(function(){
        
        function load_unseen_notification(view = ''){
            $.ajax({
                url:"ped-notification.php",
                method:"POST",
                data:{view:view},
                dataType:"json",
                success:function(data)
                {
                $('.dropdown-menu').html(data.notification);
                // if(data.unseen_notification > 0){
                $('.count').html(data.unseen_notification);
                // }
                }
            });
        }
    
        load_unseen_notification();
            $(document).on('click', '.dropdown-toggle', function(){
            $('.count').html('');
            if ($(".dropdown-menu").hasClass("hide"))
            {
                $(".dropdown-menu").removeClass("hide");
            }else {
                $(".dropdown-menu").addClass("hide");
            }
            load_unseen_notification('yes');
            });
            setInterval(function(){ 
                load_unseen_notification();; 
            }, 5000);
        });

    </script>
</head>
<body>
    <div class="ped-Dashboard">
        <div class="dashboard-header">
            <h1>Welcome to the Dashboard Dr. <?php echo $doc_name ?></h1>
            <!-- <div class="dropdown">
                <a href="#" class="dropdown-toggle">
                    <span class="label label-pill label-danger count">0</span>
                    <span class="material-symbols-outlined" data-icon="notify">notifications</span>
                </a>
                <ul class="dropdown-menu hide">
                </ul>
            </div> -->
        </div>
    </div>
    <div class="card-pack">
        <button class="card" onclick="window.location.href = 'ped-childCardSearchView.php';">
            <div class="card-content-left"><span class="material-symbols-outlined">Child_care</span></div>
            <div class="card-content-right"><p>Child Management</p></div>
        </button><!--gap remover -->
        <button class="card" onclick="window.location.href = 'ped-searchChild.php';">
            <div class="card-content-left"><span class="material-symbols-outlined">List</span></div>
            <div class="card-content-right"><p>View Child List</p></div>
        </button><!--gap remover -->
        <button class="card" onclick="window.location.href = 'ped-scheduleManager.php?doc_id=<?php echo $_SESSION['user_id']; ?>';">
            <div class="card-content-left"><span class="material-symbols-outlined">note_add</span></div>
            <div class="card-content-right"><p>Manage Shedule</p></div>    
    </div>
</body>
</html>

<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>