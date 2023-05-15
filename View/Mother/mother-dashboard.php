<?php 
session_start();
if (isset($_SESSION['email'])){
include "../../Config/dbConnection.php";
include "../../Assets/Includes/header_pages.php";
 ?>
<?php 
    $sql="SELECT mom_fname, mom_id FROM mother_details WHERE mom_email='".$_SESSION['email']."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $mom_name=$row['mom_fname'];
    $mom_id = $row['mom_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Dashboard</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>

</head>
<body>

<div class="dashboard-mother">
        <div class="dashboard-header">
            <h1>Welcome to the Dashboard <?php echo "Ms ".$mom_name ?></h1>
        </div>
        <div class="card-pack"><!--gap remover
        --><button class="card" onclick="window.location.href = 'mother-motherCardUpdate.php?mom_id=<?php echo $mom_id ?>'">
                <div class="card-content-left"><span class="material-symbols-outlined">pregnant_woman</span></div>
                <div class="card-content-right"><p>Mother Card</p></div>
            </button><!--gap remover -->
       <button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">Timeline</span></div>
                <div class="card-content-right"><p>Timeline</p></div>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href='mother-medicalInstructions.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">medical_information</span></div>
                <div class="card-content-right"><p>Medical Instructions</p></div>
            </button>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href='mother-calendarView.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">calendar_month</span></div>
                <div class="card-content-right"><p>Calendar</p></div>
            </button>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href='mother-viewFetalGrowthCalc.php'">
                <div class="card-content-left"><span class="material-symbols-outlined">calculate</span></div>
                <div class="card-content-right"><p>Fetal Growth Calculator</p></div>
            </button>
            </button>
            <button class="card" id="myButton">
                <div class="card-content-left"><span class="material-symbols-outlined">child_care</span></div>
                <div class="card-content-right">
                    <p>Children</p>
                    <div class="child-dropdown" id="myDropdown" style="display: none;">
                        <ul>
                        <?php
                            $sql = "SELECT child_name,child_id FROM child_details WHERE mom_id = '$mom_id'";
                            $result = mysqli_query($con, $sql);
                            if ($result instanceof mysqli_result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $child_name = $row['child_name'];
                                    $child_id = $row['child_id'];
                        ?>
                                    <li>
                                        <?php
                                    echo "<a href='../child/child-childDashboard.php?child_id=" . urlencode($child_id) . "'>" . $child_name . "</a></li>";
                                        ?>
                        <?php
                                }
                            } else {
                                echo "<li>No data found</li>";
                            }
                        ?>
            </ul>
        </div>
    </div>
</button>


<script>
document.getElementById("myButton").addEventListener("click", function() {
  var dropdown = document.getElementById("myDrop");
  if (dropdown.style.display === "none") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
});
</script>
        </div>

        <!-- ----------------------------------------------------------------------------------------------------------------- -->

    <!-- <div class="content"> -->
        <!-- topic and notifications -->
        <!-- <div class="heading">
            <h1>Mother Dashboard</h1>
            <a href="http://">
                <span class="material-icons">notifications</span>
            </a>
        </div> -->
        <!-- row 1 -->
        <!-- <div class="cards-list">
            <a href="motherCardFormTitles.php">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">description</span>
                    <h3>Mother Card</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">timeline</span>
                    <h3>Timeline</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">medical_information</span>
                    <h3>Medical Instructions</h3>
                    </div>
                </div>
            </a>
        </div> -->

        <!-- row 2 -->
        <!-- <div class="cards-list">
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">calendar_month</span>
                    <h3>Calendar</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">calculate</span>
                    <h3>Fetal Growth Calculator</h3>
                    </div>
                </div>
            </a>
            <a href="mother-listAppointments.php">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">medical_information</span>
                    <h3>Appoinments</h3>
                    </div>
                </div>
            </a>
        </div> -->

        <!-- row 3 -->
        <!-- <div class="cards-list">
            <?php
                //$email = $_SESSION['email'];
                //$sql = "SELECT * FROM child_details WHERE mom_email = '$email'";
               // $result = mysqli_query($con, $sql);
                //$row = mysqli_fetch_array($result);

            //echo $row['child_name'];//"<a href='child-dashboard.php?child_id=".$row['child_id']."'>";?>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">description</span>
                    <h3>Children</h3>
                    </div>
                </div>
            </a>
        </div> -->
        <!-- Logout -->
        <!-- <div class="logout">
            <span></span>
            <a href="../../Config/logout.php">
                <button>
                    <div class="logout-btn-items">
                        <span class="material-icons-outlined">logout</span>
                        <h4>Logout</h4>
                    </div>
                </button>
            </a>   
        </div>
    </div> -->
</body>
</html>
<?php
     }
     else{
        header("Location: ../../index.php");
    }
?>