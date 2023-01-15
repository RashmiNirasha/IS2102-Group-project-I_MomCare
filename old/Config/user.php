<?php
include 'connect.php';
if(isset($_POST['submit'])){
  
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <link rel="stylesheet" href="/css/user.css" type="text/css"> -->
    <title>Crud</title>
    <style>
        
.material-symbols-outlined {
    font-size: small;
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}
.container{
  position: absolute;
    right: 0;
    width: 100%;
    height: 100vh;
    background-color: white;
}

form {

}
.container .form-group{
  position: relative;
    margin-left: 10rem;
    padding-top: 40px;
    margin-right: 10rem;
    display: flex;
}

button{
  background-color: #029EE4;
  border-radius: 10px;
  box-sizing: border-box;
  color:white;
  display: flex;

}

    </style>
</head>
<body>

    <div class="container">

        <form method="post">

            <div class="form-group">
                <label for="Choosepatient">Choose Patient</label>
                <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><span class="material-symbols-outlined">
                        search
                        </span></button>
                    </form>
                  </div>
                
              </div>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title-1" aria-describedby="emailHelp" placeholder="Enter title">
              
            </div> 

            <div class="form-group">
              <label for="description">description</label>
              <input type="text" class="form-control" id="description-1" placeholder="description">
            </div>

            <form action="upload.php" method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>

            <button type="submit" class="btn btn-primary" name="submit" value="Upload">Save</button>
          </form>

    </div>
    <div class="records">
    <?php
          // Include the database configuration file
          include 'dbConfig.php';

          // Get images from the database
          $query = $db->query("SELECT * FROM records ORDER BY uploaded_on DESC");

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $imageURL = 'uploads/'.$row["file_name"];
          ?>
              <img src="<?php echo $imageURL; ?>" alt="" />
          <?php }
          }else{ ?>
              <p>No image(s) found...</p>
          <?php } ?>
          </div>
</body>
</html>