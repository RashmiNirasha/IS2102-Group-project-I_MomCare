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
            $sql_check = "(SELECT count(doctor_id) as 'doc' FROM doctor_details WHERE doctor_id='$id');";
            $check = $con->query($sql_check);

            if ($check->num_rows>0){
                while ($row = $check->fetch_assoc()){
                    $doc_idExists ="$row[doc]";
                }
            }
            echo "$doc_idExists";

            if ($doc_idExists == 0){

                //insert data
                $sql_insert = "INSERT INTO doctor_details (doctor_id, doc_type, doc_name, doc_age, doc_address, doc_DOB, doc_email, doc_tele, doc_workplace) VALUES 
                ('$id', '$type', '$name', '$age', '$address', '$dob', '$email', '$tel', '$work')";

                $insert = $con->query($sql_insert);
                if ($insert){
                    header("Location:..\View\Admin\admin-adddoctor.php?status=success");
                }
            }elseif ($doc_idExists == 1){
                header("Location:..\View\Admin\admin-adddoctor.php?status=errorIDTaken");
            }
        }
    }else{
        header("Location:..\View\Admin\admin-adddoctor.php?status=erroremptyField");
    }

?>