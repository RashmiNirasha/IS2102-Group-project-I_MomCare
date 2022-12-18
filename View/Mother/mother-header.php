<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation bar</title>

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
        }
        .nav-bar-items a{
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 20px;
            display: flex;
            text-align: center;
            padding-left: 30px;
            text-decoration: none;
            display:inline;

            color: #111832;
        }
        .nav-bar span{
            margin-left: 50%
        }
        .profile-pic img{
            padding: 10px 20px;

            border-radius: 10px;
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <div class="logo">
            <a href="">
                <img src="../../Assets/Images/Project Logo - landscape" alt="Logo">
            </a>
        </div>
        <span></span>
        <div class="nav-bar-items">
            <a href="../../index.php">Home</a>
            <a href="../../About.php">About</a>
            <a href="mother-dashboard.php">Dashboard</a>
        </div>
        <div class="profile-pic">
            <a href="mother-profile.php"><img src="../../Assets/Images/Profile_pic_mother" alt=""></a>
        </div>
    </div>
</body>
</html>