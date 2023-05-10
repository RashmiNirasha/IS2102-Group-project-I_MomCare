<?php
//connecting to the database
require_once 'dbConnection.php';
  $noResult = "False";
  $search = $_GET["search"];

  $sql = "SELECT * FROM doctor_details WHERE doc_name LIKE '%$search%' OR doc_id LIKE '%$search%' OR doc_workplace LIKE '%$search%' OR doc_type LIKE '%$search%'";

  $s_result = $con->query($sql);
  if (!($s_result->num_rows>0)){
    $noResult = "True";
  }
  // header("Location: ../view/Admin/admin-searchdoctor.php");

  // if ($s_result->num_rows>0){
  //   header("Location: ../view/Admin/admin-searchdoctor.php");
  //     // header("Location: ../view/Admin/admin-searchdoctor.php?doc_id=$id&doc_name=$name&doc_type=$type&doc_workplace=$work&doc_age=$age&doc_address=$address&doc_email=$email&doc_tele=$tel");
  // }else {
  //     header("Location: ../view/Admin/admin-searchdoctor.php?result=noResult");
  // } 











































// //Get the search term from the form
// if(isset($_GET['search'])){
//   $search_term = $_GET['search'];

//   // Define an array of search fields and their corresponding SQL clauses
//   $search_fields = array(
//     'doc_name' => 'doc_name LIKE ?',
//     'doc_id' => 'doc_id LIKE ?',
//     'doc_workplace' => 'doc_workplace LIKE ?',
//     'doc_type' => 'doc_type LIKE ?'
//   );

//   // Build the SQL query based on the search fields
//   $search_clauses = array();
//   $search_params = array();
//   foreach ($search_fields as $field => $clause) {
//     $search_clauses[] = $clause;
//     $search_params[] = "%" . $search_term . "%";

//   //   $search_clauses = ([0]=>"title LIKE ?", [1] => "author LIKE", [2] => "description LIKE")
//   //   $search_params= = ["%Jackson%", "%Jackson%", "%Jackson%"]
//   //   "%Jackson%"
//   }
//   $search_query = "SELECT * FROM doctor_details WHERE " . implode(" OR ", $search_clauses);
//   // "SELECT * FROM books WHERE title LIKE ? OR author LIKE OR description LIKE";



//   // Prepare the SQL query
//   $stmt = mysqli_prepare($con, $search_query);

//   // Bind the search parameters to the prepared statement
//   mysqli_stmt_bind_param($stmt, str_repeat("s", count($search_params)), ...$search_params);

//   // Execute the prepared statement
//   mysqli_stmt_execute($stmt);

//   // get the result set object
//   $search_result = mysqli_stmt_get_result($stmt);

//   // Display the search results
//   if ($search_result->num_rows>0){
//   // while ($row = mysqli_fetch_assoc($result)) {
//   //   echo "<h2>" . $row['doc_name'] . "</h2>";
//   //   echo "<p>" . $row['doc_id'] . "</p>";
//   //   echo "<p>" . $row['doc_workplace'] . "</p>";
//   //   echo "<p>" . $row['doc_type'] . "</p>";
//   // }
//     header("Location: ../view/Admin/admin-searchdoctor.php");
//   }else {
//     header("Location: ../view/Admin/admin-searchdoctor.php?result=noResult");
//   }

// }

?>



