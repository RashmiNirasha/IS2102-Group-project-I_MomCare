<?php 
session_start();
if(isset($_POST["view"])){
    include 'Config/dbConnection.php';
    if($_POST["view"] != ''){
        mysqli_query($con,"UPDATE `mom_appointments` SET seen_status='1' WHERE seen_status='0'");
    }

    switch ($_SESSION['user_role']) {
        case 'mom':
            $id = $_SESSION['id'];

            $query = mysqli_query($con, "SELECT * FROM `mom_appointments` WHERE `mom_id` = '".$id."' ORDER BY `start` DESC LIMIT 5");
            $output = '';

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    $output .= '
                        <li>
                            <a href="View/Mother/mother-calendarView.php?mom_id='.$id.'">
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
                'notification' => $output,
                'unseen_notification' => $count
            );
            echo json_encode($data);

            break;
        case 'ped':
            $id = $_SESSION['id'];

            $query = mysqli_query($con, "SELECT * FROM `mom_appointments` WHERE `doc_id` = '".$id."' ORDER BY `start` DESC LIMIT 5");
            $output = '';

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    $output .= '
                        <li>
                            <a href="View/Pediatrician/ped-scheduleManager.php?doc_id='.$id.'">
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
                'notification' => $output,
                'unseen_notification' => $count
            );
            echo json_encode($data);

            break;
        // case 'admin':
        //     $id = $_SESSION['user_id'];

        //     $query = mysqli_query($con, "SELECT * FROM `mom_appointments` WHERE `doc_id` = '".$id."' ORDER BY `start` DESC LIMIT 5");
        //     $output = '';

        //     if(mysqli_num_rows($query) > 0){
        //         while($row = mysqli_fetch_array($query)){
        //             $output .= '
        //                 <li>
        //                     <a href="ped-scheduleManager.php?doc_id='.$id.'">
        //                     <strong>'.$row['title'].'</strong></a><br />
        //                 </li>
        //                 ';
        //         }
        //     }
        //     else{
        //         $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
        //     }

        //     $query1=mysqli_query($con,"SELECT * FROM `mom_appointments` WHERE seen_status='0'");
        //     $count = mysqli_num_rows($query1);
        //     $data = array(
        //         'notification'   => $output,
        //         'unseen_notification' => $count
        //     );
        //     echo json_encode($data);

        //     break;
        case 'vog':
            $id = $_SESSION['id'];

            $query = mysqli_query($con, "SELECT * FROM `mom_appointments` WHERE `doc_id` = '".$id."' ORDER BY `start` DESC LIMIT 5");
            $output = '';

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    $output .= '
                        <li>
                            <a href="/View/VOG/vog-scheduleManager.php?doc_id='.$id.'">
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
                'notification' => $output,
                'unseen_notification' => $count
            );
            echo json_encode($data);

            break;

        case 'phm':
            $id = $_SESSION['id'];

            $query = mysqli_query($con, "SELECT * FROM `mom_appointments` WHERE `phm_id` = '".$id."' ORDER BY `start` DESC LIMIT 5");
            $output = '';

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    $output .= '
                        <li>
                            <a href="View/PHM/phm-scheduleManager.php?doc_id='.$id.'">
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
                'notification' => $output,
                'unseen_notification' => $count
            );
            echo json_encode($data);

            break;

        default:
            $id = $_SESSION['id'];

            $query = mysqli_query($con, "SELECT * FROM `mom_appointments` WHERE `doc_id` = '".$id."' ORDER BY `start` DESC LIMIT 5");
            $output = '';

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    $output .= '
                        <li>
                            <a href="ped-scheduleManager.php?doc_id='.$id.'">
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
                'notification' => $output,
                'unseen_notification' => $count
            );
            echo json_encode($data);

            break;
    }
}
