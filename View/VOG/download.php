<?php 
    session_start();
    include 'db_conn.php'; // included the database connection file
    $sql = "SELECT * FROM tests";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $file = $row['upload_report'];
    if(!empty($_GET['upload_report'])){
        $filename = basename($_GET['upload_report']);
        $filepath = 'uploads/tests/'.$filename;
        if(!empty($filename) && file_exists($filepath)){
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");

            // read the file from disk
            readfile($filepath);
            exit;
        }
        else{
            echo "This file does not exist. inner if";
        }
    }else{
        echo "This file does not exist.";
    }
?>