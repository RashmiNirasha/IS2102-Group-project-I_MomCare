<?php
    session_start();
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_pages.php" ;
?>
<html>
<head>
<style><?php include "../../Assets/Css/style-common.css" ?></style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head> 
<body class="txtcol">
<div class="main-mother">
    <div class="top">
        <a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="goBackBtn">Go back</button></a>
    </div>
    <div class="child-container2">
        <div class="common_list_content">
            <?php 
            if (isset($_GET['child_id'])) {
                $Child_id = $_GET['child_id'];
                $sql = "SELECT * FROM doctor_notes inner join child_details on doctor_notes.child_id=child_details.child_id WHERE doctor_notes.child_id LIKE '%$Child_id%' OR child_details.child_name like '%$Child_id%' ORDER BY doctor_notes.note_date DESC";
                $result = mysqli_query($con, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    echo "<table>
                    <tr>
                        <th>Note date</th>
                        <th>Child id</th>
                        <th>Doctor Name</th>
                        <th>Note topic</th>
                        <th>Note description</th>
                        <th>Note records</th>
                        <th></th>
                    </tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <tr>
                            <td>" . $row['note_date'] . "</td>
                            <td>" . $row['child_id'] . "</td>
                            <td>" . $row['doc_id'] . "</td>
                            <td>" . $row['note_topic'] . "</td>
                            <td>" . $row['note_description'] . "</td>
                            <td>" . $row['note_records'] . "</td>
                            <td><button class='btnMain viewBtn'>View</button></td>
                        </tr>";
                    } 
                    echo "</table>";
                }
                else{
                    mysqli_error($con);
                }
            }       
            ?>      
        </div> 
    </div>
</div>

<div class="popup">
    <button id="close">&times;</button>
    <h2>Medical Report</h2>
    <p> <b>Child ID:</b>  </p>
    <p> <b>Child Name:</b>  </p>
    <p> <b>Doctor Name:</b>  </p>
</div>


<script type="text/javascript">
    document.querySelector("#close").addEventListener("click", function(){
        document.querySelector(".popup").style.display = "none";
        document.querySelector(".main-mother").classList.remove("blur");
    });

    var viewBtns = document.querySelectorAll(".viewBtn");
    viewBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
            document.querySelector(".popup").style.display = "block";
            document.querySelector(".main-mother").classList.add("blur");
        });
    });
</script>



</body>
</html>
