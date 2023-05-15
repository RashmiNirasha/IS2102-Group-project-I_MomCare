<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if(isset($_SESSION['email'])){ 
        include '../../Assets/Includes/header_pages.php'; 

        $mom_id = $_SESSION['mom_id'];

        $sql = "SELECT mom_regdate FROM mother_details WHERE mom_id = '$mom_id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $mom_regdate = $row['mom_regdate'];

        $currentDate = new DateTime();
        $registeredDateObj = new DateTime($mom_regdate);
        $interval = $registeredDateObj->diff($currentDate);
        $weekDifference = (int)($interval->format('%a') / 7); // Number of weeks difference

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Timeline</title>
    <style><?php include '../../Assets/Css/style-common.css'; ?></style> 

</head>
<body>
    <button class="goBackBtn" onclick="history.back()">Go back</button>
    <div class="weeks-container">
        <?php 
            for($i=1; $i< 43; $i++){
                ?>
                <a href="#" onclick="openPopup(<?php echo $i; ?>)">
                    <div class="week" id="week<?php echo $i; ?>">
                        <h3>Week <?php echo $i; ?></h3>
                    </div>
                </a>
                <?php
            }
        ?>
    </div>
    
    <?php
    $sql = "SELECT * FROM pregnancy_weeks";
    $result = mysqli_query($con, $sql);

    if($result){
        while($rows = mysqli_fetch_assoc($result)){
            ?>
            <div class="ins-popup" id="ins_popup<?php echo $rows['id']?>" style="display:none;" >
                <div class="ins-popup-inner">
                    <span class="momUpdatePopup-close" onclick="closePopup(<?php echo $rows['id']; ?>)">&times;</span>
                    <h2>Instructions for Week <?php echo $rows['week_number']; ?></h2>
                    <p><?php echo $rows['week_instructions']; ?></p>
                </div>
            </div>
            <?php
        }
    }
    ?>   
</body>
</html>

    <script> // Change the background color of the current week
        const weekDifference = <?php echo $weekDifference; ?>;
        const weeks = document.getElementById('week'+weekDifference);
        weeks.style.backgroundColor = "#24D4B9";
            
    </script>
    <script> // Popup
        function openPopup(id) {
            var popup = document.getElementById("ins_popup"+id);
            popup.style.display = "block";
        }
        function closePopup(id){
            var popup = document.getElementById("ins_popup"+id);
            popup.style.display = "none";
        }
    </script>
<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>





