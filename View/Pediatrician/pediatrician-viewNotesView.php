<?php
session_start();
include "../../Assets/Includes/header_pages.php";
?>
<html>
<head>
<style><?php include "../../Assets/Css/style-common.css" ?></style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head> 
<body class="txtcol">

<?php 

?>

<div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
                <h1>View Doctor Notes </h1>
                <div class="a-container-m">
                <span class="material-symbols-outlined" style="color: red;">notifications</span>
                </div></div>
                
    <div class="ma-table">
    <table>
    <thead>
            <tr>
                <th>Child id</th>
                <th>Doctor id</th>
                <th>Mother id</th>
                <th>Topic</th>
                <th>Content</th>
                <th>Date</th>
                <th>Records</th>
                <th>  </th>
                <th>  </th>
            </tr>
        </thead>
    <?php include_once '../../Config/ped-notesTableModel.php'; ?>
 
    </table>
    </div>
</body>
</html>
