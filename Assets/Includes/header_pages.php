<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomCare 2.0</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            margin: 0%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .topnav {
            background-color: #ffffff;
            margin-right: 0px;
            overflow: hidden;
            position: fixed;
            top: -5px;
            padding-top: 10px;
            width: 100%;
            height: 60px;
            margin-top: -7px;
            box-shadow: 0 3px 100px 10px rgba(0, 0, 0, .20);
            border-color: #111c431f;
            border-style: solid;
            border-width: 1px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .topnav ul li a {
            display: block;
            color: #111C43;
            font-family: 'Calibri';
            font-weight: bold;
            text-decoration: none;
            font-size: 17px;
            padding: 18px 20px 22px 20px;
            background-color: #ffffff;
        }

        .topnav ul {
            width: 100%;
            margin-right: 20px;
            padding-left: 0px;
            height: 100%;
            /* background-color: #111C43; */
        }

        .topnav ul li {
            padding: 0px;
            display: inline-block;
            gap: 0px;
            list-style: none;
            height: 100%;
        }

        .topnav ul li:last-child:hover a {
            background-color: #ff0000;
            color: #ffffff;
        }

        .topnav ul li a:hover {
            background-color: #029EE4;
            color: #ffffff;
        }



        .topnav ul li:last-child {
            float: right !important;
        }

        .notifyBtn {
            float: right !important;
        }

        .logo-MomCare {
            width: 151px;
            height: 50px;
            padding-left: 10px;
            top: 8px;
        }

        .profile_pic {
            width: 40px;
            height: 40px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 5px;
            margin-right: 20px;
            border-style: solid;
            border-width: 1px;
            stroke: #111C43;
        }

.hidden-link {
    display: none;
}

.dropdown-toggle:hover {
    background-color: #fefefe !important;
}

.dropdown {
    display: block;

}

.dropdown ul {
    display: flex;
    flex-direction: column;
    width: 220px;
    height: max-content;
    margin-right: -20px;
}

.dropdown-menu {
    position: fixed;
    display: flex;
    justify-content: left;
    margin-top: 10px;
    right: 0px;
    font-size: 12px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
}


.dropdown-menu li {
    width: 180px;
    margin-bottom: 0px;
    white-space: nowrap;
    cursor: pointer;
    height: 60px;
}

.dropdown-menu li a {
    text-decoration: none;
    margin-bottom: -12px;
    color: #111c43;
    font-weight: bold;
    font-size: 14px;
    background-color: #ffffff !important;
}

.dropdown-menu li:last-child {
    margin-right: 40px;
}

.dropdown-menu li a:hover {
    background-color: #029EE4 !important;
}

.dropdown-toggle {
    width: 50px;
    height: 10px;
    font-size: 18px;
    background-color: #fff;
    cursor: pointer;
    border: none;
    
}

.dropdown-toggle:hover {
    background-color: #f5f5f5;
    border-radius: 10%;
}

.count {
    display: flex;
    position: absolute;
    color: #fff;
    border-radius: 30%;
    background-color: #ff0000;
    padding: 2px 5px 2px 5px;
    font-size: 12px;
    margin-left: 5px;
    top: 30px;
    right: 110px;
    margin-bottom: 5px;
    font-weight: bold;
}
.hide {
    display: none !important;
}
    </style>
    <script type="text/javascript">
        $(document).ready(function() {

            function load_unseen_notification(view = '') {
                $.ajax({
                    url: "ped-notification.php",
                    method: "POST",
                    data: {
                        view: view
                    },
                    dataType: "json",
                    success: function(data) {
                        $('.dropdown-menu').html(data.notification);
                        // if (data.unseen_notification > 0) {
                            $('.count').html(data.unseen_notification);
                        // }
                    }

                });
            }

            load_unseen_notification();
            $(document).on('click', '.dropdown-toggle', function() {
                $('.count').html('');
                $(".dropdown-menu").toggle();
                load_unseen_notification('yes');
            });

            setInterval(function() {
                load_unseen_notification();;
            }, 5000);
            });
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('.dropdown-menu').hide();
            }
        });
    </script>
</head>

