<?php 
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>

    <?php
    include "../../Config/dbConnection.php";
    if (isset($_POST['submit'])) {
    
        $doc_email = $_SESSION['email'];

        if (isset($_GET['childid'])) {
            $user_id = mysqli_real_escape_string($con, $_GET['childid']);       
        } else {
            header("Location: ped-doctorNotes.php?error=missingchildid");
            exit();
        }
        $note_topic = mysqli_real_escape_string($con, $_POST['note_topic']);
        $note_date = mysqli_real_escape_string($con, $_POST['note_date']);
        $note_description = mysqli_real_escape_string($con, $_POST['note_description']);
        $note_records = mysqli_real_escape_string($con, $_POST['test_report']);
        
        if (empty($note_topic) || empty($note_date) || empty($note_description) || empty($note_records)) {
            echo "Please fill all the fields";
            exit();
        } else {
            $sql = "SELECT * FROM doctor_details WHERE doc_email='$doc_email'";
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            $doc_id = $row['doc_id'];
            $doc_type = $row['doc_type'];
            $target_file = "../../Assets/Images/uploads/tests/".$_FILES['test_report']['name'];
            $filex = pathinfo($target_file,PATHINFO_EXTENSION);
            $_FILES['test_report']['name'] = uniqid("test-") . "." . $filex;
            $test_report = $_FILES['test_report']['name'];
            $path = "../../Assets/Images/uploads/tests/".$test_report;

            if ($resultCheck > 0) {
                $sql = "INSERT into doctor_notes(doc_id, child_id,note_topic, note_date, note_description, note_records,doc_role)
                        VALUES ('$doc_id','$user_id','$note_topic','$note_date','$note_description','$test_report','$doc_type')";
                $result = mysqli_query($con, $sql);
        
                if ($result) {
                    move_uploaded_file($_FILES['test_report']['tmp_name'], $path);
                    header("Location: ped-doctorNotes.php?childid=$user_id");
                    exit();
                } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    exit();
                }
            }
        }
    }
?>
<?php include "../../Assets/Includes/header_pages.php"; 
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
        <div class="mom-intro">
            <img src="../../Assets/Images/mother/Profile_pic_mother.png" alt="mother-profile-pic">
            <div class="mom-intro-content">
                <?php
                include "../../Config/dbConnection.php";
                $child_id=$_GET['childid'];
                    $query = "SELECT child_name, child_gender FROM child_details WHERE child_id LIKE '%$child_id%'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_assoc($result);

                ?>
                <h3 class="Name-header-mom"><?php echo $row['child_name']; ?></h3>
                <p class="num-header-mom"><?php echo $row['child_gender']; ?></p>
            </div>
        </div>
        <div class="add-report-label"><label for="add-report">Add report</label></div>
        <div class="add-report">
        <form class="PediatrianAddNotesForm" id="pediareicianAddNotes" action="ped-doctorNotes.php?childid=<?php echo $_GET['childid']?>" method="POST">
<table>
    <tr>
        <td><input type="hidden" name="doctor_id" id="doctor_id"></td>
    </tr>
    <tr>
        <td><input type="hidden" placeholder="Search..." name="child_id" id="child_id"></td>
    </tr>
    <tr>
        <td><label for="note_date">Choose Date</label></td>
        <td><input type="date" name="note_date" id="note_date" ></td>
    </tr>
    <tr>
        <td><label for="note_topic">Title</label></td>
        <td><input type="text" name="note_topic" id="note_topic" ></td>
    </tr>
    <tr>
        <td><label for="note_description">Description</label></td>
        <td><textarea name="note_description" id="note_description" ></textarea></td>
    </tr>
    <tr>
        <td><label for="note_records">Select File to Upload</label></td>
        <td><input type="file" name="test_report" id="test_report" placeholder="Upload report"></td>
    </tr>
    
</table>
<button type="submit" name="submit">Create</button>

                <script>
                    function clearForm() {
                        document.getElementById("PediatrianAddNotesForm").reset();
                    }
                </script>
 <button type="clear" name="clear" onclick="clearForm()">Clear</button>
 <a href=" pediatrician-viewNotesView.php"><button class="pd-viewNote-btnMain" >View Notes</button></a>
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
                    $child_id=$_GET['childid'];
                    $sql = "SELECT * FROM doctor_notes WHERE child_id = '$child_id'";
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
                                    <td><?php echo $row['note_date'] ?></td>
                                    <td><a href="testEdit.php"><input class='edit-report-btn' type='button' value='Edit'></a></td>
                                    <td><a target="_blank" href="../../Assets/Images/uploads/tests/<?php echo $row['note_records']; ?>"><input class='view-report-btn' type='button' value='View'></a></td>
                                    <td><a href="#"><input type="button" class="delete-report-btn" value="Delete"></a></td>
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

<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>