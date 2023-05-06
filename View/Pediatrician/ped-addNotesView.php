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
            header("Location: ped-addNotesView.php?error=missingchildid");
            exit();
        }
        $note_topic = mysqli_real_escape_string($con, $_POST['note_topic']);
        $note_date = mysqli_real_escape_string($con, $_POST['note_date']);
        $note_description = mysqli_real_escape_string($con, $_POST['note_description']);
        $note_records = mysqli_real_escape_string($con, $_POST['note_records']);
        
        if (empty($note_topic) || empty($note_date) || empty($note_description) ) {
            header("Location: ped-addNotesView.php?error=emptyfields");
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
                    header("Location: ped-addNotesView.php?childid=".$_GET['childid']);
                    exit();
                } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    exit();
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

<div class="child-container3">
  <h2>Notes and Records</h2>

  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> Add Records  </h3></div>
                        <div class="MotherGeneralDetails">

<form action="ped-addNotesView.php?childid=<?php echo $_GET['childid']?>" method="POST">
<table class="MotherCardTables">
    <?php $sql = "select * from doctor_details where doc_email = '".$_SESSION['email']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $doc_id = $row['doc_id'];
     ?>
     <input type="hidden" name="doctor_id" id="doctor_id" value='$doc_id'>
    <tr>
        <td><label for="child_id">Child ID</label></td>
        <td><input type="text" name="child_id" id="child_id" value='<?php echo $_GET['childid']?>'></td>
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
    header("Location: ../../index.php");
    exit();
}?>