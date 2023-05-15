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
            echo "<script type='text/javascript'>alert('Child record added successfully'); window.location.href='child-adddental.php?child_id=" . $childId . "';</script>";
        } else {
            echo "Error inserting data: " . mysqli_error($con);
           
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert2"])) {
    $phm_id = $_POST['phm_id'];
    $child_id = $_POST['child_id'];
    $child_age = $_POST['age'];
    $date = $_POST['date'];
    $batch_no = $_POST['batch_no'];
    $vaccine = $_POST['vaccine'];
    $adverse_effects= $_POST['adverse_effects'];

    $insertQuery = "INSERT INTO `child_immunization_table` (phm_id, child_id, age, date, batch_no, type_of_vaccine, adverse_effects) 
    VALUES ('$phm_id', '$child_id', '$child_age', '$date', '$batch_no', '$vaccine', '$adverse_effects')";

    $result = mysqli_query($con, $insertQuery);
    if ($result) {
        // Insertion successful, perform any desired actions
        echo "<script type='text/javascript'>alert('Child record added successfully'); window.location.href='child-adddental.php?child_id=" . $child_id . "';</script>";
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
         <td><input type="date" id="date" name="date" class="inputDate" max="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required></td>         
         <td><input type="submit" class="small-child-btn" name="insert" value="insert"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>
    <!-- section break -->
    
    <div class="OneColumnSection">
            <div class="MotherCardTableTitles"><h3>Vaccine Record</h3></div>
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
        <tr><input type="hidden" name="phm_id" value="<?php echo $user_id; ?>">
            <th>Child ID</th>
            <td><input type="text" id="child_id" name="child_id" value="<?php echo $child_id; ?>" readonly></td>
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
        <td><input type="date" id="date" name="date" class="inputDate" max="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required></td>
    </tr>
    <tr>
        <th>Batch No</th>
        <td><input type="text" id="batch_no" name="batch_no" required></td>
    </tr>
    <tr>
        <th>Adverse Effects</th>
        <td><textarea id="adverse_effects" name="adverse_effects" rows="4" cols="50"></textarea></td>
    </tr>
         <td colspan="2"><input type="submit" class="small-child-btn" value="submit" name="insert2"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>

<?php } else {
   header("Location: ../../mainLogin.php");
    exit();
}
?>
