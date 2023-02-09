<?php
    include "../../Assets/Includes/header_phm.php";
    // session_start();
    // if (isset($_SESSION['s_email'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="..\..\Assets\css\style-common.css" type="text/css">
    <!-- <link rel="icon" href="..\..\Assets\Images\images-Sachini\logo.png" type="image/icon type"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style>
</head>
<body>
    <div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
            <h1>Children</h1>
            <div class="a-container-m">
            <a href = "phm-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
            </div>
            </div>

            <div class="p-bar-container">
                <div class="p-bar">
                    <div class="p-img-manage">
                        <i class ="material-icons" alt="child icon">child_care</i>
                        <div class="p-text-manage">
                            <h3>Sandali Nimasha</h3>
                            <p>Maharagama</p>
                        </div>
                    </div>
                    <div class="p-btn">
                        <div class="p-btn-manage">
                        <a href="#"><button>Allocate Pediatrician</button></a>
                            <div class="p-btn-manage-grid">
                                <input type="button" value="Date 22/11/2022">
                                <input type="button" value="Time 8.45 am">
                            </div>
                            <i class ="material-icons" alt="settings icon">settings</i> 
                        </div> 
                        </div>
                    </div>    

                <div class="p-bar">
                    <div class="p-img-manage">
                        <i class ="material-icons" alt="child icon">child_care</i>
                        <div class="p-text-manage">
                            <h3>Pasindu Lakshan</h3>
                            <p>Colombo</p>
                        </div>
                    </div>
                    <div class="p-btn">
                        <div class="p-btn-manage">
                            <a href="#"><button>Allocate Pediatrician</button></a>
                            <div class="p-btn-manage-grid">
                                <input type="button" value="Date 22/11/2022">
                                <input type="button" value="Time 8.45 am">
                            </div> 
                            <i class ="material-icons" alt="settings icon">settings</i>
                        </div> 
                        </div>
                    </div>  

                <div class="p-bar">
                    <div class="p-img-manage">
                        <i class ="material-icons" alt="child icon">child_care</i>
                        <div class="p-text-manage">
                            <h3>Nimal Jayashan</h3>
                            <p>Galle</p>
                        </div>
                    </div>
                    <div class="p-btn">
                        <div class="p-btn-manage">
                            <a href="#"><button>Allocate Pediatrician</button></a>
                            <div class="p-btn-manage-grid">
                                <input type="button" value="Date 22/11/2022">
                                <input type="button" value="Time 8.45 am">
                            </div> 
                            <i class ="material-icons" alt="settings icon">settings</i>
                        </div> 
                        </div>
                    </div>     
            </div>

        </div>

        <div class="a-content-2">
            <span></span>
            <a href = "..\..\Config\admin-logout.php"><button>
                <div class="a-btn-text"><h6>Log out</h6></div>
                <i class="material-icons" alt="logout">logout</i>
            </button></a>
        </div>
    </div>
</body>
</html>

<?php
// }else{
//     header("Location:admin-login.php");
// }

?>