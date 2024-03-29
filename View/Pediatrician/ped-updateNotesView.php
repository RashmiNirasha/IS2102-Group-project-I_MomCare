<?php
session_start();
include "../../Config/dbConnection.php";
if (isset($_SESSION['email']) && isset($_SESSION['user_id'])) { 
    include "../../Assets/Includes/header_pages.php";
    ?>

<?php
$id= $_GET['updateid'];

$sql = "SELECT * FROM doctor_notes WHERE note_id = '$id'";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);

$doc_id = $row['doc_id'];
$note_topic = $row['note_topic'];
$note_date = $row['note_date'];
$note_description = $row['note_description'];
$child_id = $row['child_id'];

if (isset($_POST['submit'])) {
    $doc_id = $_POST['doctor_id'];
    $note_topic = $_POST['note_topic'];
    $note_date = $_POST['note_date'];
    $note_description = $_POST['note_description'];
  
    $sql="UPDATE doctor_notes SET doc_id='$doc_id',note_topic='$note_topic', note_date='$note_date', note_description='$note_description' WHERE note_id='$id'";

    $result = mysqli_query($con, $sql);
    if($result){
          echo "<script>alert('Record Updated Successfully')</script>";    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>

<html>
<head>
<style><?php include "../../Assets/Css/style-common.css" ?></style>
</head> 
<body>

<div class="main-mother">
<a href="ped-dashboardView.php"><button class="goBackBtn">Go back</button></a>
        <div class="mom-filter">
        <h1>Update Pediatrician Notes</h1>
        </div>

<div class="RegisterMotherInnerDiv">
<form class="PediatrianAddNotesForm" id="pediareicianAddNotes" action=" " method="POST">
<table>

    <tr>
        <td><label for="doctor_id"></label></td>
        <td><input type="hidden" name="doctor_id" id="doctor_id" value=<?php echo $doc_id;?>></td>
    </tr>
    <tr>
        <td><label for="note_date">Choose Date</label></td>
        <td><input type="date" name="note_date" id="note_date" value=<?php echo $note_date;?>></td>
    </tr>
    <tr>
        <td><label for="note_topic">Title</label></td>
        <td><input type="text" name="note_topic" id="note_topic" value=<?php echo $note_topic;?>></td>
    </tr>
    <tr>
        <td><label for="note_description">Description</label></td>
        <td><textarea name="note_description" id="note_description"><?php echo $note_description;?></textarea></td>
    </tr>

</table>
<button type="submit" name="submit">Update</button>

                <script>
                    function clearForm() {
                        document.getElementById("PediatrianAddNotesForm").reset();
                    }
                </script>
 <button type="clear" name="clear" onclick="clearForm()">Clear</button>

</form>
</div>
</body>
</html>

<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>