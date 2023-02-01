<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomCare 2.0</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body {
            margin: 0%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
        .topnav {
            background-color: #f0f0f0;
            margin-right: 0px;
            overflow: hidden;
            position: fixed;
            top: 0;
            padding-top: 10px;
            width: 100%;
            height: 60px;
            margin-top: -7px;
            box-shadow: 0 3px 10px 3px rgba(0,0,0,.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 9999;
        }

        .topnav ul li a {
            color: #111C43;
            font-family:'Calibri';
            font-weight: bold;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav ul {
            width: 100%;
            text-align: right;
        }   

        .topnav ul li {
            display: inline-block;
            list-style: none;
            margin: 10px 20px;
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
            margin-right: 20px;
            border-style: solid;
            border-width: 1px;
            stroke: #111C43;
        }
    </style>
</head>
<body>
    <div>
    <nav class="topnav"> <!-- top navigation bar -- start -->
        <img class="logo-MomCare" src="../../Assets/images/common/logo.png" alt="logo-MomCare">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="dashboardVog.php">Dashboard</a></li>
        </ul>
        <img class="profile_pic" src="../../Assets/images/vog/doctor.png" alt="profile_pic">
    </nav> <!-- top navigation bar -- end -->
    </div>
</body>
</html>