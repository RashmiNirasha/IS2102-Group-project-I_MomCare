<?php 

include "../../Config/dbConnection.php";

$sql = "SELECT * FROM child_details WHERE child_id = '{$_GET['childid']}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['child_name'];
function fetch_data()  
{  
    include("../../Config/dbConnection.php");
    // Escape user input to prevent SQL injection
    $childid = mysqli_real_escape_string($con, $_GET['childid']);

    $sql = "SELECT *
            FROM immunization_table
            WHERE child_id = '$childid'";

    $result = mysqli_query($con, $sql);

    $output = '';  
    $child_name = ''; // Declare variable to store child name
    while($row = mysqli_fetch_array($result))  
    {       
        $output .= '<tr>  
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
  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>
  <head>
    <title>Vaccination Report</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <br><br><br>
    <br/>
    <div class="container">
    <h2 align="center">ප්‍රතිශක්‍රීයකරණය&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immunization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;நோய்த்தடுப்பு</h2>
    <h4 align="center">Child Name : <?php echo $name; ?></h4>
      <br />
      <div class="table-responsive">
        <div class="row">
          <div class="col-md-12" align="right">
            <form method="post">
              <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
            </form>
          </div>
        </div>
        <br />
        <br />
        <div class="t-colum">
        <table class="table-data">
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
  </body>
</html>
