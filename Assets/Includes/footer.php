<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
    }
    .footer {
    background-color: #111C43;
    margin: 0;
    padding: 40px 20px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    font-size: 14px;
    line-height: 1.5;
}

.footer h3 {
    font-size: 20px;
    color: #F3F4F5;
    margin-top: 0;
    margin-bottom: 15px;
}

.footer ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.footer a {
    color: #F3F4F5;
    text-decoration: none;
}

.footer li  {
    margin-bottom: 10px;
}

.footer a:hover {
    color: #F3F4F5;
}

.footerLeft {
    width: 33%;
    display: flex;
    flex-direction: column;
    text-align: center;
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

#sub_email {
    margin-top: 10px;
    margin-bottom: 10px;
    padding: 5px;
    border-radius: 5px;
    border: none;
    font-size: 14px;
    width: 100%;
    max-width: 300px;
}

 #sub_submit {
    background-color: #EA2727;
    border-style: none;
    border-radius: 5px;
    width: 100%;
    max-width: 100px;
    height: 30px;
    font-size: 16px;
    color: #F3F4F5;
    cursor: pointer;
}

.footerRight {
    width: 33%;
    display: flex;
    flex-direction: column;
    text-align: center;
}

.footerRight li {
    color: #F3F4F5;
}
</style>
</head>
<body>
    <div class="footer">
        <div class="footerLeft">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms </a></li>
            </ul>
        </div>
        <div class="footerMiddle">
            <h3>Subscribe</h3>
            <form action="" method="post">
                <input type="email" name="sub_email" id="sub_email" placeholder="Enter your email address">
                <input type="submit" name="sub_submit" id="sub_submit" value="Subscribe">
            </form>
        </div>
        <div class="footerRight">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li>
            </ul>
        </div>
    </div>
</body>
</html>

