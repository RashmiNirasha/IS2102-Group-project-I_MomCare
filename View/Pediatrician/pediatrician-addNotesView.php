<?php
session_start();
//include "../../Assets/Includes/header_pages.php";
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
}

?>

<html>
<head>
<style><?php include "../../Assets/Css/style-common.css" ?></style>
</head> 
<body>

<div class="maintopic">
    <h3>Pediareician Notes</h3>
</div>

<div class="RegisterMotherInnerDiv">
<h2>Upload Records..</h2>
<form class="PediatrianAddNotesForm" id="pediareicianAddNotes" action="pediatrician-addNotesView.php?childid=<?php echo $_GET['childid']?>" method="POST">
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
<button type="submit" name="submit">Create</button>

                <script>
                    function clearForm() {
                        document.getElementById("PediatrianAddNotesForm").reset();
                    }
                </script>
 <button type="clear" name="clear" onclick="clearForm()">Clear</button>
 <a href=" pediatrician-viewNotesView.php"><button class="pd-viewNote-btnMain" >View Notes</button></a>
</form>
<div>
</div>
</div>
</body>
</html>