<?php 

session_start();
include "dbConnection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    // Input validation
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (empty($email)) {
        header("Location: ../mainLogin.php?error=Email is required");
        exit();
    } elseif (empty($password)) {
        header("Location: ../mainLogin.php?error=Password is required");
        exit();
    } else {
        // Salt and hash the password for security
        $password = md5($password);

        $sql = "SELECT * FROM user_tbl WHERE email=? AND password=?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Store the email and hashed password in the session
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $row['user_id'];
			$_SESSION['name'] = $row['name'];
		
			switch ($row['user_role']) {
				case 'admin':
					header("Location: ../View/Admin/admin-dashboard.php");
					break;
				case 'mother':
					$sql_getmomid = "SELECT * FROM mother_details WHERE mom_email='$email'";
					$result_getmomid = mysqli_query($con,$sql_getmomid);
					$row_getmomid = mysqli_fetch_assoc($result_getmomid);

					$_SESSION['mom_id'] = $row_getmomid['mom_id'];

				header("Location: ../View/Mother/mother-dashboard.php");
					header("Location: ../View/Mother/mother-dashboard.php");
					break;
				case 'vog':
					header("Location: ../View/VOG/vog-dashboard.php");
					break;
				case 'ped':
					header("Location: ../View/Pediatrician/ped-dashboardView.php");
					break;
				case 'phm':
					header("Location: ../View/PHM/phm-dashboard.php");
					break;
				default:
					header("Location: ../index.php?error=Incorrect User name or password");
					break;
			}
			exit();
		} else {
			header("Location: ../mainLogin.php?error=Incorrect User name or password");
			exit();
		}
    }
} else {
	header("Location: ../index.php");
	exit();
}
?>
