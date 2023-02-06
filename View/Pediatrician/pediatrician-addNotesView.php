<?php

session_start();
//include "../../Assets/Includes/header_pages.php";
include "../../Config/dbConnection.php";

if (isset($_POST['submit'])) {

    $doc= $_SESSION['email'];
    $query="SELECT doc_id FROM `doctor_details` WHERE doc_email='$doc'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    if($row){
        $doc_id=$row['doc_id'];
        $mom_id = $_POST['mom_id'];
        $note_topic = $_POST['note_topic'];
        $note_date = $_POST['note_date'];
        $note_description = $_POST['note_description'];
        $note_records = $_POST['note_records'];

        $sql = "INSERT INTO ped_notes(doc_id, mom_id, note_topic, note_date, note_description, note_records)
                VALUES ('$doc_id','$mom_id','$note_topic','$note_date','$note_description','$note_records')";
                if (mysqli_query($con, $sql)) {
                    echo "New record created successfully !";
                    //header("Location: pediatrician-viewNotesView.php");
                } else {
                    echo "ERROR: not succesfull $sql. "
                        . mysqli_error($con);
                }

    }
    else{
        echo "Error";
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
<form class="PediatrianAddNotesForm" id="pediareicianAddNotes" action=" " method="POST">
<table>
    <tr>
        <td><label for="doctor_id"></label></td>
        <td><input type="hidden" name="doctor_id" id="doctor_id"></td>
    </tr>
    <tr>
        <td><label for="mother_id">Mother Id</label></td>
        <td><input type="search" placeholder="Search.." name="mom_id" id="mom_id"></td>
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
    <a href="pediatrician-viewNotesView.php"><button class="btnMain" >View Notes</button></a>
   
</table>
<button type="submit" name="submit">Create</button>

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