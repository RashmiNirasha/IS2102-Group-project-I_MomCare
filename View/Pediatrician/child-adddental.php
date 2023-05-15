<?php 
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['user_id'])) { 
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_pages.php";
    include "../../Assets/Includes/sidenav3.php";
    $user_id = $_SESSION['user_id'];
    $child_id = $_GET['child_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert"])) {
        $phm_id = $_POST['phm_id'];
        $childId = $_POST['child_id'];
        $age = $_POST['age'];
        $noOfTeeth = $_POST['no_of_teeth'];
        $status = $_POST['status'];
        $date = $_POST['date'];
    
        if ($date > date("Y-m-d")) {
            echo "<script type='text/javascript'>alert('Date cannot be in the future'); window.location.href='../View/PHM/child-adddental.php?error=Date cannot be in the future';</script>";
            exit();
        }
    
        $insertQuery = "INSERT INTO `child_dental_report` (phm_id, child_id, age, date, no_of_teeth, status) VALUES ('$phm_id', '$childId', '$age', '$date', '$noOfTeeth', '$status')";
    
        $result = mysqli_query($con, $insertQuery);
        if ($result) {
            // Insertion successful, perform any desired actions
            header("Location: ../View/Pediatrician/child-adddental.php?child_id=$child_id ");
        } else {
            // Insertion failed, handle the error appropriately
            echo "Error inserting data: " . mysqli_error($con);
        }
    }
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
        <h2>Dental Records </h2>

    <!-- Add a record -->
    <div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>Add Records</h3></div>
            <div class="MotherGeneralDetails">
        <form action=" " method="POST">
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
            <th>No of Teeth</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
    </tr>
    <tr> <input type="hidden" name="phm_id" value="<?php echo $user_id; ?>">
    <td><input type="text" id="child_id" name="child_id" value="<?php echo $child_id; ?>" readonly></td>         
            <td><input type="text" id="age" name="age" required></td>
            <td><input type="text" id="no_of_teeth" name="no_of_teeth" required></td>
            <td>
            <select id="status" name="status">
                <option value="select">Select type</option>
                <option value="healthy">Healthy </option>
                <option value="unhealthy">Unhealthy </option>
            </select>
            </td>
         <td><input type="date" id="date" name="date" class="inputDate" required></td>         
         <td><input type="submit" class="small-child-btn" name="insert" value="insert"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>

        <!-- section two  -->
    <div class="OneColumnSection">
    <div class="MotherCardTableTitles"><h3>List of Dental Records</h3>
    <input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    </div>
    <div class="MotherGeneralDetails">
        <table class="MotherCardTables" id="myTable">
            <?php
            $oneMonthAgo = date('Y-m-d', strtotime('-1 month'));

            $query = "SELECT * FROM `child_dental_report` WHERE `child_id` = '$child_id' ORDER BY `date` DESC ";
            $ret = mysqli_query($con, $query);

            if (mysqli_num_rows($ret) > 0) {
                echo "<tr><th id='childid'>Child ID</th><th>Age</th><th>No of Teeth</th><th>Status</th><th>Date</th><th>edit</th><th>delete</th></tr>";
                while ($row = mysqli_fetch_assoc($ret)) {
                    $child_id = $row["child_id"];
                    $date = $row["date"];
                    $id = $row["id"];
                   
                    $canDelete = (strtotime($date) >= strtotime($oneMonthAgo));

                    echo "<tr>
                    <td id='childid'>" . $row["child_id"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["no_of_teeth"] . "</td>
                    <td>" . $row["status"] . "</td>
                    <td>" . $row["date"] . "</td>
                    <td><a href='javascript:void(0);' onclick=\"showEditForm('" . $row['child_id'] . "')\"><button class='small-child-btn'>edit</button></a></td>";

                    if ($canDelete) {
                        echo "<td><a href='../../Config/child-adddentalModel.php?delete=" . $id . "' onclick=\"return confirm('Do you really want to delete this record?')\"><button class='small-child-btn'>delete</button></a></td>";
                    } else {
                        echo "<td>Delete not allowed</td>";
                    }
                
                    echo "</tr>";

                    // Display the edit form for each child
                    echo "<tr id='editForm_2" . $row['child_id'] . "' style='display:none;'>
                    <form onsubmit=\"return confirm('Do you really want to edit?');\" method='POST' action='../../Config/child-adddentalModel.php?child_id=" . $row['child_id'] . "'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <td><input type='hidden' name='child_id' value='" . $row['child_id'] . "'></td>
                        <td><input type='text' name='age' value='" . $row['age'] . "'></td>
                        <td><input type='text' name='no_of_teeth' value='" . $row['no_of_teeth'] . "'></td>
                        <td><input type='text' name='status' value='" . $row['status'] . "'></td>
                        <td><input type='date' name='date' value='" . $row['date'] . "'></td>
                        <td colspan='2'><input class='small-child-btn' type='submit' value='Update' name='update'></td>
                    </form>
                </tr>";                
        }
    } else {
        echo "<tr><td colspan='6'>No Child records found.</td></tr>";
    }
    ?>
</table>
</div>
</div>

<?php } else {
   header("Location: ../../mainLogin.php");
    exit();
}
?>
