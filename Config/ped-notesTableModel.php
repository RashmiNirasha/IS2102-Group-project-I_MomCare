<?php

include "dbConnection.php";
    $sql = "SELECT * FROM doctor_notes";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['child_id'] . "</td><td>" . $row['doc_id'] . "</td><td>" . $row['mom_id'] . "</td><td>" . $row['note_topic'] . "</td><td>" . $row['note_description'] . "</td><td>" . $row['note_date'] . "</td><td>" . $row['note_records'] . "</td>
            <td><a href='pediatrician-updateNotesView.php?updateid=" . $row['note_id'] . "'><button class='btnMain'>Update</button></a></td>
            <td><a href='../../Config/ped-deleteNotes.php?deleteid=" . $row['note_id'] . "'><button class='btnMain'>Delete</button></a></td>
            </tr>";
        } echo "</table>";
    }
    else{
        echo "0 result";
    }
?>