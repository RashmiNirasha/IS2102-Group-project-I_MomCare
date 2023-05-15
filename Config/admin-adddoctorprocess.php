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
            // echo "$doc_idExists";


            if ($doc_idExists == 0){

                //insert data
                $sql_insert_doctor = "INSERT INTO doctor_details (doc_id, doc_type, doc_name, doc_age, doc_address, doc_DOB, doc_email, doc_tele, doc_workplace, doc_password) VALUES 
                ('$id', '$type', '$name', $age, '$address', '$dob', '$email', $tel, '$work','$password')";

                // echo $sql_insert;

                $insert_doctor = $con->query($sql_insert_doctor);
                
                // print_r($insert);
                if ($insert_doctor){

                    $sql_insert_user_tbl = "INSERT INTO user_tbl (user_id, email, password, name, user_role, doc_id) VALUES 
                    ('$id', '$email','$password', '$name', '$type', '$id')";

                    // echo $sql_insert;

                    $insert_user_tbl = $con->query($sql_insert_user_tbl);

                    if ($insert_user_tbl){
                        header("Location:..\View\Admin\admin-adddoctor.php?status=success&password=$password");
                    }else{
                        echo "Error: " .$sql_insert_user_tbl . "<br>" . mysqli_error($con);
                    }

                    // header("Location:..\View\Admin\admin-adddoctor.php?status=success&password=$password");
                }else{
                    echo "Error: " .$sql_insert_doctor . "<br>" . mysqli_error($con);
                }
            }elseif ($doc_idExists == 1){
                header("Location:..\View\Admin\admin-adddoctor.php?status=errorIDTaken");
            }
            
        }
        }
    else{
        header("Location:..\View\Admin\admin-adddoctor.php?status=erroremptyField");
    }

?>