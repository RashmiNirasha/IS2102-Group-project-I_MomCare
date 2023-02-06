<?php 
include "../../Assets/Includes/header_pages.php";
?>

<!DOCTYPE html>
<head>
    <title>Home</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

<div class="main-mother">

    <h1>Find Child Card</h1>
        <div class="mom-filter">
        <form action=" " method="POST">
            <input class="mom-search" type="search" name="query" id="query" placeholder="Search">
            <input type="submit" name="submit" value="Search">
            </form>

            <div class="child-details">
            <?php include_once 'pediatrician-childSearchModel.php'; ?>
            </div>

        </div>
    </div>
</body>

</html>
