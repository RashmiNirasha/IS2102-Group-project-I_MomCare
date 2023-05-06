<?php 
include("../../Config/dbConnection.php");

if(isset($_POST['submit'])){
    $query = $_POST['query']; 
    $sql="SELECT * FROM mother_details WHERE mom_id LIKE '%$query%' OR mom_fname LIKE '%$query%' OR mom_lname LIKE '%$query%'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $mother_first_name = $row['first_name'];
            $mother_last_name = $row['last_name'];
            $mother_email = $row['email'];
            $mother_phone = $row['tele'];
            $mother_id = $row['mother_id'];

            echo 
                '<tr>
                    <td>
                        <div class="mom-bar">
                            <div class="mom-bar-left">
                                <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                                <div>
                                    <h3>Ms. '.$mother_first_name.' '.$mother_last_name.'</h3>
                                    <p class="second-line">'.$mother_phone.'</p>
                                    <label for="mother_id" name="mother_id" type="hidden" value="'.$mother_id.'"></label>
                                </div>
                            </div>
                            <div class="mom-btns">
                                <button name="viewMotherCard" onclick="window.location.href=\'"../Mother/motherCardPage1.php\'"S">Mother Card</button>
                                <button name="viewTests" onclick="window.location.href=\'"vog-tests.php\'";">Scan & Tests</button>
                            </div>
                        </div>
                    </td>
                </tr>';
        }
    }
}
?>