<?php
session_start();
extract($_REQUEST);
require_once('../dbConnection.php');
require('fpdf.php');
//echo 11;
$occupantRegno = $_POST['reg_id'];
//echo $occupantRegno;die;

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();
$pdf->SetFillColor(255, 255, 255);




$pdf->SetFont('Arial', 'U', 9);
$pdf->Cell(55);
$pdf->Image('SUNDARBAN WELFARE TRUS copy.png', 20, 6, 30);
$pdf->Image('SUNDARBAN WELFARE TRUS copy.png', 160, 6, 30);
$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 22);
$pdf->Cell(190, 2, 'SUNDARBAN WELFARE TRUST', 0, 0, 'C');
$pdf->Ln(4);
$pdf->Cell(35);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(120, 5, 'NARAYANPUR-NAMKHANA-SOUTH 24 PARGANAS', 0, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(55);
$pdf->Cell(75, 5, 'Regd.no.438/2021-IV-044/21', 0, 0, 'C');
$pdf->SetFont('Arial', 'B', 12);

$pdf->Ln(6);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55);
$pdf->Cell(75, 5, 'Section 12 A Registration No - ABBTS3167LE20221', 0, 0, 'C');
$pdf->SetFont('Arial', 'B', 10);

$pdf->Ln(7);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55);
$pdf->Cell(75, 0, 'Section 80 G Registration No- ABBTS3167LF2022101', 0, 0, 'C');
$pdf->SetFont('Arial', 'B', 10);

$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55);
$pdf->Cell(75, -10, 'Website: sundarbanwelfaretrust.org E-mail: sundarbanwelfaretrustnamkhana@gmail.com', 0, 0, 'C');
$pdf->SetFont('Arial', 'B', 10);

$pdf->Ln(9);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55);
$pdf->Cell(75, -20, 'Mobile No 9831221380 // 9732447279/9143631380', 0, 0, 'C');
$pdf->SetFont('Arial', 'B', 10);


$pdf->SetY(50);
// $pdf->SetX(68);
// $pdf->SetFont('Arial','',13);
// $pdf->Cell(75,6,'=====================================',1,6,'C',60);
//$pdf->Cell(75,6,'DARJEELING SARAS MELA 2019',1,1,'C',90);
//$pdf->SetY(68);
$pdf->SetX(76);
$pdf->SetFont('Arial', '', 16);
$pdf->Cell(55, 6, '==========================================', 0, 6, 'C', 60);

//$y = $y+8;
//$pdf->SetY($y);
$pdf->SetY(58);
$pdf->SetX(76);
$pdf->SetFont('Arial', 'BU', 16);
$pdf->Cell(55, 6, 'FORMNO.10BE', 0, 6, 'C', 60);
//$y = $y+3;
//$pdf->SetY($y);		
$pdf->SetY(65);
$pdf->SetX(76);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55, 6, '(Seerule 18AB)', 0, 6, 'C', 60);


$pdf->SetY(70);
$pdf->SetX(76);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(55, 6, 'Registration ID :  ' . $occupantRegno, 0, 6, 'C', 60);

$y = 70;
$y = $y + 6;
$pdf->SetY($y);
$pdf->SetX(155);
$pdf->SetFont('Arial', 'BI', 9);
$pdf->Cell(-75, 6, '* Certificate of donation under clause (ix) of sub-section (5) of section 80G and under clause ', 0, 6, 'C', 60);
$pdf->SetFont('Arial', 'B', 8.7);

$y = $y + 4;
$pdf->SetY($y);
$pdf->SetX(155);
$pdf->SetFont('Arial', 'BI', 9);
$pdf->Cell(-95, 6, '(ii) to sub-section (1A) of section 35 of theIncome-taxAct,1961', 0, 6, 'C', 60);
$pdf->SetFont('Arial', 'B', 8.7);

$query = mysqli_query($con, " SELECT * FROM `donate` WHERE `id`='$occupantRegno'") or die(mysqli_error($con));

