<?php
    
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_phm.php";

    $sql = "SELECT * FROM vaccines";
    $result = mysqli_query($con, $sql);
   
    $sql1 = "SELECT * FROM immunization_table";
    $result1 = mysqli_query($con, $sql1);
    $resultCheck1 = mysqli_num_rows($result1);
 
    $sql3 = "SELECT * FROM child_details";
    $result3 = mysqli_query($con, $sql3);
    while ($row = mysqli_fetch_array($result3)){
        $age = date_diff(date_create($row['date_of_birth']), date_create(date("Y-m-d")))->format('%m months %d days');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <style><?php include "../../Assets/css/style-common.css" ?></style>
    <style> 

.Profile-con{
        margin-top: 10%;
        margin-left: 15%;
        margin-right: 15%;
        margin-bottom: 20px;

    }
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #029EE4;
  
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

</style>
</head>
<body>

<div class="Profile-con">
    <div class="row">
        <div class="col-md-12">
            <?php
            $vid = $_GET['child_id'];
            $ret = mysqli_query($con, "select * from child_details where child_id='$vid'");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {
            ?>
                <table border="1" class="table table-bordered">
                    <tr align="center">
                        <td colspan="4" style="font-size:20px">
                            Child Immunization Details
                        </td>
                    </tr>

                    <tr>
                        <th scope>Child Name</th>
                        <td><?php echo $row['child_name']; ?></td>
                        <th scope>Parent Email</th>
                        <td><?php echo $row['mom_email']; ?></td>
                    </tr>
                    <tr>
                        <th scope>Parent Mobile Number</th>
                        <td><?php // echo $row['parentContno'];?></td>
                        <th>Parent Address/Residence</th>
                        <td><?php // echo $row['parentAdd'];?></td>
                    </tr>
                    <tr>
                        <th>Child Gender</th>
                        <td><?php // echo $row['childGender'];?></td>
                        <th>Child Age</th>
                        <td><?php // echo $row['childAge'];?></td>
                    </tr>
                    <tr>
                        <th>Disease immunized against</th>
                        <td><?php // echo $row['childImmu'];?></td>
                        <th>Child Registration Date</th>
                        <td><?php // echo $row['CreationDate'];?></td>
                    </tr>
                </table>
            <?php } ?>
        </div>
    </div>
</div>

<div class="add-report-label"><label for="add-report">Add Vaccine entries </label></div>
                    <form action="../../Config/phm-enterVaccinModel.php" method="POST">
                    
                    <input type="text" id="child_id" name="child_id" value="<?php echo htmlentities($vid); ?>" hidden ><br>
                    <input type="text" id="age" name="age" value="<?php echo htmlentities($age); ?>" hidden><br>

                    <label for="type_of_vaccine">Type of Vaccine:</label>
                    <select id="type_of_vaccine" name="type_of_vaccine" required>
                        <option value="">Select a vaccine</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT * FROM `vaccinetypes`");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['Vaccine']);?>">
                            <?php echo htmlentities($row['Vaccine']);?>
                        </option>
                        <?php
                        }
                        ?>
                    </select><br>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required><br>

                    <label for="batch_no">Batch No:</label>
                    <input type="text" id="batch_no" name="batch_no" required><br>

                    <label for="adverse_effects">Adverse Effects:</label>
                    <input type="text" id="adverse_effects" name="adverse_effects"><br>

                    <input type="submit" value="Submit">
                    </form></div>

        <div class="add-report-label"><label for="add-report">Search Vaccine entries </label></div>
        <div class="view-report">
            <table class="test-view-table">
                <tr>
                    <th>Child Name</th>
                    <th>Age</th>
                    <th>Vaccine</th>
                    <th>Date</th>
                    <th>Batch No</th>
                    <th>Adverse Effects</th>
                </tr>

               <?php 
               
    $ret=mysqli_query($con,"SELECT * FROM immunization_table WHERE child_id = '$vid'");
    if($ret){
        $num=mysqli_num_rows($ret);
        if($num>0){ 
            while($row = mysqli_fetch_array($ret)){
                echo "<tr> 
                        <td>".$row['child_id']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['type_of_vaccine']."</td>
                        <td>".$row['date']."</td>
                        <td>".$row['batch_no']."</td>
                        <td>".$row['adverse_effects']."</td>
                    </tr>";
            } 
        } else {
            // handle case where no records were found
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
    } else {
        // handle query execution error
        echo "Error executing query: " . mysqli_error($con);
    }
?>

</body>
</html>

?>