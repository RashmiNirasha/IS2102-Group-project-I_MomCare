<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>
   
   <?php
include "../../Config/dbConnection.php";

if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "../../Assets/Images/uploads/".$fileName;
        
        $query = "INSERT INTO doctor_notes(note_records) VALUES ('$fileName')";
        $run = mysqli_query($con,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "success";
        }
        else{
            echo "error".mysqli_error($con);
        }
        
    }
    
    ?>
   
   <table border="1px" align="center">
       <tr>
           <td>
               <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" name="submit"> Upload</button>
                </form>
           </td>
       </tr>
       <tr>
           <td>
              <?php
               $query2 = "SELECT * FROM doctor_notes ";
               $run2 = mysqli_query($con,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <a href="download.php?file=<?php echo $rows['note_records'] ?>">Download</a><br>
               <?php
               }
               ?>
           </td>
       </tr>
   </table>
    
</body>
</html>


