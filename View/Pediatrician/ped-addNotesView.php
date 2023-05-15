<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
<?php
    
    include "../../Assets/Includes/header_pages.php";
    include "../../Config/dbConnection.php";

    if (isset($_POST['submit'])) {
    
        $doc_email = $_SESSION['email'];

        if (isset($_GET['childid'])) {
            $user_id = mysqli_real_escape_string($con, $_GET['childid']);       
        } else {
            header("Location: pediatrician-addNotesView.php?error=missingchildid");
            exit();
        }
        $note_topic = mysqli_real_escape_string($con, $_POST['note_topic']);
        $note_date = mysqli_real_escape_string($con, $_POST['note_date']);
        $note_description = mysqli_real_escape_string($con, $_POST['note_description']);
        
        if (empty($note_topic) || empty($note_date) || empty($note_description) ) {
            header("Location: pediatrician-addNotesView.php?error=emptyfields&note_topic=" . $note_topic . "&note_date=" . $note_date . "&note_description=" . $note_description . "&note_records=" . $note_records);
            exit();
        } else {
            $sql = "SELECT * FROM doctor_details WHERE doc_email='$doc_email'";
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            $doc_id = $row['doc_id'];
            $doc_type = $row['doc_type'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $path = "../../Assets/Images/uploads/".$fileName;

            if ($resultCheck > 0) {
                $sql = "INSERT into doctor_notes(doc_id, child_id,note_topic, note_date, note_description, note_records,doc_role)
                        VALUES ('$doc_id','$user_id','$note_topic','$note_date','$note_description','$fileName','$doc_type')";
                $result = mysqli_query($con, $sql);
        
                if ($result) {
                    move_uploaded_file($fileTmpName,$path);
                }

            }
        }
    }

     ?>

<html>
<head>
<style><?php include "../../Assets/Css/style-common.css" ?></style>
</head> 
<body>
<a href="ped-dashboardView.php"><button class="goBackBtn">Go back</button></a>

<?php $sql = "select * from child_details where child_id = '".$_GET['childid']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $child_name = $row['child_name'];
     ?>

<div class="child-container3">
  <h2>Notes and Records</h2>
  <h3>Child Name : <?php echo $child_name ?></h3>

  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Add Records  </h3></div>
                        <div class="MotherGeneralDetails">

<form action="ped-addNotesView.php?childid=<?php echo $_GET['childid']?>" method="POST" enctype="multipart/form-data">
<table class="MotherCardTables">
    <?php $sql = "select * from doctor_details where doc_email = '".$_SESSION['email']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $doc_id = $row['doc_id'];
     ?>
     <input type="hidden" name="doctor_id" id="doctor_id" value='$doc_id'>
     <input type="hidden" name="child_id" id="child_id" value='<?php echo $_GET['childid']?>'>
     <tr>
     <tr>
    <td><label for="note_date">Choose Date</label></td>
    <td><input type="date" name="note_date" id="note_date" max="<?php echo date('Y-m-d', strtotime('+1 day')); ?>"></td>
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
        <td><input type="file" name="file"></td>
    </tr>
    
</table>
<button class='btnMain' type="submit" name="submit">Create</button>
                <script>
                    function clearForm() {
                        document.getElementById("PediatrianAddNotesForm").reset();
                    }
                </script>
 <button class='btnMain' type="clear" name="clear" onclick="clearForm()">Clear</button>
  </form>
  <div>
            
    </div>
   
  
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> View Records  </h3></div>
                        <div class="MotherGeneralDetails">
                            <?php include "../../Config/ped-ViewNotesModel.php"; ?>
       
        </div> 
    </div>
    </div>
</body>
</html>
<?php } else {
    header("Location: ../../mainLogin.php");
    exit();}
?>