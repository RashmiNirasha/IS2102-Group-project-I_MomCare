<?php
include_once 'ped-notesTableModel.php';

include('dbConnection.php');

session_start();
$noteid = $_SESSION[$row['ped_note_id']];

$sql = "SELECT * FROM ped_notes WHERE ped_note_id=$noteid";
$result = mysqli_query($con, $sql);
// mysqli_query() function performs a query against a database.to perform data retrival
if (mysqli_num_rows($result) == 1) { //  // Return the number of rows in result set

    $row = mysqli_fetch_assoc($result);//mysqli_fetch_assoc() function fetches a result row as an associative array.
} else {
    echo '<script> window.alert("Error receiving data!");</script>';
}
?>

?>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head> 
<body class="txtcol">

    <header class="header">
        <a href="#" class="logo"> <img src="Assets\Project Logo.png" alt="" class="img" /> </a>
        <nav class="navbar">
            <a href="#home">Help</a>
            <a href="index.php">About</a>
        </nav>
    </header>

<div class="title">
    <p> </p>
</div>

<div class="formcenter">
<form form method="POST" action="/displaynotes.php " id="Update">
<table border="0" class="tblSize">

<tr><td colspan="3"><b><h2> Records..</h2></b></td></tr>
</br>
<tr><td> </td></tr>

  <tr><td colspan="2">Doctor Id</td></tr>
  <tr><td colspan ="2" ><input type ="text" class="tblSize" id="doc_id" name="doc_id" > </td></tr>

  <tr><td colspan="2">Mother Id</td></tr>
  <tr><td colspan ="2" ><input type ="text" class="tblSize" id="mom_id" name="mom_id"></td></tr>
  
  <tr><td colspan="2"> Date</td></tr>
  <tr><td colspan ="2" ><input type="date" id="note_date" name="note_date" class="tblSize"></td></tr>

<tr><td colspan="2">Title</td></tr>
<tr><td colspan ="2" ><input type ="text" id="note_topic" name="note_topic" class="tblSize"></td></tr>

<tr><td colspan="2">Description</td></tr>
<tr><td colspan ="2" ><input type ="text" class="tblSize" id="note_description" name="note_description" required></td></tr>


<tr><td colspan="2">Records </td></tr>
<tr><td><input type ="file" id="note_records" name="note_records"></td></tr>

<tr><td>
    <button type="Update" class="btn-1">Update </button>
    
</td></tr>

</td></tr> 
</table>

</form>
</div>

    <div class="footer">
        <p>Created by Rashmi Gunawardana | All rights reserved © 2022</p> 
    </div>

</body>
</html>