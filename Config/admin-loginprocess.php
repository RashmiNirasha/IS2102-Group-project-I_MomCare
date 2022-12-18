<?php
    //Connecting to the database;
    require_once "dbConnection.php";

    session_start();
    

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
    $check_not_null = is_array_empty($_POST);


if ($check_not_null == true){
    if (isset($_POST['insert'])){
        if ($_POST['role'] == 'admin'){
            $password = md5($_POST['password']);
            $email = $_POST['email'];

            $sql = "SELECT count(ad_passwd) as 'ad_password' FROM admin WHERE ad_passwd='$password' and ad_email='$email'";

                $select = $con -> query($sql);

                if ($select->num_rows>0){
                    while ($row = $select->fetch_assoc()){
                        $ad_exists ="$row[ad_password]";
                    }
                if ($ad_exists == 1){
                    $_SESSION['s_email'] = $email;
                    $_SESSION['s_password'] = $password;
                    header('Location:..\View\Admin\admin-login.php?status=success');
                }else{
                    header('Location:..\View\Admin\admin-login.php?status=errorNoRecord');
                }
            }
        }//elseif ($_POST['role'] == 'VOG'){
        //     header('Location:..\View\VOG\VOG-dashboard.php');
        // }elseif role != admin and role != VOG return to the another page   
    }
}elseif ($check_not_null == false){
    header("Location:..\View\Admin\admin-login.php?status=errorfieldEmpty");
}





?>