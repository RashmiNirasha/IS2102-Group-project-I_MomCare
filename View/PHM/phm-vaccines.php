<?php
    include "../../Assets/Includes/header_phm.php";
    include '../../Config/dbConnection.php';
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

<div class="add-report-label"><label for="add-report">Add Vaccination Record</label></div>
        <div class="add-report">
            <form class="test-form" action="" method="post" enctype="multipart/form-data">
                <div id="x"> 
                <label for="DoctorSpecialization">Vaccine Selection</label>
                <select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
                <option value="">Select Vaccine</option>
                <?php
                  $ret = mysqli_query($con,"SELECT * FROM `vaccinetypes`");
                  while($row = mysqli_fetch_array($ret)) {
                    ?>
                      <option value="<?php echo htmlentities($row['Vaccine']);?>">
                        <?php echo htmlentities($row['Vaccine']);?>
                      </option>
                    <?php
                  }
                ?>
              </select>

                <label for="des">Any Comments on vaccination</label>
              <textarea type="text" name="des" class="form-control" placeholder="Enter the comments here" required="true"></textarea>
<label for="AppointmentDate">Date</label>				
              <input class="form-control datepicker" name="appdate"  required="required" data-date-format="yyyy-mm-dd">      
                            <input type="hidden" name="child_id" value="<?php echo $vid ?>">
                            <label for="Appointmenttime">Time</label>								
              <input class="form-control" name="apptime" id="timepicker1" required="required">

                </div>
                    <input class="add-report-btn" name="add_report" type="submit" value="Submit" >
            </form>
            <?php 
            $vaccine = $_POST['vaccine'];
            $comments = $_POST['comments'];
            $appointmentDate = $_POST['appointmentDate'];
            $appointmentTime = $_POST['appointmentTime'];
            $childId = $_POST['childId'];

            $res = $ret=mysqli_query($con,"SELECT `date_of_birth` FROM `child_details` WHERE child_id = '$vid'");
            while($row = mysqli_fetch_array($ret)) {
                $dob=$row['date_of_birth'];
                $age= $dob ;
                $query = "INSERT INTO `immunization_table` (`child_id`, `age`, `type_of_vaccine`, `date`, `batch_no`, `adverse_effects`, `phm_id`) 
                VALUES ('$childId',$age, '$vaccine', '$comments', '$appointmentDate', '$appointmentTime')";
                   if (mysqli_query($con, $query)) {
                   echo "Vaccine appointment added successfully";
                   } else {
                   echo "Error adding vaccine appointment: " . mysqli_error($con);
                   }
   
            }
            ?>
        </div>
        <div class="add-report-label"><label for="add-report">Search records</label></div>
        <div class="view-report">
            <table class="test-view-table">
                <tr>
                    <th>Doc. ID</th>
                    <th>Test name</th>
                    <th>Special note</th>
                    <th>Date</th>
                    <th>Edit report</th>
                    <th>View report</th>
                    <th>Delete</th>
                </tr>

               <?php 
    $ret=mysqli_query($con,"SELECT * FROM immunization_table WHERE child_id = '$vid'");
    if($ret){
        $num=mysqli_num_rows($ret);
        if($num>0){ 
            while($row = mysqli_fetch_array($ret)){
                echo "<tr> 
                        <td>".$row['child_id']."</td>
                        <td>".$row['note_topic']."</td>
                        <td>".$row['note_description']."</td>
                        <td>".date("y-m-d")."</td>
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
