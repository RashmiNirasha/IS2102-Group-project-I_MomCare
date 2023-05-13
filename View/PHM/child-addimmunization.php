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
        <h2>Vaccination Records </h2>

    <!-- Add a record -->

    <div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>Add Records</h3></div>
            <div class="MotherGeneralDetails">
        <form action="../../Config/child-addimmunizationModel.php" method="POST">
        <table class="MotherCardTables">
        <?php
        if (isset($_GET['message'])) {
            echo "<tr><td colspan='6'><p class='error3'>" . $_GET['message'] . "</p></td></tr>";
        } elseif (isset($_GET['error'])) {
            echo "<tr><td colspan='6'><p class='error-message'>" . $_GET['error'] . "</p></td></tr>";
        }
        ?>
        <tr><input type="hidden" name="phm_id" value="<?php echo $Phm_id; ?>">
            <th>Child ID</th>
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

    </tr>
    <tr> 
        <th>Age</th>
        <td><input type="text" id="age" name="age" required></td>
    </tr>
    <tr>
        <th>Type of Vaccination</th>
        <td><select id="vaccine" name="vaccine" required>
                        <option value="">Select vaccine type</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT vaccine FROM `vaccinetypes`");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['vaccine']);?>">
                            <?php echo htmlentities($row['vaccine']);?>
                        </option>
                        <?php
                        }
                        ?>
                    </select></td>
    </tr>
    <tr>
        <th>Date</th>
        <td><input type="date" id="date" name="date" class="inputDate" required></td>
    </tr>
    <tr>
        <th>Batch No</th>
        <td><input type="text" id="batch_no" name="batch_no" required></td>
    </tr>
    <tr>
        <th>Adverse Effects</th>
        <td><textarea id="adverse_effects" name="adverse_effects" rows="4" cols="50"></textarea></td>
    </tr>
         <td colspan="2"><input type="submit" class="small-child-btn" value="submit"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>

        <!-- section two  -->
    <div class="OneColumnSection">
    <div class="MotherCardTableTitles"><h3>List of Vaccination Records</h3>
    <input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    </div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables" id="myTable">
            
            <?php
            
            $oneMonthAgo = date('Y-m-d', strtotime('-1 month'));

            $query = "SELECT * FROM `child_immunization_table` WHERE `child_immunization_table`.phm_id = '$Phm_id' ORDER BY `child_immunization_table`.date DESC limit 10";
            $ret = mysqli_query($con, $query);

            if (mysqli_num_rows($ret) > 0) {
                echo "<tr><th id='childid'>Child ID</th><th>Age</th><th>Type of Vaccine</th>
                <th>Date</th><th>Batch No</th><th>Adverse Effects</th><th>edit</th><th>delete</th></tr>";
                while ($row = mysqli_fetch_assoc($ret)) {
                    $child_id = $row["child_id"];
                    $date = $row["date"];
                    $id = $row["id"];
                   
                    $canDelete = (strtotime($date) >= strtotime($oneMonthAgo));

                    echo "<tr>
                    <td id='childid'>" . $row["child_id"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["type_of_vaccine"] . "</td>
                    <td>" . $row["date"] . "</td>
                    <td>" . $row["batch_no"] . "</td>
                    <td>" . $row["adverse_effects"] . "</td>
                    <td><a href='javascript:void(0);' onclick=\"showEditForm('" . $row['id'] . "')\"><button class='small-child-btn'>edit</button></a></td>";

                    if ($canDelete) {
                        echo "<td><a href='../../Config/child-addimmunizationModel.php?delete=" . $row['id'] . "' onclick=\"return confirm('Do you really want to delete this record?')\"><button class='small-child-btn'>delete</button></a></td>";
                    } else {
                        echo "<td>Delete not allowed</td>";
                    }
                
                    echo "</tr>";

                    // Display the edit form for each child
                    echo "<tr id='editForm_2".$row['id']."' style='display:none;'>
                        <form onsubmit=\"return confirm('Do you really want to edit?');\" method='POST' action='../../Config/child-addimmunizationModel.php'>
                           <input type='hidden' name='id' value='".$row['id']."'>
                           <td><input type='hidden' name='child_id' value='".$row['child_id']."'></td>
                            <td><input type='text' id='edit_child_name' name='age' value='".$row['age']."'></td>
                           <td><input type='text' id='edit_child_name' name='vaccine' value='".$row['type_of_vaccine']."'></td>
                           <td><input type='date' id='edit_birth_date' name='date' value='".$row['date']."'></td>
                           <td><input type='text' id='edit_child_name' name='batch_no' value='".$row['batch_no']."'></td>
                           <td><input type='text' id='edit_child_name' name='adverse' value='".$row['adverse_effects']."'></td>
                           <td colspan='2'><input class='small-child-btn' type='submit' value='Update' name='update'></td>
                        </form>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No Child records found.</td></tr>";
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
