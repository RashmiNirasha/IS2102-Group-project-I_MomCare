<style>
    .main-notes{
	margin-top: 150px;
	margin: 10px 50px;
    padding-top: 100px;
  }

    table th{
        padding: 0 20px;
        text-align:left;
        justify-content:space-between;
    }

    table tr{
        width:100%;
        height: 50%;
    }
    table td{
        width: 50px;
        height: 40px;
    display: table-cell; 
    vertical-align: inherit;
	color: black;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    padding: 0 10px;
    }

    table td a{
        padding: 10px 20px;
		background-color: #029EE4; 
		border: none;
		color: white;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		cursor: pointer;
		border-radius: 10px;
    }

    table td a:hover{
        background-color: #e40260;
    }
    </style>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body class="txtcol">

    <header class="header">
        <a href="#" class="logo"> <img src="Assets\Project Logo.png" alt="" class="img" /> </a>
        <nav class="navbar">
            <a href="#home">Help</a>
            <a href="index.php">About</a>
        </nav>
    </header>

    <div class="main-dash">
        <h1> Notes and Records</h1>
        <img src="images\notification.png" alt="notification icon">
        </div>

    <div class="main-notes">
        <form class="notes">
            <table class="table">
                
    <?php include_once 'control\notestable.php'; ?>
 
    </table>

</form>


    </div>

    <div class="footer">
        <p>Created by Rashmi Gunawardana | All rights reserved © 2022</p> 
    </div>

</body>
</html>

<!-- <button type="submit" class="btn-1">Edit </button>
                    <button type="submit" class="btn-1">Delete </button> -->