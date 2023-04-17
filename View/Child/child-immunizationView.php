<?php 
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";

$sql = "SELECT * FROM child_details WHERE child_id = '{$_GET['child_id']}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$child_name = $row['child_name'];
function fetch_data()  
{  
    include("../../Config/dbConnection.php");
    // Escape user input to prevent SQL injection
    $child_id = mysqli_real_escape_string($con, $_GET['child_id']);

    $sql = "SELECT *
            FROM immunization_table
            WHERE child_id = '$child_id'";

    $result = mysqli_query($con, $sql);

    $output = '';  
    $child_name = ''; // Declare variable to store child name
    while($row = mysqli_fetch_array($result))  
    {       
        $output .= '
        <table class="ChildCardInputSec-1">
        <tr>  
                      <td>'.$row["age"].'</td>  
                      <td>'.$row["type_of_vaccine"].'</td>  
                      <td>'.$row["date"].'</td>  
                      <td>'.$row["batch_no"].'</td>
                      <td>'.$row["adverse_effects"].'</td>
                      <td>'.$row["official_name"].'</td>
                    </tr>';  
    }  
    return $output ; // Return both the output and child name
  }

 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Vacination Report");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h2 align="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immunization Chart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2>
      <table border="1" cellspacing="0" cellpadding="3" style="border: 1px solid #ccc; background-color: #f2f2f2;">
           <tr>  
           <th width="15%" style="background-color: #f2f9fd; color: #333; font-weight: bold;  padding: 10px;">Age</th>
           <th width="15%" style="background-color: #f2f9fd; color: #333; font-weight: bold;  padding: 10px;">Type Of Vaccine</th>
           <th width="15%" style="background-color: #f2f9fd; color: #333; font-weight: bold; padding: 10px;">Date</th>
           <th width="12%" style="background-color: #f2f9fd; color: #333; font-weight: bold;  padding: 10px;">Batch No</th>
           <th width="30%" style="background-color: #f2f9fd; color: #333; font-weight: bold;  padding: 10px;">Adverse Effects</th>
           <th width="15%" style="background-color: #f2f9fd; color: #333; font-weight: bold;  padding: 10px;">Name of the official</th>           
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I'); 
      // Redirect to another page
      header("Location: Blank.php"); 
      exit(); 
 }  
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "../../Assets/css/style-common.css"; ?></style>
</head>
<body>
<div class="top-button" >
<a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="goBackBtn">Go back</button></a>
        </div>
    <div class="ChildCardMain">
        <!-- title section -->
        <div class="ChildCardMain-titleOuter">
            <div class="ChildCardMain-TitleInner">
                <h3>ප්‍රතිශක්‍රීයකරණය&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immunization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;நோய்த்தடுப்பு</h3>
            </div>
        </div>
        <!-- title section end -->
      <br />
        <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">

                    <table class="ChildCardInputSec-1">
                    <thead>
                        <tr>
                        <th width="15%">Age</th>
                        <th width="15%">Type of Vaccine</th>
                        <th width="13%">Date</th>
                        <th width="15%">Batch No</th>
                        <th width="25%">Adverse Effects</th>
                        <th width="25%">Name of the official</th>
                        </tr>
          </thead>
          <tbody>
            <?php echo fetch_data(); ?>
          </tbody>
        </table>
</div>
      </div>
    </div>

    <div class="ChildCardOuterDiv">
            <div class="ChildCardInnerDiv">
                <div class="ChildFormSection">
                    <h3>Referrals on Immunization</h3>
                    <table class="ChildCardInputSec-1">
                        <tr>
                            <th colspan="2">Date</td>
                            <th>Reason for referral</td>
                            <th>Place</th>
                        <th colspan="2">Notes</th>
                        </tr>
                        <tr>
                        <td colspan="2"><label for="Age" placeholder="weeks"></label><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                    
                            <td colspan="2"><input type="text"></td>
                        </tr>
                        <tr>
                        <td colspan="2"><label for="Age" placeholder="weeks"></label><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                           
                            <td colspan="2"><input type="text"></td>
                        </tr>
                        <tr>
                        <td colspan="2"><label for="Age" placeholder="weeks"></label><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                           
                            <td colspan="2"><input type="text"></td>
                        </tr>
                        <tr>
                        <td colspan="2"><label for="Age" placeholder="weeks"></label><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            
                            <td colspan="2"><input type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="Age" placeholder="weeks"></label><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            
                            <td colspan="2"><input type="text"></td>
                        </tr>
                        <tr>
                        <td colspan="2"><label for="Age" placeholder="weeks"></label><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                           
                            <td colspan="2"><input type="text"></td>
                        </tr>
                    
                    </table>
                </div>
            </div>
        </div>
<!-- form section 2 -->
       
<div class="ChildFormButtons">
<form method="post">
              <input type="submit" name="generate_pdf" class="NextBtn" value="Generate PDF" />
              </form>
              <a href="child-childCardView.php"><button class="NextBtn">Back</button></a>
        </div>
    </div>
  </body>
</html>
