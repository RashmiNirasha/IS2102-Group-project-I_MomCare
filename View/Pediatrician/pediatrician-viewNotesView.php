
<html>
<head>
<link rel="stylesheet" href="pediatrician-style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head> 
<body class="txtcol">

<?php include_once '../../Assets/Includes/ped-header.php';?>

    <div class="main-dash">
        <h1> Notes and Records</h1>
        </div>

    <div class="main-notes">
    <table class="styled-table">
    <thead>
            <tr>
                <th>Note id</th>
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
    <?php include_once '../../Config/notestable.php'; ?>
 
    </table>
    </div>

    <?php include_once '../../Assets/Includes/ped-footer.php';?>

</body>
</html>
