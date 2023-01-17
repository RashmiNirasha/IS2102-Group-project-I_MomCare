<?php

include 'connect.php';

$sqlget= "Select * from child";
$sqldata = mysqli_query($con, $sqlget) or die("error getting requested data");

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>DOB</th></tr>";

while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['name'];
echo "</td><td>";
echo $row['DOB'];
echo "</td></tr>";
}

echo "</table>";