<?php
    session_start();
    if (isset($_SESSION['email'])){
    include "../../Config/dbConnection.php";
    include "../../Assets/Includes/header_pages.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHM Instructions</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css">
</head>
<body>
    <div class="content">
    <button class="goBackBtn" onclick="history.back()">Go back</button>
            <!-- topic and notifications -->
            <div class="heading">
                <h1>PHM Instructions</h1>
                <a href="#">
                    <span></span>
                </a>
            </div>

            <?php
                $sql = "SELECT distinct phm_id FROM phm_instructions WHERE mom_id = '".$_SESSION['mom_id']."'";
                $result = mysqli_query($con, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $phm_id = $row['phm_id'];
                        // $phm_ins_id = $row['phm_ins_id'];

                        $sql2 = "SELECT * FROM phm_details WHERE phm_id = '$phm_id'";
                        $result2 = mysqli_query($con, $sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            $phm_name = $row2['phm_name'];
                            $phm_workplace = $row2['phm_workplace'];
                            // $phm_photo = $row2['phm_photo'];

                            $output = ' <div class="app-card">
                                <div class="dr-pro-pic">
                                    <img src="../../Assets/Images/download.png" alt="">
                                </div>
                                <div class="details">';
                                    $output .= "<h5> Ms. $phm_name </h5><br>";
                                    $output .= "<p> $phm_workplace </p>";
                            $output .=      '</div>
                                <div class="app-buttons">
                                    <a href="mother-viewPHMInstructionsList.php?phm_id='.$row['phm_id'].'">
                                        <button class="app-view">View</button>
                                    </a>
                                </div>
                            </div>';
                            echo $output;
                        }

                    }
                }
            ?>

             
    </div>
</body>
</html>

<?php 
    }
    else{
        header("Location: ../../index.php");
    }
?>