<?php

$mysqli = require __DIR__ . "/database.php";

$sql="SELECT * FROM ped_notes";

$result = mysqli_query($mysqli, $sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $ped_note_id = $row['ped_note_id'];
        $doc_id = $row['doc_id'];
        $mom_id = $row['mom_id'];
        $note_topic = $row['note_topic'];
        $note_date = $row['note_date'];
        $note_description = $row['note_description'];
        $note_records = $row['note_records'];
        echo '<tr>
        <th scope="row"> ' . $ped_note_id .'</th>
        <td>' . $doc_id .'</td>
        <td>' . $mom_id .'</td>
        <td>' . $note_topic .'</td>
        <td>' . $note_description .'</td>
        <td>' . $note_date .'</td>
        <td>' . $note_records .'</td>
        <td>
        <a href="update.php?updateid='.$ped_note_id.'>Update</a>
        <a href="delete.php?deleteid='.$ped_note_id.'">Delete</a>
        </td>
        </tr> ';
    }
}




?>