<body>
    <div>
        <nav class="topnav"> <!-- top navigation bar -- start -->
            <img class="logo-MomCare" src="../../Assets/images/common/logo.png" alt="logo-MomCare">
            <ul>
                <li><a href="../../index.php">Home</a></li><!-- gap-remove 
        -->
                <li><a href="../../About.php">About</a></li><!-- gap-remove
        -->
                <li><!--<a >Dashboard</a> -->
                    <?php
                    if (isset($_SESSION['email'])) {
                        //get user role
                        include "../../Config/dbConnection.php";
                        $query = "SELECT * FROM user_tbl WHERE email = '" . $_SESSION['email'] . "'";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
                        $_SESSION['user_role'] = $row['user_role'];
                        //choose the right dashboard page
                        if ($_SESSION['user_role'] == 'phm') {
                            $phm_query = "SELECT * FROM phm_details WHERE phm_email = '" . $_SESSION['email'] . "'";
                            $phm_result = mysqli_query($con, $phm_query);
                            $phm_row = mysqli_fetch_array($phm_result);
                            $_SESSION['phm_id'] = $phm_row['phm_id'];
                            echo '<a href="../../View/PHM/phm-dashboard.php">Dashboard</a>';
                        } else if ($_SESSION['user_role'] == 'ped') {
                            echo '<a href="../../View/Pediatrician/ped-dashboardView.php">Dashboard</a>';
                        } else if ($_SESSION['user_role'] == 'vog') {
                            echo '<a href="../../View/VOG/vog-dashboard.php">Dashboard</a>';
                        } else if ($_SESSION['user_role'] == 'admin') {
                            echo '<a href="../../View/Admin/admin-dashboard.php">Dashboard</a>';
                        } else if ($_SESSION['user_role'] == 'mother') {
                            echo '<a href="../../View/Mother/mother-dashboard.php">Dashboard</a>';
                        } else {
                            echo 'Dashboard';
                        }
                    }
                    ?>
                </li>
                <?php
                if (isset($_SESSION['email'])) {
                    //get user role
                    include "../../Config/dbConnection.php";
                    $query = "SELECT * FROM user_tbl WHERE email = '" . $_SESSION['email'] . "'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result);
                    $_SESSION['user_role'] = $row['user_role'];
                    //choose the right dashboard page
                    if ($_SESSION['user_role'] == 'mother') {
                        echo '<li><a href="../../View/Child/Contact.php">Contact</a></li>
                            ';
                    }
                }
                ?>
                <li class="notifyBtn">
                    <div class="dropdown" id="dropdown">
                        <a href="#" class="dropdown-toggle">
                            <span class="count">0</span>
                            <span class="material-symbols-outlined" data-icon="notify">notifications</span>
                        </a>
                        <ul class="dropdown-menu hide"></ul>
                    </div>
                </li>
                <li><a href="../../Config/logout.php">Log out</a></li>
            </ul>
            <?php
            if (isset($_SESSION['email'])) {
                //get user role
                include "../../Config/dbConnection.php";
                $query = "SELECT * FROM user_tbl WHERE email = '" . $_SESSION['email'] . "'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
                $_SESSION['user_role'] = $row['user_role'];
                $_SESSION['user_id'] = $row['user_id'];
                //choose the right dashboard page
                if ($_SESSION['user_role'] == 'phm') {
                    $phmpp_query = "SELECT phm_profile_pic FROM phm_details WHERE phm_id = '" . $_SESSION['phm_id'] . "'";
                    $phmpp_result = mysqli_query($con, $phmpp_query);
                    $phmpp_row = mysqli_fetch_array($phmpp_result);
                    $phm_profile_picture = $phm_row['phm_profile_pic'];
                    echo '<a href="../../View/phm/phm-profile.php"><img class="profile_pic" src="' . $phm_profile_picture . '" alt="profile_pic"></a>';
                    // echo '<a href=""><img class="profile_pic" src="../../Assets/Images/phm/phm_proPic.png" alt="profile_pic"></a>';
                } else if ($_SESSION['user_role'] == 'ped') {
                    $doc_sql = "SELECT doc_profile_pic FROM doctor_details WHERE doc_id = '" . $_SESSION['user_id'] . "'";
                    $doc_result = mysqli_query($con, $doc_sql);
                    $doc_profile_pic = mysqli_fetch_array($doc_result);
                    echo '<a href="../../View/Pediatrician/ped-profile.php"><img class="profile_pic" src="' . $doc_profile_pic['doc_profile_pic'] . '" alt="profile_pic_vog"></a>';
                } else if ($_SESSION['user_role'] == 'vog') {
                    $doc_sql = "SELECT doc_profile_pic FROM doctor_details WHERE doc_id = '" . $_SESSION['user_id'] . "'";
                    $doc_result = mysqli_query($con, $doc_sql);
                    $doc_profile_pic = mysqli_fetch_array($doc_result);
                    echo '<a href="../../View/Vog/vog-profile.php"><img class="profile_pic" src="' . $doc_profile_pic['doc_profile_pic'] . '" alt="profile_pic_vog"></a>';
                } else if ($_SESSION['user_role'] == 'admin') {
                    echo '<a href=""><img class="profile_pic" src="../../Assets/Images/admin/people.png" alt="profile_pic"></a>';
                } else if ($_SESSION['user_role'] == 'mother') {
                    $mom_sql = "SELECT mom_propic FROM mother_details WHERE mom_email = '" . $_SESSION['email'] . "'";
                    $mom_result = mysqli_query($con, $mom_sql);
                    $mom_profile_pic = mysqli_fetch_array($mom_result);
                    echo '<a href="../../View/Mother/mother-profileDetails.php"><img class="profile_pic" src="' . $mom_profile_pic['mom_propic'] . '" alt="profile_pic"></a>';
                    //echo '<a href="../../View/mother/mother-profileDetails.php"><img class="profile_pic" src="../../Assets/Images/mother/Profile_pic_mother.png" alt="profile_pic"></a>';
                } else {
                    //echo 'Dashboard';
                }
            } else {
                echo '<a href="../../Login.php"><img class="profile_pic" src="../../Assets/images/common/login.png" alt="profile_pic"></a>';
            }
            ?>
            <!-- <img class="profile_pic" src="../../Assets/images/vog/doctor.png" alt="profile_pic"> -->
        </nav> <!-- top navigation bar -- end -->
    </div>
</body>

</html>