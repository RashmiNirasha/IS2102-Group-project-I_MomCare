<?php 
include "../../Config/dbConnection.php";
// include "../../Config/child-fullCardModel.php";

$mom_id = mysqli_real_escape_string($con, $_GET['mom_id']);
$sql = "SELECT * FROM mother_details WHERE mom_id = '$mom_id'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $mom_id = $row['mom_id'];
        $mom_name = $row['mom_fname'] . " " . $row['mom_lname'];
        $mom_dob = $row['mom_DOB'];
        $mom_address = $row['mom_address'];
        $mom_age = $row['mom_age'];

}    
}

function dental(){
    include "../../Config/dbConnection.php";
        // Get the dental report data for the specified mother
        $mom_id = mysqli_real_escape_string($con, $_GET['mom_id']);

        $sql = "SELECT * FROM mcard_dentalclinic WHERE mom_id = '$mom_id'";
        $result = mysqli_query($con, $sql); 
        $output = '';
    
        // Display the dental report data for the specified mother
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $output .= '
                <tr>  
                    <td>'.$row["ref_date"].'</td>  
                    <td>'.$row["exam_date"].'</td>  
                    <td>'.$row["treatment"].'</td>
                </tr>';
            }
        } else {
            echo "<tr><td colspan='4'>No dental report data found.</td></tr>";
        }
        return $output;
}

function tetanus(){
    include "../../Config/dbConnection.php";
        // Get the tetanus report data for the specified mother
        $mom_id = mysqli_real_escape_string($con, $_GET['mom_id']);

        $sql = "SELECT * FROM mcard_tetanus WHERE mom_id = '$mom_id'";
        $result = mysqli_query($con, $sql); 
        $output = '';
    
        // Display the tetanus report data for the specified mother
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $output .= '
                <tr>  
                    <td>'.$row["dose"].'</td>  
                    <td>'.$row["date"].'</td>  
                    <td>'.$row["batch_no"].'</td>
                </tr>';
            }
        } else {
            echo "<tr><td colspan='4'>No tetanus report data found.</td></tr>";
        }
        return $output;
}
               
include "../Child/tcpdf/tcpdf.php";

$obj_pdf = new TCPDF('P','mm','A4');  

$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("Mother Card");  
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

// set the position for the image
$x = 140;
$y = 5;
// set the width and height of the image
$w = 60;
$h = 0;
// set the path of the image file
$image_file = '../../Assets/Images/common/Project-Logo-landscape-size-middle.png';
// add the image to the PDF
$obj_pdf->Image($image_file, $x, $y, $w, $h);

$obj_pdf->SetFont('Helvetica','',16);
$obj_pdf->Cell(190,10,"Mother Card ",0,1,'L');

$obj_pdf->SetFont('Helvetica','',12);
$obj_pdf->Cell(190,3,"Ministry of Health",0,1,'L');

$obj_pdf->SetDrawColor(0, 0, 0);
$obj_pdf->SetLineWidth(0.5);
$obj_pdf->Line(10, 30, 200, 30);

$obj_pdf->Ln(10);

// $obj_pdf->SetFont('Helvetica', '', 9);
// $obj_pdf->Cell(190, 3, "Name of the Public Health Midwife and ID: " . $phm_name . " (" . $phm_id . ")", 0, 1, 'L');

$obj_pdf->Ln(5);

$obj_pdf->SetFont('Helvetica','B',10);
$obj_pdf->Cell(190,3,"General Details of the Mother",0,1,'L');
$obj_pdf->Ln(5);



$obj_pdf->SetFont('Helvetica','',8);
$data = array(
    array("Name of the Mother:", $mom_name),
    array("Date of Birth:", $mom_dob),
    array("Age", $mom_age),
    array("Address:", $mom_address),
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

p {
    text-align: center;
    font-style: italic;
    font-size: 8px;
}
</style>';

$content .= '<div>
                    <h3>Dental Record</h3>
                    <table border="1" cellspacing="0" cellpadding="3" >
                        <tr>  
                        <th width="25%" >Reference Date </th>
                        <th width="25%" >Examination Date</th>
                        <th width="25%" >Treatment</th>     
                        </tr>  
                        ';    
$content .= dental();
$content .= '</table>';
$content .= '</div>';

$content .= '<div>
                    <h3>Tetanus Record</h3>
                    <table border="1" cellspacing="0" cellpadding="3" >
                        <tr>  
                        <th width="25%" >Dose </th>
                        <th width="25%" >Vaccine Date</th>
                        <th width="25%" >Batch No</th>     
                        </tr>  
                        ';
$content .= tetanus();
$content .= '</table>';
$content .= '</div>';


$content .= '<p align="center"> Mother Card generated by momcare website </p>';  
$content .= '</body>';

//add content 
$obj_pdf->writeHTML($content);

$obj_pdf->Output('Mother Card.pdf', 'I');
?>