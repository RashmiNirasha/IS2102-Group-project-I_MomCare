<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "style.css" ?></style>
</head>
<body>
<div class="add-report">
    <?php
        include 'db_conn.php';
        
        // $id = "SELECT * FROM tests ['test_id']";
        // $testUpdateQuery = "SELECT * FROM tests WHERE id = '$id'";
        // $sql = "UPDATE tests SET test_name = '$testNameEdit', test_note = '$testNoteEdit', test_file = '$testFileEdit' WHERE id = '$id'";

        // $testNameEdit = $_POST['testNameEdit'];
    ?>
            <form class="test-form" action="" method="post" enctype="multipart/form-data">
                <div id="x">
                <input type="text" name="testNameEdit" id="testNameEdit" placeholder="Test name">
                <input type="text" name="testNoteEdit" id="testNoteEdit" placeholder="Special note">
                <input type="file" name="testFileEdit" id="testFileEdit" placeholder="Upload report">
                </div>
                    <input class="add-report-btn" name="edit_report" type="submit" value="save">
            </form>
        </div>
</body>
</html>