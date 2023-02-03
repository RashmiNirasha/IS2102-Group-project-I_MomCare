<?php 

session_start();
include "dbConnection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	// validation
	$email = test_input($_POST['email']);
	$password = test_input($_POST['password']);

    //hashing password
    $password = md5($password);

	if (empty($email)) {
		header("Location: ../index.php?error=email is Required");
	} else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
	} else {

		$sql = "SELECT * FROM user_tbl WHERE email='$email' AND password='$password'";
		$result = mysqli_query($con, $sql);

		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		//$_SESSION['user_role'] = $user_role;
       
		if (mysqli_num_rows($result) === 1) {
			// the user name must be unique
			$row = mysqli_fetch_assoc($result);
			if ($row['user_role']=='admin') {
				
				$_SESSION['id'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
				header("Location: ../View/Admin/admin-dashboard.php");

			} else if ($row['user_role']=='mother') {
                $_SESSION['id'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
				header("Location: ../View/Mother/mother-dashboard.php");

			} else if ($row['user_role']=='vog') {
                $_SESSION['id'] = $row['user_id'];
				header("Location: ../View/VOG/dashboardVog.php");

			} else if ($row['user_role'] == 'ped') {
				$_SESSION['id'] = $row['user_id'];
				header("Location: ../View/Pediatrician/pediatrician-dashboardView.php");

			}else if ($row['user_role']=='phm') {
                $_SESSION['id'] = $row['user_id'];
				header("Location: ../View/PHM/phm-dashboard.html");
			} else {
				header("Location: ../index.php?error=Incorect User name or password");
			}
		}
	}
}
?>
