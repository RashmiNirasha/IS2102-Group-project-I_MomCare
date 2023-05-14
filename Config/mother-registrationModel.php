<?php
define("OTP_LEN", "8"); // password length
include "dbConnection.php";

$mom_fname= $_POST['fname'];
$mom_mname= $_POST['mname'];
$mom_sname= $_POST['sname'];
$mom_address = $_POST['address'];
$mom_dob = $_POST['BOD'];
$mom_email = $_POST['email'];
$mom_tele = $_POST['tele'];
$PHM_id=$_POST['phm_id'];
$mom_nic = $_POST['mom_nic'];

//check nic validity
if(!preg_match("/^[0-9]{9}[vVxX]$|^[0-9]{12}$/", $mom_nic)) {
    echo "<script type='text/javascript'>alert('NIC number is invalid');window.location='../View/Mother/mother-registrationView.php';</script>";
}

$t=time();
$reg_date = date("Y-m-d",$t);

if ($mom_dob > $reg_date || strtotime($mom_dob) > strtotime("-16 years", time()) || strtotime($mom_dob) < strtotime("-100 years", time())) {
    echo "<script type='text/javascript'>alert('Date of birth is invalid');window.location='../View/Mother/mother-registrationView.php';</script>";
}  

$query="SELECT * FROM registered_user_details WHERE email='$mom_email'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1){
    echo "<script type='text/javascript'>alert('Email already exists');window.location='../View/Mother/mother-registrationView.php';</script>";
}else{

    

$password_hash=bin2hex(random_bytes(8));

//calculate age 
$birthDate = $mom_dob;
//explode the date to get month, day and year
$birthDate = explode("-", $birthDate);
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
  ? ((date("Y") - $birthDate[0]) - 1)
  : (date("Y") - $birthDate[0]));

//autogenerate values for mother id
$mother_id = rand(1000,9999);

$sql = "INSERT INTO registered_user_details(reg_user_id,first_name, middle_name, last_name, address, DOB, tele_number, age, email, reg_date, phm_id, password,mom_nic) 
    VALUES ('$mother_id','$mom_fname','$mom_mname','$mom_sname','$mom_address','$mom_dob','$mom_tele','$age','$mom_email','$reg_date','$PHM_id','$password_hash','$mom_nic')";     
   
        if(mysqli_query($con, $sql)){
            //give a message to the user that the registration is successful in the same page
            header("Location:../View/Mother/mother-registrationConfirmation.php");
            exit();
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
           
        }     
}

?>


   





