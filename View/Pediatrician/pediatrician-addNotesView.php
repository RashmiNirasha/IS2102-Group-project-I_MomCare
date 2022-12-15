<?php

$mysqli = require __DIR__ . " ../../../Config/database.php";

if (isset($_POST['submit'])) {
    $doc_id = $_POST['doc_id'];
    $mom_id = $_POST['mom_id'];
    $note_topic = $_POST['note_topic'];
    $note_date = $_POST['note_date'];
    $note_description = $_POST['note_description'];
    $note_records = $_POST['note_records'];

    $sql = "INSERT INTO ped_notes(doc_id, mom_id, note_topic, note_date, note_description, note_records)
            VALUES ('$doc_id','$mom_id','$note_topic','$note_date','$note_description','$note_records')";

    if (mysqli_query($mysqli, $sql)) {
       echo "records added successfully";
    } else {
        echo "ERROR: not succesfull $sql. "
            . mysqli_error($mysqli);
    }
}
?>

<html>
<head>
<link rel="stylesheet" href="pediatrician-style.css">
</head> 
<body class="txtcol">

<?php include_once '../../Assets/Includes/ped-header.php';?>

<div class="title">
    <p> </p>
</div>

<div class="formcenter">
<form form method="POST" action=" " id="submit">
<table border="0" class="tblSize">

<tr><td colspan="3"><b><h2>Upload Records..</h2></b></td></tr>
</br>
<tr><td> </td></tr>
<tr><td >Choose Patient <form action="/action_page.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit" class="btn-1">search </button>
  </form></td> </tr> 
  <tr><td colspan="2">Enter Doctor Id</td></tr>
  <tr><td colspan ="2" ><input type ="text" class="tblSize" id="doc_id" name="doc_id" > </td></tr>

  <tr><td colspan="2">Enter Mother Id</td></tr>
  <tr><td colspan ="2" ><input type ="text" class="tblSize" id="mom_id" name="mom_id"></td></tr>
  
  <tr><td colspan="2">Choose Date</td></tr>
  <tr><td colspan ="2" ><input type="date" id="note_date" name="note_date" class="tblSize"></td></tr>

<tr><td colspan="2">Title</td></tr>
<tr><td colspan ="2" ><input type ="text" id="note_topic" name="note_topic" class="tblSize"></td></tr>

<tr><td colspan="2">Description</td></tr>
<tr><td colspan ="2" ><input type ="text" class="tblSize" id="note_description" name="note_description" required></td></tr>


<tr><td colspan="2">Select File to Upload </td></tr>
<tr><td><input type ="file" id="note_records" name="note_records"></td></tr>

<tr><td>
    <input type="submit" name="submit" value="Submit" class="btn-1">
    <button type="submit" class="btn-1">Discard </button>
</td></tr>

</td></tr> 
</table>

</form>
</div>

<?php include_once '../../Assets/Includes/ped-footer.php';?>

</body>
</html>