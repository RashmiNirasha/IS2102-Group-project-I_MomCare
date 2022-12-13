<?php

$mysqli = require __DIR__ . "/database.php";

$result = mysqli_query($mysqli,"SELECT * FROM ped_notes");

echo "<table border='0'>
<tr>
<th>Note Id</th>
<th>Doctor Id</th>
<th>Mother Id</th>
<th>Date</th>
<th>Topic</th>
<th>Description</th>
<th>Records</th>
<th> </th>
<th> </th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ped_note_id'] . "</td>";
echo "<td>" . $row['doc_id'] . "</td>";
echo "<td>" . $row['mom_id'] . "</td>";
echo "<td>" . $row['note_date'] . "</td>";
echo "<td>" . $row['note_topic'] . "</td>";
echo "<td>" . $row['note_description'] . "</td>";
echo "<td>" . $row['note_records'] . "</td>";
echo "<td ><a href='editnotes.php?ped_note_id=".$row['ped_note_id']."'>Edit</a></td>";
echo "<td ><a href='deletenotes.php?ped_note_id=".$row['ped_note_id']."'>Delete</a></td>";

echo "</tr>";
}
echo "</table>";
?>