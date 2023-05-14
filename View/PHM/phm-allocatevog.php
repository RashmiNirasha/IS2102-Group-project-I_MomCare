<?php
    session_start();
    if (isset($_SESSION['email'])){
        include "../../Assets/Includes/header_pages.php";
        include "../../Config/phm-allocatevogprocess.php";
        $mom_id = $_GET['mom_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
            <h1>Allocate VOGs</h1>

            <div class='au-msg'> 
        <?php 

        if(isset($_GET['add_doc'])){
            if ($_GET['add_doc'] == 'success'){
                echo "<p class='au-nor-message'>Doctor Allocated Successfully.</p>";
            }

        }

        ?>
            </div>

            
            <div class="a-container-m">
            <a href = "phm-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
            </div>
            </div>
            <form class="ma-searchbar" action="phm-searchvog.php" style="margin-left:15%;max-width:300px" method="get">
                    <input type="text" placeholder="Search..." name="search">
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id?>" >
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
    <!-- <div class="ad-card-div"> -->
        <div class="ad-card-container">
            
        <?php

        if ($vog_result->num_rows>0){
            while($row = $vog_result->fetch_assoc()){
                $id = $row['doc_id'];
                $name = $row['doc_name'];
                $work = $row['doc_workplace'];

                $output = '<div class="ad-card">
                    <div class = "ad-title"><h4> Dr.';
                $output .= $name;

                $output .= "</br> ID - $id";
                $output .= '</h4></div>
                <div class="ad-location">
                    <i class="material-icons" alt="doctor icon">location_on</i>
                    <p>';
                $output .= $work;
                $output .= '</p>
                </div><a href="..\..\Config\phm-allocatevogSQLprocess.php?doc_id=';
                $output .=$id;
                $output .='&mom_id=';
                $output .=$mom_id;
                $output .='"><button class="ad-btn">Allocate</button></a></div>';
            echo $output;
            }
        }


        ?>
            <!-- <div class="ad-card">
            <i class="material-icons" alt="doctor icon">account_circle</i>
                <h4>Dr. Ama Dissanayake</h4>
                <div class="ad-location">
                    <i class="material-icons" alt="doctor icon">location_on</i>
                    <p>General Hospital, Colombo</p>
                </div>
                <div class="ad-btn">
                    <button>Allocate</button>
                </div>
            </div> -->
        </div>
        <!-- </div> -->
    </div>
        <div class="a-content-2">
            <span></span>
            <!-- <a href = "..\..\Config\admin-logout.php"><button>
                <div class="a-btn-text"><h6>Log out</h6></div>
                <i class="material-icons" alt="logout">logout</i>
            </button></a> -->
        </div>
    </div>
</body>
</html>

<?php
}else{
    header("Location:..\..\mainLogin.php");
}

?>