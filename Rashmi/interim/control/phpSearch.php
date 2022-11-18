<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "momcare";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sqlget= "select * from child where id like '%$search%'";
$sqldata = mysqli_query($conn, $sqlget) or die("error getting requested data");

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

$conn->close();

?>