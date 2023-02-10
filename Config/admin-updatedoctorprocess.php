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
            $age = $_POST['age'];
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $work = $_POST['work'];

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
                $sql_update = "UPDATE doctor_details SET doc_id='$id', doc_type='$type', doc_name='$name', doc_age='$age', doc_address='$address', doc_DOB='$dob', doc_email='$email', doc_tele='$tel', doc_workplace='$work' where doc_id = '$id' ";

                echo $sql_update;

                $update = $con->query($sql_update);
                echo "$update";
                if ($update){
                    header("Location:..\View\Admin\admin-updatedoctor.php?status=success");
                }
            }elseif ($doc_idExists == 0){
                header("Location:..\View\Admin\admin-updatedoctor.php?status=errorIDTaken");
            }
            
        }
        }
    else{
        header("Location:..\View\Admin\admin-updatedoctor.php?status=erroremptyField");
    }

?>