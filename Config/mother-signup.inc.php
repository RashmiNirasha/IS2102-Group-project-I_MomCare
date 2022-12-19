<?php
    require_once 'dbConnection.php';

    if (isset($_POST['btn-reg'])) {
        $mother_fname = mysqli_real_escape_string($con, $_POST['mother-fname']);
        $mother_mname = mysqli_real_escape_string($con, $_POST['mother-mname']);
        $mother_lname = mysqli_real_escape_string($con, $_POST['mother-lname']);
        $mother_age = mysqli_real_escape_string($con, $_POST['mother-age']);
        $mother_address = mysqli_real_escape_string($con, $_POST['mother-address']);
        $mother_dob = mysqli_real_escape_string($con, $_POST['mother-dob']);
        $phm_id = mysqli_real_escape_string($con, $_POST['phm-id']);
        $mother_email = mysqli_real_escape_string($con, $_POST['mother-email']);
        $mother_phone = mysqli_real_escape_string($con, $_POST['mother-phone']);
        $mother_password = mysqli_real_escape_string($con, $_POST['mother-password']);
        $mother_cpassword = mysqli_real_escape_string($con, $_POST['mother-cpassword']);

        if(empty($mother_fname) || empty($mother_mname) || empty($mother_lname) || empty($mother_age) || empty($mother_address) || empty($mother_dob) || empty($phm_id) || empty($mother_email) || empty($mother_phone) || empty($mother_password) || empty($mother_cpassword))
        {
            header("Location: ../View/Mother/mother-signup.php?signup=empty");
            exit();
        }
        else
        {
            if(!preg_match("/^[a-zA-Z]*$/", $mother_fname) || !preg_match("/^[a-zA-Z]*$/", $mother_mname) || !preg_match("/^[a-zA-Z]*$/", $mother_lname))
            {
                header("Location: ../View/Mother/mother-signup.php?signup=invalid");
                exit();
            }
            else
            {
                if(!filter_var($mother_email, FILTER_VALIDATE_EMAIL))
                {
                    header("Location: ../View/Mother/mother-signup.php?signup=email");
                    exit();
                }
                else
                {
                    $sql = "SELECT * FROM registered_user_details WHERE email='$mother_email'";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0)
                    {
                        header("Location: ../View/Mother/mother-signup.php?signup=usertaken");
                        exit();
                    }
                    else
                    {
                        if($mother_password != $mother_cpassword)
                        {
                            header("Location: ../View/Mother/mother-signup.php?signup=password");
                            exit();
                        }
                        else
                        {
                            $hashedPwd = md5($mother_password);
                            $sql = "INSERT INTO registered_user_details (`first_name`, `middle_name`, `last_name`, `age`, `address`, `DOB`, `phm_id`, `email`, `tele_number`, `password`) VALUES ('$mother_fname', '$mother_mname', '$mother_lname', '$mother_age', '$mother_address', '$mother_dob', '$phm_id', '$mother_email', '$mother_phone', '$hashedPwd')";
                            $result = mysqli_query($con, $sql);

                            if($result)
                            {
                                header("Location: ../View/Mother/mother-signup.php?signup=success");
                                exit();
                            }
                            else
                            {
                                header("Location: ../View/Mother/mother-signup.php?signup=error");
                                exit();
                            }
                        }
                    }
                }
            }
        }

        
    }
?>