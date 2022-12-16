<script>
function SignUp() {
  alert("Sign up successful.now you can log in");
}
</script>

<?php

if (empty($_POST["name"])) {
    die("Name is required");
}
if (empty($_POST["address"])) {
    die("address is required");
}

if (empty($_POST["dob"])) {
    die("date of birth is required");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (empty($_POST["phone"])) {
    die("Telephone number is required");
}
if (empty($_POST["worlplace"])) {
    die("Workplace is required");
}
if (empty($_POST["designation"])) {
    die("designation is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password2"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$doc_name= $_REQUEST['name'];
$doc_address = $_REQUEST['address'];
$doc_dob = $_REQUEST['dob'];
$doc_email = $_REQUEST['email'];
$doc_phone = $_REQUEST['phone'];
$doc_workplace = $_REQUEST['worlplace'];
$doc_designation = $_REQUEST['designation'];

$query="SELECT * FROM doctor_details WHERE doc_email='$doc_email'";
$result=mysqli_query($mysqli,$query);
$num=mysqli_num_rows($result);
if($num==1){
    
    echo "Email already taken";
}else{

$sql = "INSERT INTO doctor_details(doc_name , doc_address , doc_DOB, doc_email, doc_tele, doc_workplace, doc_type,password) 
VALUES ( '$doc_name', '$doc_address', '$doc_dob', '$doc_email', '$doc_phone', '$doc_workplace', '$doc_designation','$password_hash')";
        
        if(mysqli_query($mysqli, $sql)){
            echo "Registered successfully.";
            header("Location: ../View/Pediatrician/pediatrician-loginView.php");
        
        } else{
            if ($mysqli->errno === 1062) {
                die("Email already taken");
            } else {
                echo "ERROR: not succesfull $sql. " 
                . mysqli_error($mysqli);
                die($mysqli->error . " " . $mysqli->errno);
            }
           
        }     
}
// Close connection  
?>


   





