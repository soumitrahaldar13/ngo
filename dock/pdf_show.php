<?php

require('fpdf.php');

$occupantRegno = 1;

//echo $occupantRegno;

$pdf=new FPDF('P','mm','A4');
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();
$pdf->SetFillColor(255,255,255);




$pdf->SetFont('Arial','U',9);
$pdf->Cell(55);
$pdf->Image('SUNDARBAN WELFARE TRUS copy.png',20,6,30);
$pdf->Image('SUNDARBAN WELFARE TRUS copy.png',160,6,30);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',22);
$pdf->Cell(190,2,'SUNDARBAN WELFARE TRUST',0,0,'C');
$pdf->Ln(4);
$pdf->Cell(35);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(120,5,'NARAYANPUR-NAMKHANA-SOUTH 24 PARGANAS',0,0,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(55);
$pdf->Cell(75,5,'Regd.no.438/2021-IV-044/21',0,0,'C');
$pdf->SetFont('Arial','B',12);

$pdf->Ln(6);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(55);
$pdf->Cell(75,5,'Section 12 A Registration No - ABBTS3167LE20221',0,0,'C');
$pdf->SetFont('Arial','B',10);

$pdf->Ln(7);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(55);
$pdf->Cell(75,0,'Section 80 G Registration No- ABBTS3167LF2022101',0,0,'C');
$pdf->SetFont('Arial','B',10);

$pdf->Ln(8);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(55);
$pdf->Cell(75,-10,'Website: sundarbanwelfaretrust.org E-mail: sundarbanwelfaretrustnamkhana@gmail.com',0,0,'C');
$pdf->SetFont('Arial','B',10);

$pdf->Ln(9);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(55);
$pdf->Cell(75,-20,'Mobile No 9831221380 // 9732447279/9143631380',0,0,'C');
$pdf->SetFont('Arial','B',10);



$pdf->SetY(50);
				// $pdf->SetX(68);
				// $pdf->SetFont('Arial','',13);
				// $pdf->Cell(75,6,'=====================================',1,6,'C',60);
                                //$pdf->Cell(75,6,'DARJEELING SARAS MELA 2019',1,1,'C',90);
				//$pdf->SetY(68);
				$pdf->SetX(76);
				$pdf->SetFont('Arial','',16);
				$pdf->Cell(55,6,'==========================================',0,6,'C',60);

		//$y = $y+8;
				//$pdf->SetY($y);
				$pdf->SetY(58);
				$pdf->SetX(76);
				$pdf->SetFont('Arial','BU',16);
				$pdf->Cell(55,6,'FORMNO.10BE',0,6,'C',60);
		//$y = $y+3;
				//$pdf->SetY($y);		
				$pdf->SetY(65);
				$pdf->SetX(76);
				$pdf->SetFont('Arial','BU',10);
				$pdf->Cell(55,6,'(Seerule 18AB)',0,6,'C',60);
				

$pdf->SetY(70);
$pdf->SetX(76);
$pdf->SetFont('Arial','',10);
$pdf->Cell(55,6,'Registration ID :  '.$occupantRegno ,0,6,'C',60);

				$y = 70;
				$y = $y+6;
				$pdf->SetY($y);				
				$pdf->SetX(155);
				$pdf->SetFont('Arial','BI',9);
				$pdf->Cell(-75,6,'* Certificate of donation under clause (ix) of sub-section (5) of section 80G and under clause ',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);

				$y = $y+4;
				$pdf->SetY($y);
				$pdf->SetX(155);
				$pdf->SetFont('Arial','BI',9);
				$pdf->Cell(-95,6,'(ii) to sub-section (1A) of section 35 of theIncome-taxAct,1961',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);
				
				/////TABLE//////
				// $y = $y+6;
				// $pdf->SetY($y);
				// $pdf->SetX(10);
				// $pdf->Cell(9,6,'1',1,6,'C',2);
				// $pdf->SetY($y);
				// $pdf->SetX(19);
				// $pdf->Cell(186,6,'Stall Required (DD/MM/YYYY) From : '. date('d-M-Y', strtotime('2022-01-01')).                                                 '      To: '.date('d-M-Y', strtotime('2022-01-02')),1,6,'L',60);
				
				
				$y = $y+6;
				$pdf->SetY($y);
				// $pdf->SetX(10);
				// $pdf->Cell(9,6,'2',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(195,6,'         donee ' ,1,6,'c',60);
				
				
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'PAN of the reporting person',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno.', '.$occupantRegno.', '.$occupantRegno,1,6,'L',60);
				
                $y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Name of the reporting person',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno.', '.$occupantRegno.', '.$occupantRegno,1,6,'L',60);



				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Address of the reporting person',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno.', '.$occupantRegno.', '.$occupantRegno,1,6,'L',60);

                $y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Order number granting approval under section 80G or Notification number under section 35(Unique Registration Number)',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno.', '.$occupantRegno.', '.$occupantRegno,1,6,'L',60);

                $y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Date of approval / Notification',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno.', '.$occupantRegno.', '.$occupantRegno,1,6,'L',60);


				$y = $y+6;
				$pdf->SetY($y);
				// $pdf->SetX(10);
				// $pdf->Cell(9,6,'2',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(195,6,'         Donoranddonations ' ,1,6,'c',60);



				// $y = $y+6;
				// $pdf->SetY($y);
				// //$pdf->SetX(10);
				// //$pdf->SetFillColor(211,211,211);
				// // $pdf->Cell(9,6,'',1,0,'C',2);
				// $pdf->SetY($y);
				// $pdf->SetX(19);
				// $pdf->Cell(186,6,'Donoranddonations ',1,6,'L',10);
				
				
				
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.2',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.2',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'PAN',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno,1,6,'L',60);
				
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.2',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Other',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno,1,6,'L',60);
				
				// $y = $y+6;
				// $pdf->SetY($y);
				// $pdf->SetX(10);
				// $pdf->Cell(9,6,'5.3',1,6,'C',2);
				// $pdf->SetY($y);
				// $pdf->SetX(19);
				// $pdf->Cell(62,6,'Block / Municipality :',1,6,'L',60);
				// $pdf->SetY($y);
				// $pdf->SetX(80);
				// $pdf->Cell(125,6,$blockName,1,6,'L',60);
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.3',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Name of Donor',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				//$pdf->Cell(125,6,$occupantAddress,1,6,'L',60); MultiCell
                                $pdf->MultiCell(125,6,$occupantRegno,'LRTB','L',1,2);
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Address of Donor ',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno,1,6,'L',60);
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.4',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Amount of donation received',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno.' ('.$occupantRegno.')',1,6,'L',60);
				
				// $y = $y+6;
				// $pdf->SetY($y);
				// $pdf->SetX(10);
				// $pdf->Cell(9,6,'5.5.2',1,6,'C',2);
				// $pdf->SetY($y);
				// $pdf->SetX(19);
				// $pdf->Cell(62,6,'ID No.: ',1,6,'L',60);
				// $pdf->SetY($y);
				// $pdf->SetX(80);
				// $pdf->Cell(125,6,$occupantidno,1,6,'L',60);
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.5',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Financialyear in which such donation was received: ',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno,1,6,'L',60);
				
				$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.6',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Type of donation ',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,$occupantRegno,1,6,'L',60);

                 $y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(10);
				$pdf->Cell(9,6,'4.6',1,6,'C',2);
				$pdf->SetY($y);
				$pdf->SetX(19);
				$pdf->Cell(62,6,'Section under which donation is eligible for deduction ',1,6,'L',60);
				$pdf->SetY($y);
				$pdf->SetX(80);
				$pdf->Cell(125,6,'Section='.$occupantRegno.',Section80G(5)=',1,6,'L',60);

				////END TABLE/////////////////////////

				///////////////////////////////////////////////////////// VERIFICATION///////////////////////////////////////////

	$y = $y+10;
				$pdf->SetY($y);
				$pdf->SetX(76);
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(55,6,'VERIFICATION',0,6,'C',60);
				
	$y = $y+8;
				$pdf->SetY($y);
				$pdf->SetX(155);
				$pdf->SetFont('Arial','BI',9);
				$pdf-> Cell(-95,6,'I, son/ daughter of solemnly declare that to the best of my knowledge and belief, the information given in the certificate  ',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);
	$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(155);
				$pdf->SetFont('Arial','BI',9);
				$pdf-> Cell(-95,6,'iscorrect and complete and is in accordance with the provisions of the Income-tax Act,1961.I further declare that I am making',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);	
	$y = $y+6;
				$pdf->SetY($y);
				$pdf->SetX(86);
				$pdf->SetFont('Arial','BI',9);
				$pdf-> Cell(-95,6,'this certificate in my capacityas ',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);				

    $y = $y+20;
				$pdf->SetY($y);
				$pdf->SetX(215);
				$pdf->SetFont('Arial','BI',9);
				$pdf->Cell(-95,4,'_______________________________,',0,6,'C');
				$pdf-> Cell(-95,6,'Signature: ',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);	
     $pdf->SetY($y);
				$pdf->SetX(69);
				$pdf->SetFont('Arial','BI',9);
				$pdf-> Cell(-95,6,'DATE: ',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);	


	  $y = $y+10;
				$pdf->SetY($y);
				$pdf->SetX(155);
				$pdf->SetFont('Arial','BI',9);
				$pdf-> Cell(-95,6,'1.Inserted by the Income-tax(Sixth Amendment)Rules,2021,w.e.f.1-4-2021',0,6,'C',60);
				$pdf->SetFont('Arial','B',8.7);

			
				// $pdf->SetX(155);
				// $pdf->SetFont('Arial','BI',11);
				// $pdf->Image('abc.png',145,170,40);
				// $pdf->Cell(10,4,'_______________________________,',0,6,'C');
				// $pdf->Cell(10,4,'Registrar of Political Donations,',0,6,'C');
				// $pdf->Cell(10,8,'kakdwip,',0,6,'C');
				// $pdf->SetFont('Arial','B',9.7);

$pdf->Output("abcd",'I');

?>