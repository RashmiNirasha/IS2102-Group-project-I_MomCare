
<?php
define("OTP_LEN", "8"); // password length
include "../../Config/dbConnection.php";
include "../../Assets/Includes/email.php";

if (empty($_POST["fname"])) {
    die("First Name is required");
}
// if (empty($_POST["mname"])) {
//     die("Middle Name is required");
// }
if (empty($_POST["sname"])) {
    die("Last Name is required");
}
if (empty($_POST["address"])) {
    die("address is required");
}

if (empty($_POST["BOD"])) {
    die("date of birth is required");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (empty($_POST["tele"])) {
    die("Telephone number is required");
}

if (empty($_POST["phm_id"])) {
    die("phm id is required");
}

if(!preg_match("/^[0-9]{10}$/", $_POST["tele"])) {
    die("Telephone number must be 10 digits");
}

$mom_fname= $_REQUEST['fname'];
$mom_mname= $_REQUEST['mname'];
$mom_sname= $_REQUEST['sname'];
$mom_address = $_REQUEST['address'];
$mom_dob = $_REQUEST['BOD'];
$mom_email = $_REQUEST['email'];
$mom_tele = $_REQUEST['tele'];
$PHM_id=$_REQUEST['phm_id'];

$query="SELECT * FROM registered_user_details WHERE email='$mom_email'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1){
    echo "Email already taken";
}else{

$alphabets = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
$count = strlen($alphabets) - 1;
$pass = "";
  for ($i=0; $i<OTP_LEN; $i++) { $pass .= $alphabets[rand(0, $count)]; }
    $password_hash = password_hash($pass, PASSWORD_DEFAULT);
    $t=time();
$reg_date = date("Y-m-d",$t);

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

$sql = "INSERT INTO registered_user_details(reg_user_id,first_name, middle_name, last_name, address, DOB, tele_number, age, email, reg_date, phm_id, password) 
    VALUES ('$mother_id','$mom_fname','$mom_mname','$mom_sname','$mom_address','$mom_dob','$mom_tele','$age','$mom_email','$reg_date','$PHM_id','$password_hash')";     
   
    $message = "Hi $mom_sname! Account created , Please go to this link and create a new password.</br>
    link http://localhost/IS2102-Group-project-I_MomCare/View/reset-password.php</br>
    your password is $password_hash </br>
    Username: $mom_email";

   
        sendemail($mom_email,'Activate Account',$message);

        if(mysqli_query($con, $sql)){
            //give a message to the user that the registration is successful in the same page
            header("Location:mother-registrationConfirmation.php?success=" . urlencode("Please wait until admin verifies your account.</br>Account Activation mail will be sent to your email account"));
            exit();
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
           
        }     
}

?>


   





