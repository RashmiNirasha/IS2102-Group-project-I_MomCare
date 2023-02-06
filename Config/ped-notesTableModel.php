<?php

include "dbConnection.php";

$sql="SELECT * FROM ped_notes";

$result = mysqli_query($con, $sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $child_id=$row['child_id'];
        $ped_note_id=$row['ped_note_id'];
        $doc_id = $row['doc_id'];
        $mom_id = $row['mom_id'];
        $note_topic = $row['note_topic'];
        $note_date = $row['note_date'];
        $note_description = $row['note_description'];
        $note_records = $row['note_records'];
        echo '<tr>
        <th scope="row"> ' . $child_id .'</th>
        <td>' . $doc_id .'</td>
        <td>' . $mom_id .'</td>
        <td>' . $note_topic .'</td>
        <td>' . $note_description .'</td>
        <td>' . $note_date .'</td>
        <td>' . $note_records .'</td>
        <td>
        <a href="pediatrician-updateNotesView.php?updateid='.$ped_note_id.'"><button class="btnMain">Update</button></a></td>
        <td><a href="delete.php?deleteid='.$ped_note_id.'"><button class="btnMain">Delete</button></a></td>
        </tr> ';
    }
}

?>