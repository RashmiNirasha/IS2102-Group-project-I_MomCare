<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pediatrician Login </title>

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/login_style.css">
    <link rel="stylesheet" href="/css/nav.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img src="Assets\Project Logo.png" alt="" class="img" /> </a>
    <nav class="navbar">
        <a href="#home">Help</a>
        <a href="#about">About</a>
    </nav>
</header>

<form action="phpSearch.php" method="post">
    Search <input type="text" name="search"><br>
    <input type ="submit">
    </form>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
    <div class="main">
        <div class="image">
            <img src="Assets\Black Illustrated Simple Mental Health Presentation.svg" alt="">
        </div>
    
        <div class="content">
            <h3>Login as Pediatrician </h3>
            <div class="form" >
                <form method="Post" action="index.php">
                    <div class="formcontent">
                        
                        <div class="formin"><div class="formlabel"> User Name: </div><input class="input_box" type="text" name="username" required></div>
                    </div>
        
                    <br>
                    <div class="formcontent">
                        
                        <div class="formin"><div class="formlabel"> Password: </div><input class="input_box" type="password" name="password" required></div>
                    </div>
        
                    <br>
    
                    <div class="formremember">
                        <div class="formlabel"><input class="checkbox" type="checkbox" >Remember me</div>
                        <div class="forgotp"> Forgot Password?</div>
                    </div>
                    
                        <a href="#" class="btn" type="submit" name="but_submit" id="but_submit" value="Sign In"> Sign In <span class="fas fa-chevron-right"></span> </a>
                    <br>
    <br>
                    <div class="formlabel">New User? <a class="createlink" href="customerlogin.php"> Create an Account</a></div>
                
                </form>            
            </div>
        </div>  

    </div>

   
        
    </div>

</section>
<section class="footer">
    <div class="box-container">
        <div class="credit"> created by <span>Rashmi Gunawardana</span> | all rights reserved </div>

</section>
</body>
</html>
<!-- home section ends -->
