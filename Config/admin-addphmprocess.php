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

if ($varCheck == true) {

    //When the button is clicked
    if (isset($_POST['insert'])) {

        $id = $_POST['phmid'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        //$age = date_diff(date_create($dob), date_create('today'))->y; // calculate age
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $work = $_POST['work'];
        $password = md5($name);

        // Check whether the Doctor ID is already taken
        $sql_check = "(SELECT count(phm_id) as 'phm' FROM phm_details WHERE phm_id='$id');";
        $check = $con->query($sql_check);

        if ($check->num_rows>0){
            while ($row = $check->fetch_assoc()){
                $doc_idExists ="$row[phm]";

            }
        }

        // echo "$doc_idExists";
        if ($doc_idExists == 0){

        //insert data to phm table
        $sql_phm = "INSERT INTO phm_details (phm_id, phm_name, phm_address, phm_DOB, phm_email, phm_tele, phm_workplace, phm_password) VALUES 
                ('$id', '$name', '$address', '$dob', '$email', '$tel', '$work', '$password')";
         $result_phm = mysqli_query($con, $sql_phm);

        if ($result_phm) {

            // insert data to user table only if record added to phm table
            $sql_user_tbl = "INSERT INTO user_tbl (email, password,  name, user_role) VALUES 
                ('$email', '$password', '$name', 'phm')";
            $result_user_tbl = mysqli_query($con, $sql_user_tbl);

            //redirect if the record added to both table successfully
            if ($result_user_tbl) {
                header("Location:..\View\Admin\admin-addphm.php?status=success");
            } else {
                echo "Error: " . $sql_user_tbl . "<br>" . mysqli_error($con);
            }
        } else {
            echo "Error: " . $sql_phm . "<br>" . mysqli_error($con);
        }
    }
}
}

                //echo $sql_insert;

                // $insert = $con->query($sql_insert);
                // //echo "$insert";
                // if ($insert){
                //     header("Location:..\View\Admin\admin-addphm.php?status=success");
                // }

        //     }elseif ($doc_idExists == 1){
        //         header("Location:..\View\Admin\admin-addphm.php?status=errorIDTaken");
        //     }
            
        // }
        // }
    else{
        header("Location:..\View\Admin\admin-addphm.php?status=erroremptyField");
    }

    // if ($result_phm) {
    //     header("Location:..\View\Admin\admin-addphm.php?status=success");
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($con);
    // }

?>