<?php
//============================================================+
// File name   : example_027.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 027 for TCPDF class
//               1D Barcodes
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+
/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: 1D Barcodes.
 * @author Nicola Asuni
 * @since 2008-03-04
 */
// Include the main TCPDF library (search for installation path).

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator('National Informatics Centre');
$pdf->SetAuthor('NIC');
$pdf->SetTitle('GST Exemption Scheme Certificate');
$pdf->SetSubject('GECS');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// set default header data
$pdf->SetHeaderData('logo.jpg', PDF_HEADER_LOGO_WIDTH, 'GST Exemption Certificate Scheme');
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}
// ---------------------------------------------------------
// set a barcode on the page footer
$pdf->setBarcode($_SESSION['benificiary']);
// set font
$pdf->SetFont('helvetica', '', 11);
// add a page
$pdf->AddPage();
// print a message

// -----------------------------------------------------------------------------
$pdf->SetFont('helvetica', '', 10);
// define barcode style
$style = array(
	'position' => '',
	'align' => 'C',
	'stretch' => false,
	'fitwidth' => true,
	'cellfitalign' => '',
	'border' => true,
	'hpadding' => 'auto',
	'vpadding' => 'auto',
	'fgcolor' => array(0,0,0),
	'bgcolor' => false, //array(255,255,255),
	'text' => true,
	'font' => 'helvetica',
	'fontsize' => 8,
	'stretchtext' => 4
);
// PRINT VARIOUS 1D BARCODES
// CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9.
$pdf->Cell(0, 0, 'Name', 0, 1);
$pdf->write1DBarcode($_SESSION['benificiary'], 'C39', '', '', '', 18, 0.4, $style, 'N');
$pdf->Ln();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// TEST BARCODE ALIGNMENTS
// add a page

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// TEST BARCODE STYLE
// define barcode style

// ---------------------------------------------------------
//Close and output PDF document
$ben=$_SESSION['benificiary'];
$pdf->Output($ben.'.pdf', 'I');
//============================================================+
// END OF FILE
//============================================================+