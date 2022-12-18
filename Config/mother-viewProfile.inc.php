<?php
    require __DIR__ . "/dbConnection.php";

    $sql = "SELECT * FROM registered_user_details";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["middle_name"]. " " . $row["last_name"]. " - Age: " . $row["age"]. " - Address: " . $row["address"]. " - DOB: " . $row["dob"]. " - PHM ID: " . $row["phm_id"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. " - Password: " . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }


?>