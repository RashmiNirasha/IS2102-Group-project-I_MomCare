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

    
        <div class="mom-filter">
        <h1>Find Child Card</h1>
        <form action=" " method="POST">
            <input class="mom-search" type="search" name="query" id="query" placeholder="Please enter a search term (Ex: First name, Last name, Mother ID">
            <input type="submit" name="submit" value="Search">
            </form>

            <div class="child-details">
            <?php 
            include("../../Config/dbConnection.php");
            
            if(isset($_POST['submit'])){
                $query = $_POST['query'];
                $sql = "SELECT * FROM child_details WHERE child_id LIKE '%$query%' OR mom_email LIKE '%$query%' ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $childname=$row['child_name'];
                        $childid=$row['child_id'];
                        $mom_email=$row['mom_email'];
                        $PHM_id=$row['phm_id'];
            
                        echo '<div class="child-bar">
                        <div class="child-bar-left">
                        <span class="material-symbols-outlined">
                        child_care
                        </span>
                            <div>
                                <h3>'.$childid.'</h3>
                                <p class="second-line">Name : '.$childname.' </p>
                                <p class="second-line">PHM ID : '.$PHM_id.'</p>
                            </div>
                        </div>
                        <div class="child-bar-right">
                            <a href="pediatrician-addNotesView.php?childid='.$childid.'"><button class="mom-btn">Enter Notes</button></a>
                        </div>
                    </div>';
                    }}
                }
             ?>
            </div>

        </div>
    </div>
</body>

</html>
