<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>
<?php
    if(isset($_POST['add_report'])){
        if(empty($_POST['test_name']) || empty($_POST['note'])) {
            $mom_id = $_POST['mom_id'];
            header("Location: ../../View/VOG/testsVog.php?mom_id=$mom_id&error2=Please fill all the fields!");
            exit();
        }else {
            include '../../Config/dbConnection.php';
            $test_name = $_POST['test_name'];
            $note = $_POST['note'];
            $mom_id = $_POST['mom_id'];
            $doc_id = $_POST['doc_id'];
            $target_file = "../../Assets/Images/uploads/tests/".$_FILES['test_report']['name'];
    
            $filex = pathinfo($target_file,PATHINFO_EXTENSION);
            $_FILES['test_report']['name'] = uniqid("test-") . "." . $filex;
            $test_report = $_FILES['test_report']['name'];
            $path = "../../Assets/Images/uploads/tests/".$test_report;
            $sql = "INSERT INTO doctor_notes (note_topic, note_description, note_records, mom_id) VALUES ('$test_name',' $note', '$test_report', '$mom_id')";
            $result = mysqli_query($con, $sql,);
    
            // file upload code -- start
            // reference: https://www.youtube.com/watch?v=ewDlz_shKzU
            if($result){
                move_uploaded_file($_FILES['test_report']['tmp_name'], $path);
            }
            // file upload code -- end

            header("Location: ../../View/VOG/testsVog.php?mom_id=$mom_id&error3=Record successfully added!");
            exit();
        }

    }
?>
<?php include "../../Assets/Includes/header_pages.php"; 
echo $_SESSION['mom_search'];
?>

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
    <a href="mothers.php"><button class="goBackBtn-motherPage">Go back</button></a>
        <div class="mom-intro">
            <img src="../../Assets/Images/mother/Profile_pic_mother.png" alt="mother-profile-pic">
            <div class="mom-intro-content">
                <?php
                    include '../../Config/dbConnection.php';
                    $mom_id = $_GET['mom_id'];
                    $query = "SELECT mom_fname, mom_lname, mom_id, mom_mobile FROM mother_details WHERE mom_id LIKE '%$mom_id%'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <h3 class="Name-header-mom"><?php echo $row['mom_fname']." ".$row['mom_lname']; ?></h3>
                <p class="num-header-mom"><?php echo $row['mom_mobile']; ?></p>
            </div>
        </div>
        <div class="add-report-label"><label for="add-report">Add report</label></div>
        <div class="add-report">
            <form class="test-form" action="" method="post" enctype="multipart/form-data">
                <div id="x"> 
                    <input type="text" name="test_name" id="test_name" placeholder="Test name">
                    <input type="text" name="note" id="note" placeholder="Special note">
                    <input type="file" name="test_report" id="test_report" placeholder="Upload report">
                    <input type="hidden" name="mom_id" value="<?php echo $row['mom_id']; ?>">
                    <input type="hidden" name="doc_id" value="<?php //echo $row['doc_id']; ?>">
                </div>
                    <input class="add-report-btn" name="add_report" type="submit" value="Add report">
            </form>
        </div>
        <?php
            if(isset($_GET['error2'])){ ?>
                <p class="error2"><?php echo $_GET['error2']; ?></p>
        <?php }else if(isset($_GET['error3'])){ ?>
                <p class="error3"><?php echo $_GET['error3']; ?> </p>
        <?php } ?>
        <div class="add-report-label"><label for="add-report">Search report</label></div>
        <div class="view-report">
            <table class="test-view-table">
                <tr>
                    <th>Doc. ID</th>
                    <th>Test name</th>
                    <th>Special note</th>
                    <th>Date</th>
                    <th>Edit report</th>
                    <th>View report</th>
                    <th>Delete</th>
                </tr>
                <?php
                    include '../../Config/dbConnection.php';
                    $sql = "SELECT * FROM doctor_notes WHERE mom_id = '$mom_id'";
                    $result = mysqli_query($con, $sql);
                    // $id = $_SESSION['id'];
                    // $filename = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <tr> 
                                    <td><?php echo $row['doc_id']?></td>
                                    <td><?php echo $row['note_topic'] ?> </td>
                                    <td><?php echo $row['note_description'] ?></td>
                                    <td><?php echo date("y-m-d") ?></td>
                                    <td><a href="testEdit.php"><input class='edit-report-btn' type='button' value='Edit'></a></td>
                                    <td><a target="_blank" href="../../Assets/Images/uploads/tests/<?php echo $row['note_records']; ?>"><input class='view-report-btn' type='button' value='View'></a></td>
                                    <td><a href="testRecordDelete.php?note_id=<?php echo $row['note_id']; ?>&mom_id=<?php echo $row['mom_id']; ?>"><input type="button" class="delete-report-btn" value="Delete"></a></td>
                                    <input type="hidden" name="note_id" value="<?php echo $row['note_id']; ?>">
                                    <!-- <input type="submit" name="delete" value="Delete"> -->
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