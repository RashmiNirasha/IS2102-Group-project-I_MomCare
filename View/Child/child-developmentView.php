<?php 
session_start();
include '../../Config/dbConnection.php';
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { 

include "../../Assets/Includes/header_pages.php";
include "../../Assets/Includes/sidenav.php";?>

<!DOCTYPE html>
<html lang="en">
<Head>
  <Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
  <style><?php include "../../Assets/css/style-child.css";?></style>
</Head>
<body>

<div class="child-container">
  <h2>Development Tests</h2>

  <!-- 2 months  -->
  <div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_2monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"><h3>At 2 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">

        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>
  
        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Does not respond to sounds <input type="hidden" name="test1" value="Does not respond to sounds"></td>
          <td><?php $child_id=$_GET['child_id'];
          $sql = "SELECT * FROM child_developmet_tests1 WHERE id = 1 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];}
              } else {
                echo "0 results"; }?> </td>
           <td><select name="observation1" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
                
          <tr><th>2</th><input type="hidden" name="id2" value="2">
          <td>Does not look at moving objects<input type="hidden" name="test2" value="Does not look at moving objects"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests1 WHERE id = 2 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation2" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        
        <tr><th>3</th><input type="hidden" name="id3" value="3">
        <td>Not smiling responsively with you<input type="hidden" name="test3" value="Not smiling responsively with you"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests1 WHERE id = 3 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation3" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>4</th><input type="hidden" name="id4" value="4">
          <td>Don't put your hands to your mouth<input type="hidden" name="test4" value="does not put his/her hands to his/her mouth"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests1 WHERE id = 4 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation4" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>5</th><input type="hidden" name="id5" value="5">
          <td>Does not follow moving objects with eyes<input type="hidden" name="test5" value="Does not follow moving objects with eyes"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests1 WHERE id = 5 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation5" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

            </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form></div></div>

<!---------------------------------------------------- 4 months section------------------------------------------->

  <div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_4monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 4 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Does not look at moving objects	<input type="hidden" name="test1" value="Does not look at moving objects"></td>
            <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests2 WHERE id = 1 and child_id = '$child_id'" ;
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation1" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></td></tr>
            
        <tr><th>2</th><input type="hidden" name="id2" value="2">
          <td>Does not smile responsively with you	<input type="hidden" name="test2" value="Does not smile responsively with you"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests2 WHERE id = 2 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation2" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>3</th><input type="hidden" name="id3" value="3">
          <td>Unable to hold head up straight <input type="hidden" name="test3" value="Unable to hold head up straight ">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests2 WHERE id = 3 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation3" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
        
        <tr><th>4</th><input type="hidden" name="id4" value="4">
          <td>The mouth does not make small sounds.	<input type="hidden" name="test4" value="The mouth does not make small sounds"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests2 WHERE id = 4 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation4" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>5</th><input type="hidden" name="id5" value="5">
          <td>Do not put material in the mouth <input type="hidden" name="test5" value="Do not put material in the mouth">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests2 WHERE id = 5 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation5" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>6</th><input type="hidden" name="id6" value="6">
          <td>When the feet are placed on a firm background, the body does not push down <input type="hidden" name="test6" value="When the feet are placed on a firm background, the body does not push down">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests2 WHERE id = 6 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation6" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>7</th><input type="hidden" name="id7" value="7">
          <td>Inability to move one or both eyes in all directions	<input type="hidden" name="test7" value="Inability to move one or both eyes in all directions"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests2 WHERE id = 7 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation7" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
      </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form>
    </div>
</div>

<!---------------------------------------------------- 6 months section------------------------------------------->

<div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_6monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 6 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Does not attempt to reach for things within reach	<input type="hidden" name="test1" value="Does not attempt to reach for things within reach">	</td>
            <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 1 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation1" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></td></tr>
            
        <tr><th>2</th><input type="hidden" name="id2" value="2">
          <td>Does not show affection to caregivers	<input type="hidden" name="test2" value="Does not show affection to caregivers">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 2 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation2" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>3</th><input type="hidden" name="id3" value="3">
          <td>Unresponsive for surrounding sounds	<input type="hidden" name="test3" value="Unresponsive for surrounding sounds">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 3 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation3" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
        
        <tr><th>4</th><input type="hidden" name="id4" value="4">
          <td>Difficulty bringing a substants to the mouth	<input type="hidden" name="test4" value="Difficulty bringing a substants to the mouth">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 4 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation4" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>5</th><input type="hidden" name="id5" value="5">
          <td>Cannot pronounce vowels such as "a" and "o"	<input type="hidden" name="test5" value="Cannot pronounce vowels such as a and o.">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 5 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation5" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>6</th><input type="hidden" name="id6" value="6">
          <td>there is no ability to turn even to one side	<input type="hidden" name="test6" value="there is no ability to turn even to one side">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 6 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation6" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>7</th><input type="hidden" name="id7" value="7">
          <td>Does not laugh and do not make loud noises	<input type="hidden" name="test7" value="Does not laugh and do not make loud noises">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 7 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation7" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
        
        <tr><th>8</th><input type="hidden" name="id8" value="8">
          <td>The body feels very rigid and the muscles feel abnormally tight.	<input type="hidden" name="test8" value="The body feels very rigid and the muscles feel abnormally tight.">		</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 8 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation8" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>9</th><input type="hidden" name="id9" value="9">
          <td>The body feels soft and brittle.	<input type="hidden" name="test9" value="The body feels soft and brittle.">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests3 WHERE id = 9 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation9" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
      </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form>
    </div>
