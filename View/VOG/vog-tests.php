<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>

    <!-- Reprt add model -->
    <?php
        if(isset($_POST['add_report'])){
            if(empty($_POST['test_name']) || empty($_POST['note'])) {
                $mom_id = $_POST['mom_id'];
                header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error2=Please fill all the fields!");
                exit();
            } else {
                $test_name = mysqli_real_escape_string($con, $_POST['test_name']);
                $note = mysqli_real_escape_string($con, $_POST['note']);
                $mom_id = $_POST['mom_id'];
                $email = $_SESSION['email'];
                $doc_id = $_SESSION['id'];
                $target_file = "../../Assets/Images/uploads/tests/".$_FILES['test_report']['name'];
                $filex = pathinfo($target_file,PATHINFO_EXTENSION);
                $_FILES['test_report']['name'] = uniqid("test-") . "." . $filex;
                $test_report = $_FILES['test_report']['name'];
                $path = "../../Assets/Images/uploads/tests/".$test_report;
                $sql = "INSERT INTO doctor_notes (doc_id, note_topic, note_description, note_records, mom_id) VALUES ('$doc_id', '$test_name', '$note', '$test_report', '$mom_id')";
                $result = mysqli_query($con, $sql);

                // file upload code -- start
                // reference: https://www.youtube.com/watch?v=ewDlz_shKzU
                if($result){
                    move_uploaded_file($_FILES['test_report']['tmp_name'], $path);
                }
                // file upload code -- end

                header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error3=Record successfully added!");
                exit();
            }
        }
    ?>

    <!-- Report edite model -->
    <?php
        if(isset($_POST['update_button'])){
            if(empty($_POST['updated_test_name']) || empty($_POST['updated_note'])) {
                $mom_id = $_POST['mom_id'];
                header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error2=Please fill all the fields!");
                echo "Please fill all the fields!";
                exit();

            }else {
                $target_file = "../../Assets/Images/uploads/tests/".$_FILES['updated_test_report']['name'];
                $filex = pathinfo($target_file,PATHINFO_EXTENSION);
                $_FILES['updated_test_report']['name'] = uniqid("test-") . "." . $filex;
                $updated_test_report = $_FILES['updated_test_report']['name'];
                $path = "../../Assets/Images/uploads/tests/".$updated_test_report;
                $updated_test_name = $_POST['updated_test_name'];
                $updated_note = $_POST['updated_note'];
                $note_id = $_POST['note_id'];
                $mom_id = $_POST['mom_id'];
                $doc_id = $_POST['doc_id'];
                $_FILES['test_report']['error'] = 0;

                $finishUpdate = "UPDATE doctor_notes SET note_topic = '$_POST[updated_test_name]', note_description = '$_POST[updated_note]', note_records = '$updated_test_report' WHERE note_id = '$_POST[note_id]'";
                $finalUpdateResult = mysqli_query($con, $finishUpdate);
                
                // file upload code -- start
                if (move_uploaded_file($_FILES['updated_test_report']['tmp_name'], $path)) {
                    echo "The file ". basename( $_FILES['updated_test_report']['name']). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                // file upload code -- end

                header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error3=Record successfully Updated!");
                exit();
            }

        }
    ?>

<?php   include "../../Assets/Includes/header_pages.php"; 
////echo $_SESSION['mom_search'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>

    <script><?php include 'vog-tests.js' ?></script>
</head>
<body>
<button class="goBackBtn" onclick="history.back()">Go back</button>
    <div class="main-mother-div">
        <div class="mom-intro">
            <div>
                <img src="../../Assets/Images/mother/Profile_pic_mother.png" alt="mother-profile-pic">
            </div>

            <!-- Mother header bar -->
            <div class="mom-intro-content">
                <?php
                    $mom_id = $_GET['mom_id'];
                    $query = "SELECT mom_fname, mom_lname, mom_id, mom_mobile FROM mother_details WHERE mom_id LIKE '%$mom_id%'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <h3 class="Name-header-mom"><?php echo $row['mom_fname']." ".$row['mom_lname']; ?></h3>
                <p class="num-header-mom"><?php echo $row['mom_mobile']; ?></p>
            </div>
        </div>

        <!-- New Report adding section -->
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
                    <input class="add-report-btn" onclick="window.location.href='../vog-testAdd.php'" name="add_report" type="submit" value="Add report">
            </form>
        </div>

        <!-- Form action status mesages -->
        <?php
            if(isset($_GET['error2'])){ ?>
                <p class="error2"><?php echo $_GET['error2']; ?></p>
        <?php }else if(isset($_GET['error3'])){ ?>
                <p class="error3"><?php echo $_GET['error3']; ?> </p>
        <?php } ?>

        <!-- View Report section -->
        <div class="viewReportMainDiv">
        <div class="view-report-label"><label for="add-report">Report table</label></div>
        <div class="view-report">
            <table class="test-view-table">
                <thead>
                    <tr>
                        <th>Doc. name</th>
                        <th>Test name</th>
                        <th>Special note</th>
                        <th>Date</th>
                        <th>Edit report</th>
                        <th>View report</th>
                        <th>Delete</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Get doctor note details from the database
                    $sql = "SELECT * FROM doctor_notes WHERE mom_id = '$mom_id'";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            //getting the doctor name from the doctor details table
                            $docd = "SELECT doc_name FROM doctor_details WHERE doc_id = '$row[doc_id]' ";
                            $docdresult = mysqli_query($con, $docd);
                            $docdrow = mysqli_fetch_assoc($docdresult);
                            $doc_name = $docdrow['doc_name'];
                            //echoing the doctor note details
                            echo '<tr>
                                    <td>Dr. ' . $doc_name . '</td>
                                    <td>' . $row['note_topic'] . '</td>
                                    <td>' . $row['note_description'] . '</td>
                                    <td>' . date("y-m-d") . '</td>
                                    <td><a href="./vog-tests.php?note_id=' .$row['note_id']. '&mom_id=' . $row['mom_id'] . '" onclick="return confirmUpdate(), editPopupFunction()"><input class="edit-report-btn" name="edite_report" type="button" value="Edit"></a></td>
                                    <td><a target="_blank" href="../../Assets/Images/uploads/tests/' . $row['note_records'] . '"><input class="view-report-btn" type="button" value="View"></a></td>
                                    <td><a href="vog-testRecordDelete.php?note_id=' . $row['note_id'] . '&mom_id=' . $row['mom_id'] . '&doc_id=' . $row['doc_id'] . '" onclick="return confirmDelete();"><input type="button" class="delete-report-btn" value="Delete"></a></td>
                                </tr>';
                        }
                    }else{
                        //if no records found
                        echo '<tr><td colspan="7">No records found!</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
        <div >
            <?php
                //update doctor note details
                if(!empty($_GET['note_id'])) {
                    $note_id = $_GET['note_id'];
                    $updateQuery = "SELECT * FROM doctor_notes WHERE note_id = '$note_id'";
                    $updateResult = mysqli_query($con, $updateQuery);
                    $row = mysqli_fetch_assoc($updateResult);

                    echo '<div class="editPopup">
                    <form action="./vog-tests.php?note_id='. $row['note_id'] .'" method="post" enctype="multipart/form-data">
                        <h3>Edit report</h3>
                        <label for="upated-test-name">Test name</label>
                        <input type="text" name="updated_test_name" id="updated_test_name" value="'. $row['note_topic'] .'">
                        <label for="upated-note">Special note</label>
                        <textarea name="updated_note" id="updated_note" cols="10" rows="10">'. $row['note_description'] .'</textarea>
                        <label for="upated-test-report">Upload report</label>
                        <input type="file" name="updated_test_report" id="updated_test_report" value="'. $row['note_records'] .'">
                        <input type="hidden" name="mom_id" value="'. $row['mom_id'] .'">
                        <input type="hidden" name="doc_id" value="'. $row['doc_id'] .'">
                        <input type="hidden" name="note_id" value="'. $row['note_id'] .'">
                        <div class="editPopupBtn">
                            <a href="./vog-tests.php?mom_id='.$row['mom_id'].'"><input type="button" name="cancel" value="Cancel"></a>
                            <input type="submit" name="update_button" value="Update">
                        </div>
                    </form>
                    </div>';
             } ?>
        </div>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
    exit();
} ?>