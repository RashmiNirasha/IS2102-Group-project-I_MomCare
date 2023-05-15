<?php 
session_start();
if(isset($_POST["view"])){
    include '../../Config/dbConnection.php';
    if($_POST["view"] != ''){
        mysqli_query($con,"UPDATE `mom_appointments` SET seen_status='1' WHERE seen_status='0'");
    }

    $doc_id = $_SESSION['user_id'];
    $query = mysqli_query($con, "SELECT * FROM `mom_appointments` WHERE `doc_id` = '".$_SESSION['user_id']."' ORDER BY `start` DESC LIMIT 5");
    $output = '';

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_array($query)){
            $output .= '
                <li>
                    <a href="ped-scheduleManager.php?doc_id='.$doc_id.'">
                    <strong>'.$row['title'].'</strong></a><br />
                </li>
                ';
        }
    }
    else{
        $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
    }

    $query1=mysqli_query($con,"SELECT * FROM `mom_appointments` WHERE seen_status='0'");
    $count = mysqli_num_rows($query1);
    $data = array(
        'notification'   => $output,
        'unseen_notification' => $count
    );
    echo json_encode($data);
}
