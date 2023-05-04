<?php

include "../../Config/child_fetchDataModel.php";
include "tcpdf/tcpdf.php";

$obj_pdf = new TCPDF('P','mm','A4');  

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

//add content (student list)
//title
$obj_pdf->SetFont('Helvetica','',14);
$obj_pdf->Cell(190,10,"University of Insert Name Here",0,1,'C');

$obj_pdf->SetFont('Helvetica','',8);
$obj_pdf->Cell(190,5,"Student List",0,1,'C');

$obj_pdf->SetFont('Helvetica','',10);
$obj_pdf->Cell(30,5,"Class",0);
$obj_pdf->Cell(160,5,": Programming 101",0);
$obj_pdf->Ln();
$obj_pdf->Cell(30,5,"Teacher Name",0);
$obj_pdf->Cell(160,5,": Prof. John Smith",0);
$obj_pdf->Ln();
$obj_pdf->Ln(2);

$content = '<style>
table {
    border-collapse:collapse;
}
th,td {
    border:1px solid #888;
}
table tr th {
    background-color:#888;
    color:#333;
    font-weight:bold;
}
</style>';  
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
//add content 
$obj_pdf->writeHTML($content);

$obj_pdf->Output('Vaccination Report.pdf', 'I'); 