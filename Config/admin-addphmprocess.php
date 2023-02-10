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

            $id = $_POST['phmid'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $work = $_POST['work'];

            //Check whether the Doctor ID is already taken
            $sql_check = "(SELECT count(phm_id) as 'phm' FROM phm_details WHERE phm_id='$id');";
            $check = $con->query($sql_check);

            if ($check->num_rows>0){
                while ($row = $check->fetch_assoc()){
                    $doc_idExists ="$row[phm]";
                }
            }
            echo "$doc_idExists";


            if ($doc_idExists == 0){

                //insert data
                $sql_insert = "INSERT INTO phm_details (phm_id, phm_name, phm_age, phm_address, phm_DOB, phm_email, phm_tele, phm_workplace) VALUES 
                ('$id', '$name', '$age', '$address', '$dob', '$email', '$tel', '$work')";

                echo $sql_insert;

                $insert = $con->query($sql_insert);
                echo "$insert";
                if ($insert){
                    header("Location:..\View\Admin\admin-addphm.php?status=success");
                }
            }elseif ($doc_idExists == 1){
                header("Location:..\View\Admin\admin-addphm.php?status=errorIDTaken");
            }
            
        }
        }
    else{
        header("Location:..\View\Admin\admin-addphm.php?status=erroremptyField");
    }

?>