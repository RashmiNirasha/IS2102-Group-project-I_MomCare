<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css\dash.css" type="text/css">
    <link rel="stylesheet" href="css\logout.css" type="text/css">
    <link rel="stylesheet" href="css\nav.css" type="text/css">
</head>
<body>
    <!-- header section starts  -->

    <header class="header">

<a href="#" class="logo"> <img src="Project Logo.png" alt="" class="img" /> </a>
<nav class="navbar">
    <a href="#home">Dashboard</a>
    <a href="index.php">Home</a>
</nav>
</header>



<!-- header section ends -->
<!-- body section starts -->

        <div class="container">
            <div class="main">
            <h1>Pediatrician Dashboard</h1>
            <img src="images\notification.png" alt="notification icon">
            </div>

            <div class="cards">
               
               <a href="manage_doctor.html"><div class="card">
                <div class="Icon">
                    <img src="images\doctor.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>View Child Cards</h3>
                 </div>
               </div></a>

               <a href="manage_doctor.html"><div class="card">
                <div class="Icon">
                    <img src="images\doctor.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Immunization Cards</h3>
                 </div>
               </div></a>

               <a href="manage_doctor.html"><div class="card">
                <div class="Icon">
                    <img src="images\doctor.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Doctor Notes</h3>
                 </div>
               </div></a>

             </div>

             <div class="lower-button">
                <span></span>
                <button>
                    <div class="button-text"><p>Log out</p></div>
                    <div class="Button-icon"><img src="images\logout.png"></div>
                </button>
            </div>
        </div>
    </div>
</body>
</html>