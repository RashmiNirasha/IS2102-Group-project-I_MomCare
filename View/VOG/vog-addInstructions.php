<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if(isset($_SESSION['email'])){ 
        include '../../Assets/Includes/header_pages.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "vog-styles.css" ?></style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <title>Add Instruction</title>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: 'Select a mother'
            });
        });

        function instructionBarPopup(data) {
            document.getElementById("instructionBarPopup-body").innerHTML = data;
            var popup = document.getElementById("instructionBarPopup");
            popup.style.display = "block";
        }

        function instructionBarPopup_close() {
            var popup = document.getElementById("instructionBarPopup");
            popup.style.display = "none";
        }



    </script>
    <?php
        if(isset($_POST['addInstruction'])){
            $mom_id = $_POST['state'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $role_id = $_SESSION['id'];

            $sql = "INSERT INTO instructions (mom_id, title, description, role_id) VALUES ('$mom_id', '$title', '$description', '$role_id')";
            $result = mysqli_query($con, $sql);

            if($result){
                echo "<script>alert('Instruction added successfully!')</script>";
            }else{
                echo "<script>alert('Failed to add instruction!')</script>";
            }
        }
    ?>
</head>
<body>
<button class="goBackBtn" onclick="history.back()">Go back</button>
    <div class="mainOuterContainer">
        <div class="mainInnerContainer">
            <div class="innerContainerLeft">
                <div class="AddInstructionHeader">
                    <h1>Add Instructions</h1>
                </div>
                <div class="instructionForm">
                    <form action="" method="POST">
                        <div class="AddInstructionBody">
                            <table>
                                <tr>
                                    <td><label for="mother" id="required">Select Mother</label></td>
                                    <td>
                                        <select class="js-example-basic-single" name="state" required>
                                            <option value="" disabled selected>Select a mother</option>
                                                <?php
                                                    $sql = "SELECT * FROM mother_details";
                                                    $result = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        echo "<option value='".$row['mom_id']."'>".$row['mom_fname']." ".$row['mom_lname']."</option>";
                                                    }
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="title" id="required">Title</label></td>
                                    <td><input type="text" name="title" id="title" placeholder="Enter title" required></td>
                                </tr>
                                <tr>
                                    <td><label for="description" id="required">Description</label></td>
                                    <td><textarea name="description" id="description" cols="30" rows="10" placeholder="Enter description" required></textarea></td>
                                </tr>
                            </table>
                            <div class="AddInstructionBtn">
                                <button type="submit" name="addInstruction">Add Instruction</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="innerContainerRight">
                <div class="AddInstructionHeader">
                    <h1>Instructions</h1>
                </div>
                <div class="instructionTable">
                    <?php 
                        $sql = "SELECT * FROM instructions";
                        $result = mysqli_query($con, $sql);
                        if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $title = $row['title'];
                            $description = $row['description'];
                            $date = $row['date'];
                            $time = $row['time'];
                            $mom_id = $row['mom_id'];
                            $sql2 = "SELECT * FROM mother_details WHERE mom_id='$mom_id'";
                            $result2 = mysqli_query($con, $sql2);

                            while($row2 = mysqli_fetch_assoc($result2)){
                                $phm_id = $row2['phm_id'];

                                echo 
                                '<div class="instructionBar" onclick="instructionBarPopup(\'' .
                                    '<h3>Title:</h3>' .
                                    '<p>' .$title. '</p>' .
                                    '<h3>Description:</h3>' .
                                    '<p> '.$description.'</p>' .
                                    '<div>' .
                                        '<ul>' .
                                            '<li>ID: '.$mom_id.'</li>' .
                                            '<li>PHM: '.$phm_id.'</li>' .
                                        '</ul>' .
                                        '<ul>' .
                                            '<li>Date: '.$date.'</li>' .
                                            '<li>Time: '.$time.'</li>' .
                                        '</ul>' .
                                    '</div>' .
                                '\')"> 
                                    <div class="InstructionImgDiv">
                                        <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                                    </div>
                                    <div class="barContentMain">
                                        <div class="contentHeader">
                                            <h3>Title: '.$title.'</h3>
                                        </div>
                                        <div class="barContentInner">
                                            <div class="barContentMetaSec1">
                                                <ul>
                                                    <li>ID: '.$mom_id.'</li>
                                                    <li>PHM: '.$phm_id.'</li>
                                                </ul>
                                            </div>
                                            <div class="barContentMetaSec2">
                                                <ul>
                                                    <li>Date: '.$date.'</li>
                                                    <li>Time: '.$time.'</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        }else{
                            echo "<h3>No instructions added yet!</h3>";
                        }
                    ?>
            </div>
        </div>
    </div>
    <div class="instructionBarPopup" id="instructionBarPopup">
        <div class="instructionBarPopup-content">
            <span class="instructionBarPopup-close" onclick="instructionBarPopup_close()">&times;</span>
            <div class="instructionBarPopup-header"><h3>Instructions</h3></div>
            <div class="instructionBarPopup-body" id="instructionBarPopup-body">
                
            </div>
            <div class="instructionBarPopup-footer">
                <button class="instructionBarPopup-footer-momCard-btn">Mother Card</button>
                <button class="instructionBarPopup-footer-tests-btn">Test Records</button>
                <button class="instructionBarPopup-footer-children-btn">Children</button>
            </div>
        </div>
    </div>
</body>
</html>

<?php }else{
    header("Location: ../../index.php");
    exit();
} ?>