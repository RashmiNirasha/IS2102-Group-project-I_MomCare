<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "\control\database.php";
    
    $sql = sprintf("SELECT * FROM doctor_details
                    WHERE doc_email = '%s'",
                   $mysqli->real_escape_string($_POST["doc_email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["doc_id"] = $user["doc_id"];
            
            header("Location: dashboard.php");
            exit;
        }
    }
    
    $is_invalid = true;
}



?>

<?php if ($is_invalid): ?>
    <em>Invalid login</em>
<?php endif; ?>
