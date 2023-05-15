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
    <title>Pediatrician Instructions</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css">
</head>
<body>
    <div class="content">
    <button class="goBackBtn" onclick="history.back()">Go back</button>
            <!-- topic and notifications -->
            <div class="heading">
                <h1>Pediatrician Instructions</h1>
                <a href="#">
                    <span></span>
                </a>
            </div>

            <?php
                $sql = "SELECT distinct doc_id FROM ped_instructions WHERE mom_id = '".$_SESSION['mom_id']."'";
                $result = mysqli_query($con, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $doc_id = $row['doc_id'];
                        // $phm_ins_id = $row['phm_ins_id'];

                        $sql2 = "SELECT * FROM doctor_details WHERE doc_id = '$doc_id'";
                        $result2 = mysqli_query($con, $sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            $doc_name = $row2['doc_name'];
                            $doc_workplace = $row2['doc_workplace'];
                            // $doc_photo = $row2['doc_photo'];

                            $output = ' <div class="app-card">
                                <div class="dr-pro-pic">
                                    <img src="../../Assets/Images/download.png" alt="">
                                </div>
                                <div class="details">';
                                    $output .= "<h5> Dr. $doc_name </h5><br>";
                                    $output .= "<p> $doc_workplace </p>";
                            $output .=      '</div>
                                <div class="app-buttons">
                                    <a href="mother-viewVOGInstructionsList.php?doc_id='.$row['doc_id'].'">
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