<?php 
    require_once 'dbConnection.php';

    if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashpw = md5($password);

        $sql = "SELECT * FROM registered_user_details WHERE email = '$username' AND password = '$hashpw'";
        if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['mother_fname'] = $row['first_name'];
                header("Location: ../View/Mother/mother-dashboard.php");
                exit();
            }
            else{
                header("Location: ../View/Mother/mother-login.php?login=error");
                exit();
            }
        }
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    
    }
?>