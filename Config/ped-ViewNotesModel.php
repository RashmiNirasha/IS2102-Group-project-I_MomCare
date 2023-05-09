<?php 
       
       $Child_id=$_GET['childid'];
       $sql = "SELECT * FROM doctor_notes inner join child_details on doctor_notes.child_id=child_details.child_id WHERE doctor_notes.child_id LIKE '%$Child_id%' OR child_details.child_name like '%$Child_id%' ORDER BY doctor_notes.note_date DESC";
       $result = mysqli_query($con, $sql);
       $resultCheck = mysqli_num_rows($result);
       if ($resultCheck > 0) {
           echo "<table class = 'MotherCardTables'>
           <tr>
               <th>Doctor id</th>
               <th>Note topic</th>
               <th>Note description</th>
               <th>Note date</th>
               <th>Note records</th>
               <th>Update</th>
               <th>Delete</th>
               <th> </th>
           </tr>";
           while ($row = mysqli_fetch_assoc($result)) {
               $date1 = date_create($row['note_date']);
               $date2 = date_create('now');
               $diff = date_diff($date1, $date2);
               $months_diff = $diff->y * 12 + $diff->m;
               if ($months_diff <= 3) {
                   echo "
                   <tr>
                   <td>" . $row['doc_id'] . "</td>
                   <td>" . $row['note_topic'] . "</td>
                   <td>" . $row['note_description'] . "</td>
                   <td>" . $row['note_date'] . "</td>
                   <td>" . $row['note_records'] . "</td>
                   <td><a href='ped-updateNotesView.php?updateid=" . $row['note_id'] . "'><button class='btnMain'>Update</button></a></td>
                   <td><a href='../../Config/ped-deleteNotes.php?deleteid=" . $row['note_id'] . "'><button class='btnMain'>Delete</button></a></td>
                   <td><a href='../../Config/ped-download.php?file={$row['note_records']}'><button class='btnMain'>Download</button></a></td>
                   </tr>";
               } else {
                   echo "
                   <tr>
                   <td>" . $row['doc_id'] . "</td>
                   <td>" . $row['note_topic'] . "</td>
                   <td>" . $row['note_description'] . "</td>
                   <td>" . $row['note_date'] . "</td>
                   <td>" . $row['note_records'] . "</td>
                   <td></td>
                   <td></td>
                   <td><a href='../../Config/ped-download.php?file={$row['note_records']}'><button class='btnMain'>Download</button></a></td>
                   </tr>";
               }
           } 
       }else {
           echo "No records found";
       }echo "</table>";
       
       
           
   ?>