while ($row = mysqli_fetch_array($query)) {
	$id = $row['id'];
	$name = $row['name'];
	$date = $row['date'];
	$addre = $row['address'];
	$pin = $row['pin'];
	//echo $addre;die;

	$y = $y + 6;
	$pdf->SetY($y);
	// $pdf->SetX(10);
	// $pdf->Cell(9,6,'2',1,6,'C',2);
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(195, 6, '                                                                                                                donee ', 1, 6, 'B', 60);



	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '1', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'PAN of the reporting person', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, $occupantRegno . ', ' . $occupantRegno . ', ' . $occupantRegno, 1, 6, 'L', 60);

	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '2', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Name of the reporting person', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, $occupantRegno . ', ' . $occupantRegno . ', ' . $occupantRegno, 1, 6, 'L', 60);



	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '3', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Address of the reporting person', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, $occupantRegno . ', ' . $occupantRegno . ', ' . $occupantRegno, 1, 6, 'L', 60);

	$y = $y + 5;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 13, '4', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->MultiCell(62, 6, 'Order number granting approval under section 80G or Notification number under section 35(Unique Registration Number)', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 13, $occupantRegno . ', ' . $occupantRegno . ', ' . $occupantRegno, 1, 6, 'L', 60);




	$y = $y + 13;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '5', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Date of approval / Notification', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, $occupantRegno . ', ' . $occupantRegno . ', ' . $occupantRegno, 1, 6, 'L', 60);


	$y = $y + 6;
	$pdf->SetY($y);
	// $pdf->SetX(10);
	// $pdf->Cell(9,6,'2',1,6,'C',2);
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(195, 6, '                                                                                                     Donoranddonations ', 1, 6, 'c', 60);




	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '1', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'PAN', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, abc, 1, 6, 'L', 60);


	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '2', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Other', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, NA, 1, 6, 'L', 60);


	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '3', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Name of Donor', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	//$pdf->Cell(125,6,$occupantAddress,1,6,'L',60); MultiCell
	$pdf->MultiCell(125, 6, $name, 'LRTB', 'L', 1, 2);

	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '5', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Address of Donor ', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->MultiCell(125, 6, $addre, 1, 6, 'L', 60);

	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '6', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Amount of donation received', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, $Amount, 1, 6, 'L', 60);


	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 12, '7', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->MultiCell(62, 6, 'Financialyear in which such donation was received', 1, 6, 'c', 160);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 12, $date, 1, 6, 'L', 60);


	$y = $y + 12;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 6, '8', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->Cell(62, 6, 'Type of donation ', 1, 6, 'L', 60);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 6, $occupantRegno, 1, 6, 'L', 60);

	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Cell(9, 12, '9', 1, 6, 'C', 2);
	$pdf->SetY($y);
	$pdf->SetX(19);
	$pdf->MultiCell(62, 6, 'Section under which donation is eligible for deduction ', 1, 6, 'c', 160);
	$pdf->SetY($y);
	$pdf->SetX(80);
	$pdf->Cell(125, 12, 'Section=' . $occupantRegno . ',Section80G(5)=', 1, 6, 'L', 60);

	////END TABLE/////////////////////////

	///////////////////////////////////////////////////////// VERIFICATION///////////////////////////////////////////

	$y = $y + 13;
	$pdf->SetY($y);
	$pdf->SetX(76);
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(55, 6, 'VERIFICATION', 0, 6, 'C', 60);

	$y = $y + 8;
	$pdf->SetY($y);
	$pdf->SetX(155);
	$pdf->SetFont('Arial', 'BI', 9);
	$pdf->Cell(-95, 6, 'I, son/ daughter of solemnly declare that to the best of my knowledge and belief, the information given in the certificate  ', 0, 6, 'C', 60);
	$pdf->SetFont('Arial', 'B', 8.7);
	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(155);
	$pdf->SetFont('Arial', 'BI', 9);
	$pdf->Cell(-95, 6, 'iscorrect and complete and is in accordance with the provisions of the Income-tax Act,1961.I further declare that I am making', 0, 6, 'C', 60);
	$pdf->SetFont('Arial', 'B', 8.7);
	$y = $y + 6;
	$pdf->SetY($y);
	$pdf->SetX(86);
	$pdf->SetFont('Arial', 'BI', 9);
	$pdf->Cell(-95, 6, 'this certificate in my capacityas ', 0, 6, 'C', 60);
	$pdf->SetFont('Arial', 'B', 8.7);

	$y = $y + 20;
	$pdf->SetY($y);
	$pdf->SetX(215);
	$pdf->SetFont('Arial', 'BI', 9);
	$pdf->Image('abc.png', 150, 215, 40);
	$pdf->Cell(-95, 4, '_______________________________,', 0, 6, 'C');
	$pdf->Cell(-95, 6, 'Signature: ', 0, 6, 'C', 0);
	$pdf->SetFont('Arial', 'B', 8.7);
	$pdf->SetY($y);
	$pdf->SetX(69);
	$pdf->SetFont('Arial', 'BI', 9);
	$pdf->Cell(-70, 6, 'DATE:' . $date, 0, 6, 'C', 60);
	$pdf->SetFont('Arial', 'B', 8.7);


	$y = $y + 10;
	$pdf->SetY($y);
	$pdf->SetX(155);
	$pdf->SetFont('Arial', 'BI', 9);
	$pdf->Cell(-95, 6, '1.Inserted by the Income-tax(Sixth Amendment)Rules,2021,w.e.f.1-4-2021', 0, 6, 'C', 60);
	$pdf->SetFont('Arial', 'B', 8.7);

	$pdf->Output("abcd", 'I');
}