</div>

<!---------------------------------------------------- 9 months section------------------------------------------->

<div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_9monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 9 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Feet cannot support body weight with help	<input type="hidden" name="test1" value="Feet cannot support body weight with help">		</td>
            <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 1 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation1" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></td></tr>
            
        <tr><th>2</th><input type="hidden" name="id2" value="2">
          <td>Cannot sit with help	<input type="hidden" name="test2" value="Cannot sit with help.">		</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 2 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation2" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>3</th><input type="hidden" name="id3" value="3">
          <td>Cannot pronounce words such as “mama” or “dada”	<input type="hidden" name="test3" value="Cannot pronounce words such as mama or dada . ">		</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 3 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation3" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
        
        <tr><th>4</th><input type="hidden" name="id4" value="4">
          <td>Does not participate in responsive play with others		<input type="hidden" name="test4" value="Does not participate in responsive play with others">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 4 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation4" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>5</th><input type="hidden" name="id5" value="5">
          <td>Do not respond to his/her name	<input type="hidden" name="test5" value="Do not respond to his/her name">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 5 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation5" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>6</th><input type="hidden" name="id6" value="6">
          <td>Does not recognize familiar people	<input type="hidden" name="test6" value="Does not recognize familiar people">		</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 6 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation6" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>7</th><input type="hidden" name="id7" value="7">
          <td>Does not look at things that are shown	<input type="hidden" name="test7" value="Does not look at things that are shown">		</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 7 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation7" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
        
        <tr><th>8</th><input type="hidden" name="id8" value="8">
          <td>Can not move toys from one hand to another	<input type="hidden" name="test8" value="Can not move toys from one hand to another">			</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests4 WHERE id = 8 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation8" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
      </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form>
    </div>
</div>

<!---------------------------------------------------- 12 months section------------------------------------------->

<div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_12monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 12 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Cannot move from one place to another independently. Eg: crawling		<input type="hidden" name="test1" value="Cannot move from one place to another independently. Eg: crawling">	</td>
            <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 1 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation1" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></td></tr>
            
        <tr><th>2</th><input type="hidden" name="id2" value="2">
          <td>Cannot stand with help or with a helping stand.		<input type="hidden" name="test2" value="Cannot stand with help or with a helping stand.">		</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 2 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation2" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>3</th><input type="hidden" name="id3" value="3">
          <td>Cannot find hidden items	<input type="hidden" name="test3" value="Cannot find hidden items">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 3 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation3" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
        
        <tr><th>4</th><input type="hidden" name="id4" value="4">
          <td>Cannot say single words such as amma,thaththa		<input type="hidden" name="test4" value="Cannot say single words such as amma,thaththa">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 4 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation4" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>5</th><input type="hidden" name="id5" value="5">
          <td>Cannot do physical movements such as waving a hand and shaking head	<input type="hidden" name="test5" value="Cannot do physical movements such as waving a hand and shaking head	">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 5 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation5" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>6</th><input type="hidden" name="id6" value="6">
          <td>Does not point at things		<input type="hidden" name="test6" value="Does not point at things">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 6 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation6" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>7</th><input type="hidden" name="id7" value="7">
          <td>It is not possible to grab something small with help of the ring finger and the big toe.	<input type="hidden" name="test7" value="It is not possible to grab something small with help of the ring finger and the big toe.">			</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 7 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation7" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
        
        <tr><th>8</th><input type="hidden" name="id8" value="8">
          <td>It is thought that the previous abilities have been lost.	<input type="hidden" name="test8" value="It is thought that the previous abilities have been lost."></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests5 WHERE id = 8 and child_id = '$child_id'";
              $result = mysqli_query($con, $sql);
              if ($result === false) {
                echo "Error: " . mysqli_error($con);
              } elseif (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["observation"];
                }
              } else {
                echo "0 results";
              } ?></td>

          <td><select name="observation8" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
      </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form>
    </div>
</div>
                        
                            <a href="child-developmentView2.php?child_id=<?php echo $_GET['child_id']; ?>">
                            <button class="next" type="submit" class="btn btn-primary">Page 2</button></a></div>

                        <script>

                        function changeSelectColor(event) {
                        var select = event.target;
                        var option = select.options[select.selectedIndex];

                        if (option.value === 'yes') {
                            select.classList.add('green-background');
                            select.classList.remove('red-background');
                        } else {
                            select.classList.add('red-background');
                            select.classList.remove('green-background');
                        }
                        }</script>

  </body>
</html>
<?php } else {
    header("Location: ../../mainLogin.php");
    exit();}
?>

