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
    <!-- <div class="child-container2"> -->
        <div class="common_list_content">
            <?php 
            if (isset($_GET['child_id'])) {
                $Child_id = $_GET['child_id'];
                $sql = "SELECT doctor_notes.*, child_details.child_name, doctor_details.doc_name 
                FROM doctor_notes 
                INNER JOIN child_details ON doctor_notes.child_id=child_details.child_id 
                INNER JOIN doctor_details ON doctor_notes.doc_id=doctor_details.doc_id 
                WHERE (doctor_notes.child_id LIKE '%$Child_id%' OR child_details.child_name LIKE '%$Child_id%') AND doctor_notes.doc_id=doctor_details.doc_id
                ORDER BY doctor_notes.note_date DESC";
                        $result = mysqli_query($con, $sql);
                if (!$result) {
                    die(mysqli_error($con));
                }
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    echo "<table>
                    <tr>
                        <th>Note date</th>
                        <th>Note topic</th>
                        <th>Note description</th>
                        <th>Note records</th>
                        <th></th>
                    </tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $doc_id = $row['doc_id'];
                        $child_name = $row['child_name'];
                        $doc_name = $row['doc_name'];
                        $note_date = $row['note_date'];
                        $note_topic = $row['note_topic'];
                        $note_description = $row['note_description'];
                        $note_records = $row['note_records'];
                        $note_id = $row['note_id'];
                        echo "
                        <tr>
                            <td>" . $row['note_date'] . "</td>
                            <td>" . $row['note_topic'] . "</td>
                            <td>" . $row['note_description'] . "</td>
                            <td>" . $row['note_records'] . "</td>
                            <td><button class='btnMain viewBtn' note_id='" . $note_id . "'>View</button></td>
                            </tr>";
                    } 
                    echo "</table>";
                }
            }       
            ?>      
        </div> 
    </div>
</div>

<div class="popup">
    <button id="close">&times;</button>
    <table id="note-details">
        <tr>
            <td colspan="2"><img src="../../Assets/Images/mother/med1.png" alt="medical report" width="100%" ></td>
        </tr>
        <tr>
            <td><b>Date:</b></td>
            <td id="date"></td>
        </tr>
        <tr>
            <td><b>Child Name:</b></td>
            <td id="child_name"></td>
                </tr>
        <tr>
            <td><b>Doctor Name:</b></td>
            <td id="doc_name"></td>
        </tr>
        <tr>
            <td><b>Note Topic:</b></td>
            <td id="note_topic"></td>
        </tr>
        <tr>
            <td><b>Note Description:</b></td>
            <td id="note_description"></td>
        </tr>
        <tr>
            <td><b>Note Records:</b></td>
            <td id="note_records"></td>
        </tr>
    </table>
</div>


<script type="text/javascript">
    document.querySelector("#close").addEventListener("click", function(){
        document.querySelector(".popup").style.display = "none";
        document.querySelector(".main-mother").classList.remove("blur");
    });

    var viewBtns = document.querySelectorAll(".viewBtn");
    viewBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
            var noteId = this.getAttribute("note_id");
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "../../Config/getNoteDetails.php?note_id=" + noteId, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var noteDetails = JSON.parse(xhr.responseText);
                    document.querySelector("#date").innerHTML = noteDetails.date;
                    document.querySelector("#child_name").innerHTML = noteDetails.child_name;
                    document.querySelector("#doc_name").innerHTML = noteDetails.doc_name;
                    document.querySelector("#note_topic").innerHTML = noteDetails.topic;
                    document.querySelector("#note_description").innerHTML = noteDetails.description;
                    document.querySelector("#note_records").innerHTML = noteDetails.records;
                }
            };
            xhr.send();
            document.querySelector(".popup").style.display = "block";
            document.querySelector(".main-mother").classList.add("blur");
        });
    });
</script>




</body>
</html>
