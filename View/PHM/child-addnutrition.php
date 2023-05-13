<?php 
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['user_id'])) { 
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_pages.php";
    include "../../Assets/Includes/sidenav2.php";
    $Phm_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
  <style><?php include "../../Assets/css/style-child.css";?></style>
  <script src="../../Assets/js/functions.js"></script>
</Head>
<body>
    <div class="child-container">
        <h2>Nutrition Records </h2>

    <!-- Add a record -->

    <div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>Add Records</h3></div>
            <div class="MotherGeneralDetails">
        <form action="../../Config/child-addnutritionModel.php" method="POST">
        <table class="MotherCardTables">
        <?php
        if (isset($_GET['message'])) {
            echo "<tr><td colspan='6'><p class='error3'>" . $_GET['message'] . "</p></td></tr>";
        } elseif (isset($_GET['error'])) {
            echo "<tr><td colspan='6'><p class='error-message'>" . $_GET['error'] . "</p></td></tr>";
        }
        ?>
        <tr>
            <th>Child ID</th>
            <th>Age</th> 
            <th>Date</th>
            <th>Batch No</th>
            <th>Record Type</th>
            <th>Actions</th>
    </tr>
    <tr> <input type="hidden" name="phm_id" value="<?php echo $Phm_id; ?>">
    <td><select id="child_id" name="child_id" required>
                        <option value="">Select a child</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT child_id FROM `child_details` WHERE phm_id = '$Phm_id'");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['child_id']);?>">
                            <?php echo htmlentities($row['child_id']);?>
                        </option>
                        <?php
                        }
                        ?>
                    </select></td>         
    <td><select id="age" name="age" required>
                        <option value="">Select age</option>
                        <option value="6 Month">6 Month</option>
                <option value="1 1/2 Year">1 1/2 Year</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Year">2 Year</option>
                <option value="2 1/2 Year">2 1/2 Year</option>
                <option value="3 Year">3 Year</option>
                <option value="3 1/2 Year">3 1/2 Year</option>
                <option value="4 Year">4 Year</option>
                <option value="4 1/2 Year">4 1/2 Year</option>
                <option value="5 Year">5 Year</option>
                    </select></td>   
         <td><input type="date" id="date" name="date" class="inputDate" required></td>
         <td><input type="text" id="batch_no" name="batch_no" required></td>
         <td>
            <select id="record_type" name="record_type">
                <option value="select">Select type</option>
                <option value="vitaminA">Vitamin A</option>
                <option value="Worm">Worm treatment</option>
            </select>
            </td>
         <td><input type="submit" class="small-child-btn" value="submit"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>

        <!-- section two  -->
    <div class="OneColumnSection">
    <div class="MotherCardTableTitles"><h3>List of Vitamin Records</h3>
    <input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    </div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables" id="myTable">
        <?php
        $oneMonthAgo = date('Y-m-d', strtotime('-1 month'));

        $query = "SELECT * FROM `child_cvitamin_view` WHERE `child_cvitamin_view`.phm_id = '$Phm_id' ORDER BY `child_cvitamin_view`.date DESC";
        $ret = mysqli_query($con, $query);

        if ($ret === false) {
    // Query execution failed, handle the error
    echo "Error executing query: " . mysqli_error($con);
        } else {
    // Query executed successfully
        if (mysqli_num_rows($ret) > 0) {
        // Generate the table rows
        echo "<tr><th id='childid'>Child ID</th><th>Age</th><th>Date</th><th>Batch no</th><th>edit</th><th>delete</th></tr>";

        while ($row = mysqli_fetch_assoc($ret)) {
            // Process each row
            $child_id = $row["child_id"];
            $date = $row["date"];
            $id = $row["id"];
            $canDelete = (strtotime($date) >= strtotime($oneMonthAgo));

            echo "<tr>
            <td id='childid'>" . $row["child_id"] . "</td>
            <td>" . $row["age"] . "</td>
            <td>" . $row["date"] . "</td>
            <td>" . $row["batchno"] . "</td>
            <td><a href='javascript:void(0);' onclick=\"showEditForm('" . $row['id'] . "')\"><button class='small-child-btn'>edit</button></a></td>";

            if ($canDelete) {
                echo "<td><a href='../../Config/child-addnutritionModel.php?delete=" . $row['id'] . "' onclick=\"return confirm('Do you really want to delete this record?')\"><button class='small-child-btn'>delete</button></a></td>";
        
            } else {
                echo "<td>Delete not allowed</td>";
            }
        
            echo "</tr>";

            // Display the edit form for each child
            echo "<tr id='editForm_2".$row['id']."' style='display:none;'>
                <form onsubmit=\"return confirm('Do you really want to edit?');\" method='POST' action='update.php'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <td><input type='hidden' name='child_id' value='".$row['child_id']."'></td>
                    <td><input type='text' id='age' name='age' value='".$row['age']."'></td>
                    <td><input type='date' id='date' name='date' value='".$row['date']."'></td>
                    <td><input type='text' id='batchno' name='batchno' value='".$row['batchno']."'></td>
                    <td colspan='2'><input class='small-child-btn' type='submit' value='Update' name='update'></td>
                    </form>
            </td>
        </tr>";
        }
    } else {
        // No children found
        echo "<tr><td colspan='6'>No Child records found.</td></tr>";
    }
}
    ?>
</table>
</div>
</div>

<script>
    function showEditForm(id) {
        var x = document.getElementById("editForm_2"+id);
        if (x.style.display === "none") {
            x.style.display = "table-row";
        } else {
            x.style.display = "none";
        }
    }
</script>

<?php } else {
   header("Location: ../../mainLogin.php");
    exit();
}
?>
