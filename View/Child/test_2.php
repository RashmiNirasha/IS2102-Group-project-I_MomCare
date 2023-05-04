<?php
    session_start();
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_pages.php" ;

    // fetch childid from the url and store it in a variable
    $childid = $_GET['child_id'];

?>
<html>
<head>
<style><?php include "../../Assets/Css/style-common.css" ?></style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head> 
<body class="txtcol">
<?php 

?>
<div class="main-mother">
<div class="top">
<a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="goBackBtn">Go back</button></a>
        </div>
        <div class="mom-filter">
        <h1>Find the Note</h1>
        <form action=" " method="GET">
            <input class="mom-search" type="search" name="query" id="query" placeholder="Please enter a search term (Ex: First name, Last name, Child ID)" required autofocus>
            <input type="submit" name="submit" value="Search">
            
            </form>
           
        </div>
        <div class="common_list_content">
        <?php 
        include "../../Config/dbConnection.php";

        if(isset($_GET['submit'])){
            $Child_id=$_GET['query'];
        $sql = "SELECT * FROM doctor_notes inner join child_details on doctor_notes.child_id=child_details.child_id WHERE doctor_notes.child_id LIKE '%$Child_id%' OR child_details.child_name like '%$Child_id%' ORDER BY doctor_notes.note_date DESC";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            echo "<table>
            <tr>
                <th>Child id</th>
                <th>Doctor id</th>
                <th>Mother id</th>
                <th>Note topic</th>
                <th>Note description</th>
                <th>Note date</th>
                <th>Note records</th>
                <th> </th>
            </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr><td>" . $row['child_id'] . "</td><td>" . $row['doc_id'] . "</td><td>" . $row['mom_id'] . "</td><td>" . $row['note_topic'] . "</td><td>" . $row['note_description'] . "</td><td>" . $row['note_date'] . "</td><td>" . $row['note_records'] . "</td>
                <td><a href='child-seeMedicalNotes.php?view=$row[note_id]'><button class='btnMain'>View</button></a></td>
                </tr>";
            } echo "</table>";
        }
        else{
            mysqli_error($con);
        }
        }       
        ?>      
        </div> 
    </div>
    </div>
</body>
</html>