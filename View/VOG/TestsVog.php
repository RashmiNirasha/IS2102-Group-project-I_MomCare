<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>
<?php
    if(isset($_POST['add_report'])){
        if(empty($_POST['test_name']) || empty($_POST['note'])) {
            $color = "red";
            header("Location: ../../View/VOG/testsVog.php?error2=Please fill all the fields & $color");
            exit();
        }else {
            include '../../Config/dbConnection.php';
            $test_name = $_POST['test_name'];
            $note = $_POST['note'];
            $target_file = "../../Assets/Images/uploads/tests/".$_FILES['test_report']['name'];
    
            $filex = pathinfo($target_file,PATHINFO_EXTENSION);
            $_FILES['test_report']['name'] = uniqid("test-") . "." . $filex;
            $test_report = $_FILES['test_report']['name'];
            $path = "../../Assets/Images/uploads/tests/".$test_report;
            $sql = "INSERT INTO vog_tests (test_name, note, test_report) VALUES ('$test_name',' $note','$test_report')";
            $result = mysqli_query($con, $sql,);
    
            // file upload code -- start
            // reference: https://www.youtube.com/watch?v=ewDlz_shKzU
            if($result){
                move_uploaded_file($_FILES['test_report']['tmp_name'], $path);
            }
            // file upload code -- end
        }

    }
?>
<?php include "../../Assets/Includes/header_pages.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="main-mother">
        <div class="mom-intro">
            <img src="../../Assets/Images/mother/Profile_pic_mother.png" alt="mother-profile-pic">
            <div class="mom-intro-content">
                <h3 class="Name-header-mom">Mrs. Indrani Perera</h3>
                <p class="num-header-mom">0712345678</p>
            </div>
        </div>
        <div class="add-report-label"><label for="add-report">Add report</label></div>
        <div class="add-report">
            <form class="test-form" action="" method="post" enctype="multipart/form-data">
                <div id="x"> 
                    <input type="text" name="test_name" id="test_name" placeholder="Test name">
                    <input type="text" name="note" id="note" placeholder="Special note">
                    <input type="file" name="test_report" id="test_report" placeholder="Upload report">
                </div>
                    <input class="add-report-btn" name="add_report" type="submit" value="Add report">
            </form>
        </div>
        <?php
            if(isset($_GET['error2'])){ ?>
                <p class="error2"><?php echo $_GET['error2']; ?></p>
        <?php } ?>
        <div class="add-report-label"><label for="add-report">Search report</label></div>
        <div class="view-report">
            <table class="test-view-table">
                <tr>
                    <th>Test name</th>
                    <th>Special note</th>
                    <th>Date</th>
                    <th>Edit report</th>
                    <th>View report</th>
                </tr>
                <?php
                    include '../../Config/dbConnection.php';
                    $sql = "SELECT * FROM vog_tests";
                    $result = mysqli_query($con, $sql);
                    // $id = $_SESSION['id'];
                    // $filename = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){ 
                    
                            echo "<tr> 
                                <td>".$row['test_name']."</td>
                                <td>".$row['note']."</td>
                                <td>".$row['test_date']."</td>" ?>
                                <td><a href="testEdit.php"><input class='view-report-btn' type='button' value='Edit'></a></td>
                                <td><a target="_blank" href="../../Assets/Images/uploads/tests/<?php echo $row['test_report']; ?>"><input class='view-report-btn' type='button' value='View'></a></td>
                                <!-- <td><a href="download.php?test_report=<?php //echo $row['test_report']; ?>"><input class='view-report-btn' type='button' value='View'></a></td> -->
                                </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>
    <!--logout button-->
    <div class="log-out">
    <button onclick="window.location.href='../../Config/logout.php';" class="log-out-btn">Log out</button>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
    exit();
} ?>