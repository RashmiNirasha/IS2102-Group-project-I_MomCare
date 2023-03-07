<?php  
 function fetch_data()  
 {  
    include("../../Config/dbConnection.php");
      $sql = "SELECT * FROM immunization_table where child_id like 'C102'" ;
      $result = mysqli_query($con, $sql);  
      $output = '';  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["name"].'</td>  
                          <td>'.$row["age"].'</td>  
                          <td>'.$row["email"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
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
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">Id</th>  
                <th width="30%">Name</th>  
                <th width="15%">Age</th>  
                <th width="50%">Email</th>  
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
    <br />
    <div class="container">
    <h2 align="center">ප්‍රතිශක්‍රීයකරණය&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immunization&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;நோய்த்தடுப்பு</h2>
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
        <table class="table table-bordered table-data">
          <thead>
            <tr>
              <th width="5%">Id</th>
              <th width="30%">Name</th>
              <th width="15%">Age</th>
              <th width="50%">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php echo fetch_data(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
