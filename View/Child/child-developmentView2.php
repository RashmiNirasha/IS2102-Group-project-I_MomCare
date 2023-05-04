<?php 
session_start();
include '../../Config/dbConnection.php';
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

  <!---------------------------------------------------- 18 months section------------------------------------------->

  <div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_18monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 18 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Does not point fingers at things		<input type="hidden" name="test1" value="Does not point fingers at things"></td>
            <td>
              <?php $child_id = $_GET['child_id'];
              $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 1 and child_id = '$child_id'" ;
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
          <td>Cannot walk		<input type="hidden" name="test2" value=" Cannot walk	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 2 and child_id = '$child_id'";
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
          <td>It is not known what the familiar materials are used for <input type="hidden" name="test3" value="It is not known what the familiar materials are used for ">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 3 and child_id = '$child_id'";
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
          <td>Cannot imitate others	<input type="hidden" name="test4" value="Cannot imitate others	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 4 and child_id = '$child_id'";
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
          <td>Does not seem to be learning new words <input type="hidden" name="test5" value="Does not seem to be learning new words">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 5 and child_id = '$child_id'";
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
          <td>Does not use even 6 words<input type="hidden" name="test6" value="Does not use even 6 words">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 6 and child_id = '$child_id'";
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
          <td>Does not care when parents leave or come close	<input type="hidden" name="test7" value="Does not care when parents leave or come close"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 7 and child_id = '$child_id'";
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
            <td>It is thought that previous abilities have been lost.	<input type="hidden" name="test8" value="It is thought that previous abilities have been lost."></td>
            <td>
                <?php $sql = "SELECT observation,id FROM child_developmet_tests6 WHERE id = 8 and child_id = '$child_id'";
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

<!-- 24 months section --------------------------------------------------------------------->
                       
<div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_24monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 24 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Cannot walk properly			<input type="hidden" name="test1" value="Cannot walk properly	"></td>
            <td>
              <?php $child_id = $_GET['child_id'];
              $sql = "SELECT observation,id FROM child_developmet_tests7 WHERE id = 1 and child_id = '$child_id'" ;
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
          <td>Cannot say a two-word sentence properly	<input type="hidden" name="test2" value=" Cannot say a two-word sentence properly	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests7 WHERE id = 2 and child_id = '$child_id'";
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
          <td>Cannot understand the purpose of frequently used items such as a toothbrush, telephone, or spoon <input type="hidden" name="test3" value="Cannot understand the purpose of frequently used items such as a toothbrush, telephone, or spoon">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests7 WHERE id = 3 and child_id = '$child_id'";
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
          <td>Does not imitate actions and words<input type="hidden" name="test4" value="Does not imitate actions and words	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests7 WHERE id = 4 and child_id = '$child_id'";
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
          <td>Does not follow simple commands <input type="hidden" name="test5" value="Does not follow simple commands">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests7 WHERE id = 5 and child_id = '$child_id'";
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
          <td>Loss of previous abilities	<input type="hidden" name="test6" value="Loss of previous abilities	">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests7 WHERE id = 6 and child_id = '$child_id'";
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

      </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form>
    </div>
</div>

<!-- 36 months --------------------------------------------------------------->

<div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_36monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 36 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Frequently falls and difficult to climb stairs			<input type="hidden" name="test1" value="Frequently falls and difficult to climb stairs	"></td>
            <td>
              <?php $child_id = $_GET['child_id'];
              $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 1 and child_id = '$child_id'" ;
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
          <td>Drooling and difficult to talk well<input type="hidden" name="test2" value=" Drooling and difficult to talk well	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 2 and child_id = '$child_id'";
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
          <td>Cannot play well with simple toys<input type="hidden" name="test3" value="Cannot play well with simple toys">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 3 and child_id = '$child_id'";
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
          <td>Cannot talk in sentences<input type="hidden" name="test4" value="Cannot talk in sentences	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 4 and child_id = '$child_id'";
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
          <td>Cannot understand a simple command <input type="hidden" name="test5" value="Cannot understand a simple command">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 5 and child_id = '$child_id'";
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
          <td>Do not play with imitation		<input type="hidden" name="test6" value="Do not play with imitation		">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 6 and child_id = '$child_id'";
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
          <td>Do not play with toys or other children	<input type="hidden" name="test7" value="Do not play with toys or other children	">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 7 and child_id = '$child_id'";
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
          <td>Does not look in eye to eye		<input type="hidden" name="test8" value="Does not look in eye to eye		">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 8 and child_id = '$child_id'";
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
          <td>Loss of previous abilities.		<input type="hidden" name="test9" value="Loss of previous abilities.">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests8 WHERE id = 9 and child_id = '$child_id'";
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

<!-- ------------------------------------------48 months ------------------------------------ -->
                       
