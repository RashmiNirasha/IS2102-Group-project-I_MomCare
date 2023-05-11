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

    <script>
        function openInstructionsPopup(){
            document.getElementById("popup-window").style.display = "block";
        }
        function closeInstructionsPopup(){
            document.getElementById("popup-window").style.display = "none";
        }
    </script>

</head>
<body>
    <div class="content">
            <!-- topic and notifications -->

            <?php
                $doc_id = $_GET['doc_id'];
                $sql2 = "SELECT * FROM doctor_details WHERE doc_id = '$doc_id'";
                $result2 = mysqli_query($con, $sql2);
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $doc_name = $row2['doc_name'];
                    $doc_workplace = $row2['doc_workplace'];
                    // $doc_photo = $row2['doc_photo'];
                }
            ?>
            <div class="app-card">
                    <div class="dr-pro-pic">
                        <img src="../../Assets/Images/download.png" alt="">
                    </div>
                    <div class="details">
                        <h5> Dr. <?php echo $doc_name ?> </h5><br>
                        <p> <?php echo $doc_workplace ?> </p>
                    </div>
                    <div class="app-buttons">
                        <a href="">
                            <!-- <button class="app-view">View</button> -->
                        </a>
                    </div>
            </div>

            <?php
                $sql = "SELECT * FROM vog_instructions WHERE mom_id = '".$_SESSION['mom_id']."' AND doc_id = '$doc_id'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $doc_ins_id = $row['vog_ins_id'];
                    $doc_ins_date = $row['date'];
                    $doc_ins_time = $row['time'];
                    $timestamp = new DateTime($doc_ins_time);
                    $doc_ins_time = $timestamp->format('H:i');
                    $doc_ins_topic = $row['topic'];
                    $doc_ins_desc = $row['instruction'];

                    $output = '
                        <div class="sub-cards" onclick="openInstructionsPopup()">
                            <div class="med-ins">
                                <h4> '.$doc_ins_topic.' </h4>
                            </div>
                            <div class="med-ins1">
                                <div class="med-ins">
                                    <h4>'.$doc_ins_date.'  </h4>
                                </div>
                                <div class="med-ins">
                                    <h4>'.$doc_ins_time.'   </h4>
                                </div>
                            </div>
                        </div>';
                    echo $output;
                }    
            ?>

            <div class="popup-window" id="popup-window" style="display:none">
                <div class="popup-content">
                    <div class="med-ins" margin-left: -450px;>
                        <h4> <?php echo $doc_ins_topic ?> </h4>
                    </div>
                    <div class="med-ins1">
                        <div class="med-ins">
                            <h4> <?php echo $doc_ins_date ?> </h4>
                        </div>
                        <div class="med-ins">
                            <h4> <?php echo $doc_ins_time ?> </h4>
                        </div>
                    </div>
                    <div class="med-desc">
                        <p> <?php echo $doc_ins_desc ?> </p>
                    </div>
                    <button onclick= "closeInstructionsPopup()">Close</button>
                </div>
            </div>
    </div>
</body>
</html>

<?php 
    }
    else{
        header("Location: ../../index.php");
    }
?>