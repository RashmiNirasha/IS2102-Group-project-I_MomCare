<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <style>

    @font-face {
        font-family: "barlowBold";
        src: url(Assets/Fonts/Barlow-Bold.ttf);
    }

    @font-face {
        font-family: "barlowRegular";
        src: url(Assets/Fonts/Barlow-Regular.ttf);
    }
    
    .footer {
        background-color: #111C43;
        margin: 0;
        width: 100%;
        
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
        z-index: 1;

    }

    .footer h3 {
        font-family: "barlowBold";
        font-size: 2rem;
        color: #F3F4F5;
        margin-top: 30px;
        padding: 0;
    }

    .footer ul {
        font-family: "barlow";
        font-size: 1rem;
        color: black;
        margin-top: 10px;
        margin-bottom: 50px;
    }

    .footer a {
        color: #F3F4F5;
        text-decoration: none;
    }

    .footer li  {
        margin-bottom: 15px;
    }

    .footer a:hover {
        color: #029ee4;
        background-color: white;
        border-radius: 5px;
        padding: 5px;
    }

    .footerLeft {
        width: 33%;
        display: flex;
        flex-direction: column;
        text-align: center;

    }

    .footerLeft ul {
        list-style-type: none;
        padding: 0;
        text-decoration: none;
    }

    .footerMiddle {
        width: 33%;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .footerMiddle form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #email {
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 5px;
        border-radius: 5px;
        border: none;
        font-size: 1rem;
    }

    #submit {
        background-color: #EA2727;
        border-style: none;
        border-radius: 5px;
        width: 100px;
        height: 30px;
        font-size: large;
    }

    .footerRight {
        width: 33%;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .footerRight ul {
        list-style-type: none;
        padding: 0;
    }

    .footerRight li {
        color: #F3F4F5;
    }

    .footerMiddle p {
        font-family: "barlow";
        font-size: 1rem;
        color: #F3F4F5;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .footer hr {
        border: 1px solid #F3F4F5;
        height: 250px;
        text-align: center;
        margin-top: 40px;
    }
    </style>
</head>
<body>
    <div class="footer">
        <div class="footerLeft">
            <h3>Useful Links</h3>
            <ul>
                <!-- <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li> -->
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
        <hr>
        <div class="footerMiddle">
            <h3>Reach out to Us</h3>
                <p>Reach out to us for any help you want..</p>
                <form action="">
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <!-- <input type="submit" id="submit" value="Subscribe"> -->
                </form>
        </div>
        <hr>
        <div class="footerRight">
            <h3>Contact</h3>
                <ul>
                    <li>Administrator - <a href="#">adminGov@gmail.lk.com</a></li>
                    <li>Hotline - <a href="#">+94114235688</a></li>
                </ul>
        </div>
    </div>
</body>
</html>