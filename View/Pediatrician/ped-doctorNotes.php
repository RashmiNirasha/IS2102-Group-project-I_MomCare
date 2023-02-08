<?php 
    session_start();
    include '../../Config/dbConnection.php';
   
    if(isset($_POST['create'])){
        $doc_email = $_SESSION['email'];

    if (isset($_GET['query'])) {
        $user_id = mysqli_real_escape_string($con, $_GET['query']);       
    } else {
        header("Location: pediatrician-addNotesView.php?error=missingchildid");
        exit();
    }
    $note_topic = mysqli_real_escape_string($con, $_POST['note_topic']);
    $note_date = mysqli_real_escape_string($con, $_POST['note_date']);
    $note_description = mysqli_real_escape_string($con, $_POST['note_description']);
    $note_records = mysqli_real_escape_string($con, $_POST['note_records']);
    
    if (empty($note_topic) || empty($note_date) || empty($note_description) || empty($note_records)) {
        header("Location: pediatrician-addNotesView.php?error=emptyfields&note_topic=" . $note_topic . "&note_date=" . $note_date . "&note_description=" . $note_description . "&note_records=" . $note_records);
        exit();
    } else {
        $sql = "SELECT * FROM doctor_details WHERE doc_email='$doc_email'";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $doc_id = $row['doc_id'];
        $doc_type = $row['doc_type'];

        if ($resultCheck > 0) {
            $sql = "INSERT into doctor_notes(doc_id, child_id,note_topic, note_date, note_description, note_records,doc_role)
                    VALUES ('$doc_id','$user_id','$note_topic','$note_date','$note_description','$note_records','$doc_type')";
            $result = mysqli_query($con, $sql);
    
            if ($result) {
                header("Location: pediatrician-viewNotesView.php?success=noteadded");
                exit();
            } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($con);
                exit();
            }
        }
    }

        // if(empty($_POST['test_name']) || empty($_POST['note'])) {
        //     $color = "red";
        //     header("Location: ../../View/VOG/testsVog.php?error2=Please fill all the fields & $color");
        //     exit();
        // }else {
        //     include '../../Config/dbConnection.php';
        //     $test_name = $_POST['test_name'];
        //     $note = $_POST['note'];
        //     $target_file = "../../Assets/Images/uploads/tests/".$_FILES['test_report']['name'];
    
        //     $filex = pathinfo($target_file,PATHINFO_EXTENSION);
        //     $_FILES['test_report']['name'] = uniqid("test-") . "." . $filex;
        //     $test_report = $_FILES['test_report']['name'];
        //     $path = "../../Assets/Images/uploads/tests/".$test_report;
        //     $sql = "INSERT INTO vog_tests (test_name, note, test_report) VALUES ('$test_name',' $note','$test_report')";
        //     $result = mysqli_query($con, $sql,);
    
        //     // file upload code -- start
        //     // reference: https://www.youtube.com/watch?v=ewDlz_shKzU
        //     if($result){
        //         move_uploaded_file($_FILES['test_report']['tmp_name'], $path);
        //     }
        //     // file upload code -- end
        // }

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
                <h3 class="Name-header-mom"><?php //echo $user_id ?></h3>
                <p class="num-header-mom">0712345678</p>
            </div>
        </div>
        <div class="add-report-label"><label for="add-report">Add report</label></div>
        <div class="add-report">
        <form class="test-form" id="pediareicianAddNotes" action="pediatrician-addNotesView.php?childid=<?php echo $_GET['query']?>" method="POST">
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
        <td><input type="file" name="note_records" id="note_records" ></td>
    </tr>
    
</table>
<input class="add-report-btn" name="create" type="submit" value="Add report">
<script>
    function getDetails(){
       $sql = "SELECT * FROM child_details";


    }

    </script>
                <script>
                    function clearForm() {
                        document.getElementById("PediatrianAddNotesForm").reset();
                    }
                </script>
 <button type="clear" name="clear" onclick="clearForm()">Clear</button>
</form>
        
        </div>
        <?php
            if(isset($_GET['error2'])){ ?>
                <p class="error2"><?php echo $_GET['error2']; ?></p>
        <?php } ?>
        <div class="add-report-label"><label for="add-report">Search report</label>
        <form action=" " method="GET">
            <input class="mom-search" type="search" name="query" id="query" placeholder="Please enter a search term (Ex: First name, Last name, Child ID)" required autofocus>
            <input type="submit" name="submit" value="Search">
            </form>
    </div>
    <div class="view-report">

    <?php 
        include "../../Config/dbConnection.php";

        if(isset($_GET['submit'])){
            $Child_id=$_GET['query'];
        $sql = "SELECT * FROM doctor_notes inner join child_details on doctor_notes.child_id=child_details.child_id WHERE doctor_notes.child_id LIKE '%$Child_id%' OR child_details.child_name like '%$Child_id%' ORDER BY doctor_notes.note_date DESC";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<table class='test-view-table'>
                <tr>
                    <th>Child id</th>
                    <th>Doctor id</th>
                    <th>Mother id</th>
                    <th>Note topic</th>
                    <th>Note description</th>
                    <th>Note date</th>
                    <th>Note records</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>View</th>
                </tr>
                <tr><td>" . $row['child_id'] . "</td><td>" . $row['doc_id'] . "</td><td>" . $row['mom_id'] . "</td><td>" . $row['note_topic'] . "</td><td>" . $row['note_description'] . "</td><td>" . $row['note_date'] . "</td><td>" . $row['note_records'] . "</td>
                <td><a href='pediatrician-updateNotesView.php?updateid=" . $row['note_id'] . "'><button class='btnMain'>Update</button></a></td>
                <td><a href='../../Config/ped-deleteNotes.php?deleteid=" . $row['note_id'] . "'><button class='btnMain'>Delete</button></a></td>
                <td><a href='../../Assets/Images/uploads/tests/" . $row['note_records']."><input class='view-report-btn' type='button' value='View'></a></td>
                </tr>";
            } echo "</table>";
        }
        else{
            mysqli_error($con);
        }
        }       
        ?>  
    </div>     
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
<?php //}else{
   // header("Location: ../../mainLogin.php");
    //exit();
//} ?>