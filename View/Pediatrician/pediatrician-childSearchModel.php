<?php 
include("../../Config/dbConnection.php");

if(isset($_POST['submit'])){
    $query = $_POST['query']; 
    $sql="SELECT * FROM child_details WHERE child_id LIKE '%$query%' OR mom_email LIKE '%$query%' OR phm_id LIKE '%$query%'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $childname=$row['child_name'];
            $childid=$row['child_id'];

            echo '<div class="mom-bar">
            <div class="mom-bar-left">
            <span class="material-symbols-outlined">
            child_care
            </span>
                <div>
                    <h3>'.$childid.'</h3>
                    <p class="second-line">Mother name and location</p>
                </div>
            </div>
            <div class="mom-bar-right">
                <a href="../Child/child-childCardView.php?childid='.$childid.'"><button class="mom-btn">View</button></a>
            </div>
        </div>';
    
        }
    }
}
?>