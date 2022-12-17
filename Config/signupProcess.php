<?php
//Connecting to the database
require_once "dbConnection.php";

//Check Whether all the keys have a value
function is_array_empty($arr){
    if (is_array($arr)){
        foreach ($arr as $value){
            if (empty($value)){
                return false;
            }
        }
    }
    return true;
}

//call the is_array_empty fuction
$check_not_null = is_array_empty($_POST);
if ($check_not_null == true){
        if (isset($_POST['insert'])){
            $email = $_POST['email'];
            if ($_POST['role'] == 'admin'){
                $sql_check = "SELECT COUNT('ad_email') as 'email_count' FROM admin WHERE ad_email='$email'";
                $check = $con->query($sql_check);
                if ($check->num_rows>0){
                    while ($row = $check->fetch_assoc()){
                        $is_email_exist = $row['email_count'];
                        if ($is_email_exist == 0){
                            if (strlen($_POST['password']) >= 6){
                                if ($_POST['password'] == $_POST['confirmpass']){
                                    $password = md5($_POST['password']);
                                }elseif($_POST['password'] != $_POST['confirmpass']){
                                    header("Location:..\View\Admin\signup.php?error=confirmPasswordError");
                                }
                            }else{
                                header("Location:..\View\Admin\signup.php?error=passLength");
                            }
                        }else{
                            header("Location:..\View\Admin\signup.php?error=emailExist");
                        }
                    }
                }


            $sql_insert = "INSERT INTO admin (ad_passwd, ad_email) VALUES('$password', '$email')";
            $insert_admin = $con->query($sql_insert);
            if ($insert_admin){
                header("Location:..\View\Admin\signup.php?status=success");
            }

        }
    }//elseif($_POST['role'] == 'mother'){ header(Location:)}
    
}elseif ($check_not_null == false){
    header("Location:..\View\Admin\signup.php?error=emptyFields");
}








?>