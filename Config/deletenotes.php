<?php
session_start();

$mysqli = require __DIR__ . "/control/database.php";
// // $_SERVER — Server and execution environment information
// if ($_SERVER["REQUEST_METHOD"] != "POST") {  // collect value of input field
    
//     // 'REQUEST_METHOD'Which request method was used to access the page; e.g. 'GET', 'HEAD', 'POST', 'PUT'.
//     header("location: viewnotes.php.php");
// }
$result = mysqli_query($mysqli,"SELECT ped_note_id FROM ped_notes");

$NID = $_SESSION["ped_note_id"];

$sql .= "delete from ped_notes where ped_note_id = $NID;";

if (mysqli_query($mysqli, $sql)) {
    echo "<script> alert('Account successfully removed!');";
    echo "window.location.href = 'logout.php';</script>";
} else {
    // echo "<script> alert('Database Error! Please try again.');";
    // echo "window.location.href = 'viewnotes.php';</script>";
}

