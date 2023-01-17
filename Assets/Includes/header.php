<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation bar</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css?family=roboto);

        *{
            font-family: 'Roboto';
            margin: 0px;
            padding: 0px;
        }
        .nav-bar{
            position: absolute;
            width: 100%;
            height: 70px;
            left: 0px;
            top: 0px;
            background: #FFFFFF;
            display: flex;
            justify-content: space-between;

            filter: drop-shadow(4px 4px 50px rgba(0, 0, 0, 0.25));
        }
        .logo img{
            position: relative;
            width: 175px;
            height: 60px;
            left: 20px;
            top: 5px;
        }
        .nav-bar-items{
            padding-top:25px;
            padding-right: 20px;
            display: flex;
        }
        .nav-bar-items a{
            text-decoration: none;
            color: black;
            padding: 0px 20px;
            font-size: 18px;
            font-weight: 400px;
        }
        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            cursor: pointer;
            font-size: 18px;  
            font-weight: 400px;
            border: none;
            outline: none;
            color: black;
            padding: 0px 20px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 60px;
            border-radius: 15px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            font-size:14px;
            padding: 12px 10px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #029EE4;
        }

        .show {
            display: block;
        }
    </style>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                    if (myDropdown.classList.contains('show')) {
                        myDropdown.classList.remove('show');
                    }
            }
        }
    </script>
</head>
<body>
    <div class="nav-bar">
        <div class="logo">
            <a href="">
                <img src="Assets\Images\Project Logo - landscape.png" alt="Logo">
            </a>
        </div>
        <span></span>
        <div class="nav-bar-items">
            <a href="index.php">Home</a>
            <a href="About.php">About</a>
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Log In
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="View/Admin/admin-login.php">Admin</a>
                    <a href="View\Mother\mother-login.php">Mother</a>
                    <a href="View/child/dashboard.php">child</a>
                    <a href="View/VOG/vog-index.php">VOG</a>
                    <a href="View/Pediatrician/pediatrician-loginView.php">Pediatrician</a>
                </div> 
            </div>
        </div>
        <!-- <div class="profile-pic">
            <span class="material-icons-outlined">account_circle</span>
        </div> -->
    </div>
</body>
</html>../../View/Pediatrician/login_ped.php