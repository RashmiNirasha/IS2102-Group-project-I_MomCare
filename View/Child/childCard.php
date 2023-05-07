<?php 
include "../../Config/dbConnection.php";
include "../../Config/child-fullCardModel.php";



function vitamin(){

    include "../../Config/dbConnection.php";
$child_id = mysqli_real_escape_string($con, $_GET['child_id']);
    $sql = "SELECT * FROM child_cvitamin_view WHERE child_id = '$child_id'";
    $result = mysqli_query($con, $sql);
    $output = '';
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $output .= '
                <tr>  
                    <td>'.$row["age"].'</td>  
                    <td>'.$row["date"].'</td>  
                    <td>'.$row["batch_no"].'</td>
                </tr>';  
            }
        }
    }else {
        echo "0 results";
    }
    return $output;
}
    
function wormtreatment(){
    include "../../Config/dbConnection.php";

$child_id = mysqli_real_escape_string($con, $_GET['child_id']);
    $sql = "SELECT * FROM child_cworm_treatment WHERE child_id = '$child_id'";
                                $result = mysqli_query($con, $sql);
                                $output = '';
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $output .= '
                                            <tr>  
                                                <td>'.$row["age"].'</td>  
                                                <td>'.$row["date"].'</td>  
                                                <td>'.$row["batchno"].'</td>
                                                
                                            </tr>';  
                                        }
                                    }else {
                                        echo "0 results";
                                    }
                                }
                                return $output;
}
                               
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

$obj_pdf->SetFont('Helvetica','',16);
$obj_pdf->Cell(190,10,"Child Card ",0,1,'C');

$obj_pdf->SetFont('Helvetica','',12);
$obj_pdf->Cell(190,3,"Ministry of Health",0,1,'C');
$obj_pdf->Ln(2);
$obj_pdf->SetFont('Helvetica','',8);
$data = array(
    array("Name of the Mother:", $mother_name),
    array("Age", $age),
    array("MOH Area", $MOH_area),
    array("PHM Area", $PHM_area),
    array("Name of the Field Clinic", $field_clinic),
    array("Grama Niladhari Division", $GN_division),
    array("Name of the Consultant Obstetrician", $consultant_obstetrician),
    array("Identified anatal risks conditions and mobilities ", $identified_antatal_risks),
    array("Registration No", $registration_number),
    array("Date of Registration", $registration_date)
);

foreach ($data as $row) {
    $obj_pdf->Cell(70,5,$row[0],0);
    $obj_pdf->Cell(140,5,": ".$row[1],0);
    $obj_pdf->Ln();
}


$content = '<style>
body {
    border: 1px solid black;
}

table {
    border-collapse:collapse;
}
th,td {
    border:1px solid #888;
}
table tr th {
    background-color:#007bff;
    color:#fff;
    font-weight:bold;
}
table td {
    font-family: Arial, sans-serif;
    font-size: 10px;
}
p {
    text-align: center;
    font-style: italic;
    font-size: 8px;
}
.TwoColumnSection {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 100%;
}

.TwoColumnSection > div:first-child, .TwoColumnSection > div:last-child {
    width: 50%;
    padding: 0 10px;
}

</style>';

$content .= '<div class="TwoColumnSection">
                <div>
                    <div class="MotherCardTableTitles">
                        <h3>Vitamin A </h3>
                    </div>
                    <div class="PersonalInformation">
                        <table>
                            <tr>  
                                <th width="15%" >Age</th>
                                <th width="15%" >Date</th>
                                <th width="12%" >Batch No</th>
                            </tr>  
                        ';    
$content .= vitamin();
$content .= '</table>';
$content .= '</div>';
$content .= '</div>';

$content .= '<div>
                    <h3>Worm Treatment</h3>
                    <table border="1" cellspacing="0" cellpadding="3" >
                        <tr>  
                        <th width="15%" >Age</th>
                        <th width="15%" >Date</th>
                        <th width="12%" >Batch No</th>                   
                        </tr>  
                        ';    
$content .= wormtreatment();
$content .= '</table>';
$content .= '</div>';
$content .= '</div>';

$content .= '<p align="center"> Child Card generated by momcare website </p>';  
$content .= '</body>';

//add content 
$obj_pdf->writeHTML($content);

$obj_pdf->Output('Child Card.pdf', 'I');
?>