<?php 
include "../../Assets/Includes/header_pages.php";
?>

<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../../Assets/css/pediatrician-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

<div class="main-mother">
    <h1>Find Child Card</h1>
        <div class="mom-filter">
            <input class="mom-search" type="search" name="mom-search" id="mom-search" placeholder="Search">
            <div class="mom-filter-right">
                <label for="searched-by">Search by</label>
                <select class="dropdown-menu" name="dropdown-menu" id="dropdown-menu">
                    <option value="name">child name</option>
                    <option value="id">child ID</option>
                </select>
            </div>
        </div>
        <div class="mom-bar">
            <div class="mom-bar-left">
                <img src="Assets/person.png" alt="mpther-profile-pic">
                <div>
                    <h3>CH0001</h3>
                    <p class="second-line">Mother name and location</p>
                </div>
            </div>
            <div class="mom-btns">
                <button>View Details</button>
                
            </div>
        </div>
    </div>
</body>

</html>