<div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_48monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 48 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Cannot Jump			<input type="hidden" name="test1" value="Cannot Jump		"></td>
            <td>
              <?php $child_id = $_GET['child_id'];
              $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 1 and child_id = '$child_id'" ;
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
          <td>Cannot draw lines in a paper		<input type="hidden" name="test2" value="Cannot draw lines in a paper		"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 2 and child_id = '$child_id'";
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
          <td>Do not like to play collaboratively with others	 <input type="hidden" name="test3" value="Do not like to play collaboratively with others	">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 3 and child_id = '$child_id'";
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
          <td>Does not care about other children or strangers	<input type="hidden" name="test4" value="Does not care about other children or strangers		"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 4 and child_id = '$child_id'";
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
          <td>Does not like to do daily-day activities like dressing, sleeping, toileting etc.	<input type="hidden" name="test5" value="Does not like to do daily-day activities like dressing, sleeping, toileting etc.	">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 5 and child_id = '$child_id'";
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
          <td>Not even in the middle of the day does he/she announce that he needs to go to the bathroom		<input type="hidden" name="test6" value="Not even in the middle of the day does he/she announce that he needs to go to the bathroom	">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 6 and child_id = '$child_id'";
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
          <td>It is difficult to repeat a short story that he/she knows well	<input type="hidden" name="test7" value="It is difficult to repeat a short story that he/she knows well		"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 7 and child_id = '$child_id'";
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
          <td>A three-step instruction is difficult to follow		<input type="hidden" name="test8" value="A three-step instruction is difficult to follow			"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 8 and child_id = '$child_id'";
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
          <td>Difficult to understand similarities or differences		<input type="hidden" name="test9" value="Difficult to understand similarities or differences		"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 9 and child_id = '$child_id'";
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

        <tr><th>10</th><input type="hidden" name="id10" value="10">
          <td>The words "I" and "you" are not used correctly			<input type="hidden" name="test10" value="The words I and you are not used correctly"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 10 and child_id = '$child_id'";
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

          <td><select name="observation10" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>11</th><input type="hidden" name="id11" value="11">
          <td>It is difficult to understand others when speaking				<input type="hidden" name="test11" value="It is difficult to understand others when speaking	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 11 and child_id = '$child_id'";
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

          <td><select name="observation11" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>12</th><input type="hidden" name="id12" value="12">
          <td>The previous abilities are lost	<input type="hidden" name="test12" value="The previous abilities are lost	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests9 WHERE id = 12 and child_id = '$child_id'";
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

          <td><select name="observation12" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

      </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form>
    </div>
</div>

<!-- ------------------------------------------60 months --------------------------------------------- -->

<div class="OneColumnSection">
    <div class="MotherCardTableTitles">
      <form action="../../Config/child_60monProcessModel.php?child_id=<?php echo $_GET['child_id']; ?>" method="post"> <h3>At 60 months</h3>
    </div>
    <div class="MotherGeneralDetails">
      <table class="MotherCardTables">
        <tr><th></th>
          <th>Development index</th>
          <th>Mother/Father/Guardian Observation</th>
          <th>Edit</th></tr>

        <tr><th>1</th><input type="hidden" name="id1" value="1">
          <td>Does not express feelings well			<input type="hidden" name="test1" value="Does not express feelings well			"></td>
            <td>
              <?php $child_id = $_GET['child_id'];
              $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 1 and child_id = '$child_id'" ;
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
          <td>Shows impulsive behavior, such as too much fear, anger, or shyness			<input type="hidden" name="test2" value="Shows impulsive behavior, such as too much fear, anger, or shyness			"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 2 and child_id = '$child_id'";
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
          <td>Usually aloof and less active		 <input type="hidden" name="test3" value="Usually aloof and less active		">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 3 and child_id = '$child_id'";
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
          <td>Easily distracted and does not give more than five minutes of attention to any one activity		<input type="hidden" name="test4" value=" Easily distracted and does not give more than five minutes of attention to any one activity	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 4 and child_id = '$child_id'";
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
          <td>Does not respond to others or responds only superficially		<input type="hidden" name="test5" value="Does not respond to others or responds only superficially		">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 5 and child_id = '$child_id'";
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
          <td>Cannot distinguish between truth and imitation			<input type="hidden" name="test6" value="Cannot distinguish between truth and imitation		">	</td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 6 and child_id = '$child_id'";
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
          <td>Cannot say first name and last name correctly		<input type="hidden" name="test7" value="Cannot say first name and last name correctly		"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 7 and child_id = '$child_id'";
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
          <td>Plural, past tense verbs are not used correctly		<input type="hidden" name="test8" value="Plural, past tense verbs are not used correctly"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 8 and child_id = '$child_id'";
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
          <td>Does not talk about everyday activities and experiences		<input type="hidden" name="test9" value="Does not talk about everyday activities and experiences		"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 9 and child_id = '$child_id'";
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

        <tr><th>10</th><input type="hidden" name="id10" value="10">
          <td>Cannot draw objects				<input type="hidden" name="test10" value="Cannot draw objects	"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 10 and child_id = '$child_id'";
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

          <td><select name="observation10" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>

        <tr><th>11</th><input type="hidden" name="id11" value="11">
          <td>Loss of previous abilities.				<input type="hidden" name="test11" value="Loss of previous abilities.		"></td>
          <td>
              <?php $sql = "SELECT observation,id FROM child_developmet_tests10 WHERE id = 11 and child_id = '$child_id'";
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

          <td><select name="observation11" onchange="changeSelectColor(event)">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select></tr>
      </table>
      <input type="submit" name="submit" onclick="return confirm('Are you sure you want to submit the form?')" />
      </form>
    </div>
  </div>

  <a href="child-developmentView.php?child_id=<?php echo $_GET['child_id']; ?>">
  <button name="next" type="submit" class="btn btn-primary">Page 1</button>
  </a>                            </div>

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
                        }

</script>
  </body>
</html>


