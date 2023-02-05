<?php 
include "../../Assets/Includes/heading.php";
include_once("../../Config/dbConnection.php");

?>
<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-common.css";?></style>
</Head>
<body>
  <div class="content">
       <!-- topic and notifications -->
      <div class="heading">
        <h1>Manage Users</h1>
        <a href="#">
          <span class="material-icons">notifications</span>
        </a>
        </div>

        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Registered User Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Uid</th>
                                             <th>reg_user_id</th>
                                  <th>first_name</th>
                                  <th> middle_name</th>
                                  <th> last_name</th>
                                  <th>address</th>
                                  <th>DOB</th>
                                  <th>tele_number</th>
                                    <th>age</th>
                                    <th>email</th>
                                    <th>reg_date</th>
                                    <th>phm_id</th>
                                    <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                              <?php $ret=mysqli_query($con,"SELECT * FROM `registered_user_details` ");
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['reg_user_id'];?></td>
                                  <td><?php echo $row['first_name'];?></td>
                                  <td><?php echo $row['middle_name'];?></td>
                                  <td><?php echo $row['last_name'];?></td>  
                                  <td><?php echo $row['address'];?></td>
                                    <td><?php echo $row['DOB'];?></td>
                                    <td><?php echo $row['tele_number'];?></td>
                                    <td><?php echo $row['age'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['reg_date'];?></td>
                                    <td><?php echo $row['phm_id'];?></td>	
                                    <td><a href="approve-user.php?editid=<?php echo $row['reg_user_id'];?>">Approve</a> || <a href="Notapprove-user.php?delid=<?php echo $row['reg_user_id'];?>">Not Approve</a></td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>