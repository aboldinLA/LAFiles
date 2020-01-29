<?php

include "lol_common.inc";


	
include('https://landscapearchitect.com/vendor/fpdf17/fpdf.php');
$pdf=new FPDF();

//Creating new pdf page

$pdf->AddPage();
//Set the base font & size
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Create PDF File In PHP");
//Creating new line
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',6);
$pdf->Cell(10,5,"[Sr.No.]");
$pdf->Cell(30,5,"[name]");
$pdf->Cell(30,5,"[Mobile]");
$pdf->Cell(25,5,"[email]");
$pdf->Ln();
$pdf->Cell(350,5,"---------------------------------------------------------------------------------------------------------------------");

// Fetch data from table

	$company_id = $_GET['id'];
	
	$small = $_GET['small'];
	
	$large = $_GET['large'];
						
	$week = $_GET['week'];
 



    $query = "SELECT fname, lname, company, address, city, state, zip FROM leads WHERE (Date BETWEEN '$small' and '$large') AND vendor_id='$id'";
	
	$result = mysql_query($query) or die('Error, query failed');


 while($row=mysql_fetch_array($result))

 {

  $pdf->Cell(10,5,"{$row['Id']}");

  $pdf->Cell(30,5,"{$row['name']}");

  $pdf->Cell(30,5,"{$row['Mobile']}");

  $pdf->multiCell(25,5,"{$row['email']}");

 }

$pdf->Output();
?>
                                