<?php
//Connect to the database
require_once "dbConnection.php";

//Function Definintion to check the array is empty
function is_array_empty($arr){
        if (is_array($arr)){
            foreach ($arr as $value){
                if (empty($value)){
                    return 0;
                }
            }
        }
        return 1;
}

//Check whether all the keys paired with a value
$isNotNull = is_array_empty($_POST);
print_r($_POST);
echo "<br> $isNotNull";

if ($isNotNull == 1){
    if (isset($_POST['insert'])){
        if (isset($_POST['role']) && ($_POST['role'] == 'admin')){
            $email = $_POST['email'];
            
            $sql_check = "SELECT COUNT('ad_email') as 'email_count' FROM admin WHERE ad_email='$email'";
            $check = $con->query($sql_check);
            print_r($check);

            if ($check->num_rows>0){
                while ($row = $check->fetch_assoc()){
                    print_r($row);
                    $is_email_exist = $row['email_count'];
                }
            }
            if ($is_email_exist != 1){
                if (strlen($_POST['password']) >= 6){
                    if ($_POST['password'] == $_POST['confirmpass']){
                        $password = md5($_POST['password']);

                        $sql_insert = "INSERT INTO admin (ad_passwd, ad_email) VALUES('$password', '$email')";
                        $insert_admin = $con->query($sql_insert);
                        if ($insert_admin){
                            header("Location:..\View\Admin\signup.php?status=success");
                        }

                    }else{
                        header("Location:..\View\Admin\signup.php?error=confirmPasswordError");
                    }
                }else{
                    header("Location:..\View\Admin\signup.php?error=passLength");
                }
            }else{
                header("Location:..\View\Admin\signup.php?error=emailExist");
            }
        }// else of role != admin
        
    }// else of insert not set
}else{
    header("Location:..\View\Admin\signup.php?error=emptyFields");
}
?>