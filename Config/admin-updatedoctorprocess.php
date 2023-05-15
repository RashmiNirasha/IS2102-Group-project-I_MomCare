<?php

//connecting to the database
 require_once 'dbConnection.php';


//process the form if $_POST is not empty
function is_array_empty($arr){
    if(is_array($arr)){
       foreach($arr as $value){
          if(empty($value)){
             return false;
          }
       }
    }
    return true;
}

    $varCheck = is_array_empty($_POST);

    if ($varCheck == true){
    
    //When the button is clicked
    if (isset($_POST['insert'])){
            
        $id = $_POST['docid'];
        $type = $_POST['dtype'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $age = date_diff(date_create($dob), date_create('today'))->y; // calculate age
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $work = $_POST['work'];
        $password = md5($name);

            //Check whether the Doctor ID is already taken
            $sql_check = "(SELECT count(doc_id) as 'doc' FROM doctor_details WHERE doc_id='$id');";
            $check = $con->query($sql_check);

            if ($check->num_rows>0){
                while ($row = $check->fetch_assoc()){
                    $doc_idExists ="$row[doc]";
                }
            }
            echo "$doc_idExists";


            if ($doc_idExists == 1){

                //update data
                $sql_update = "UPDATE doctor_details SET doc_type='$type', doc_name='$name', doc_age='$age', doc_address='$address', doc_DOB='$dob', doc_email='$email', doc_tele='$tel', doc_workplace='$work' where doc_id = '$id' ";

                echo $sql_update;

                $update = $con->query($sql_update);
                echo "$update";
                if ($update){

                    $sql_update_user_tbl = "UPDATE user_tbl SET email='$email', password='$password', name='$name', user_role='$type' where user_id='$id'";

                    // echo $sql_insert;

                    $update_user_tbl = $con->query($sql_update_user_tbl);

                    if ($update_user_tbl){

                    }else{
                        echo "Error: " .$sql_update_user_tbl . "<br>" . mysqli_error($con);
                    }

                    header("Location:..\View\Admin\admin-updatedoctor.php?status=success");
                }
            }//elseif ($doc_idExists == 0){
            //     header("Location:..\View\Admin\admin-updatedoctor.php?status=errorIDTaken");
            // }
            
        }
        }
    else{
        header("Location:..\View\Admin\admin-updatedoctor.php?status=erroremptyField");
    }

?>