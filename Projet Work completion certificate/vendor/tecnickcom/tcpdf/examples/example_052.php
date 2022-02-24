<?php
$Day = $_POST['Day'];
$Date = $_POST['Date'];
$Place = $_POST['Place'];
$Gender = $_POST['Gender'];
$Name = $_POST['Name'];
$Position = $_POST['Position'];
$Company= $_POST['Company'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$ZIP = $_POST['ZIP'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Project = $_POST['Project'];
$Purpose = $_POST['Purpose'];
$Description = $_POST['Description'];
$BDate = $_POST['BDate'];
$CDate = $_POST['CDate'];
//============================================================+
// File name   : example_052.php
// Begin       : 2009-05-07
// Last Update : 2013-05-14
//
// Description : Example 052 for TCPDF class
//               Certification Signature (experimental)
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
 * @abstract TCPDF - Example: Certification Signature (experimental)
 * @author Nicola Asuni
 * @since 2009-05-07
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Pathcontrol');
$pdf->setTitle(''.$Company.'-WCC');
$pdf->setSubject('WCC');
$pdf->setKeywords('WCC, '.$Company.'');

// set default header data
$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

/*
NOTES:
 - To create self-signed signature: openssl req -x509 -nodes -days 365000 -newkey rsa:1024 -keyout tcpdf.crt -out tcpdf.crt
 - To export crt to p12: openssl pkcs12 -export -in tcpdf.crt -out tcpdf.p12
 - To convert pfx certificate to pem: openssl pkcs12 -in tcpdf.pfx -out tcpdf.crt -nodes
*/

// set certificate file
$certificate = 'file://data/cert/tcpdf.crt';

// set additional information
$info = array(
	'Name' => 'Pathcontrol',
	'Location' => 'Office',
	'Reason' => 'WCC',
	'ContactInfo' => 'https://www.pathcontrol.com',
	);

// set document signature
$pdf->setSignature($certificate, $certificate, 'Pathcontrol', '', 2, $info);

// set font
$pdf->setFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// print a line of text
$text = '<table cellpadding="0" cellspacing="0" style="width:100%; border-collapse:collapse;">
<tbody>
	<tr style="height:90pt;">
		<td style="width:468pt; vertical-align:top;">
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:28pt;">Work Completion Certificate</p>
		</td>
	</tr>
</tbody>
</table>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:4pt;">&nbsp;</p>
<p style="margin-top:8pt; margin-right:151.2pt; margin-bottom:30pt; font-size:10.5pt;"><span style="text-transform:uppercase; letter-spacing:1.4pt;">'.$Day.' | '.$Date.' | '.$Place.'</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">I, '.$Gender.' '.$Name.', hereby affirm, to the best of my knowledge and belief, based on inspections, observations, testing of the project and upon reports submitted by others, that this '.$Project.' is substantially complete and operable.</p>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">&nbsp;</p>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="text-transform:uppercase;">PROJECT NAME</span></h3>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">'.$Project.' ('.$Purpose.')</p>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;"><span style="text-transform:uppercase;">&nbsp;</span></h3>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="text-transform:uppercase;">PROJECT DESCRIPTION</span></h3>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">'.$Description.'</p>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;"><span style="font-weight:normal; text-transform:uppercase; color:#000000;">Project begin date: '.$BDate.'</span></h3>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;"><span style="font-weight:normal; text-transform:uppercase; color:#000000;">Completion date: '.$CDate.'</span></h3>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;"><span style="font-weight:normal; text-transform:uppercase; color:#000000;">&nbsp;</span></h3>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="text-transform:uppercase;">CONTRACTOR INFORMATION</span></h3>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">'.$Gender.' '.$Name.' ['.$Position.']</p>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">'.$Company.'</p>
<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">'.$Street.', '.$City.', '.$ZIP.' | Phone : '.$Phone.' | '.$Email.'</p>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;"><span style="font-weight:normal; text-transform:uppercase; color:#000000;">&nbsp;</span></h3>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;"><span style="text-transform:uppercase;">Sender Title, Company</span></h3>
<h3 style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="text-transform:uppercase;">&nbsp;</span></h3>
<table cellpadding="0" cellspacing="0" style="width:103.76%; border-collapse:collapse;">
<tbody>
	<tr>
		<td style="width:200.15pt; vertical-align:top;">
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">Certified by</p>
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">'.$Company.'</p>
		</td>
		<td style="width:200.15pt; vertical-align:top;">
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">Date</p>
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:10.5pt;">'.$Date.'</p>
		</td>
		<td style="width:200.15pt; vertical-align:top;">
			<img src="images/tcpdf_signature.png" style="width: 50px; height: 50px;">
		</td>
	</tr>
</tbody>';
$pdf->writeHTML($text, true, 0, true, 0);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// *** set signature appearance ***

// create content for signature (image and/or text)

// define active area for signature appearance
$pdf->setSignatureAppearance(180, 60, 15, 15);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// *** set an empty signature appearance ***
$pdf->addEmptySignatureAppearance(180, 80, 15, 15);

// ---------------------------------------------------------
// Change the path to whatever you like, even public:// will do or you could also make use of the private file system by using private://
$path = realpath('../../../../WCC');

// Supply a filename including the .pdf extension
$filename = ''.$Company.'-WCC.pdf';

// Create the full path
$full_path = $path . '/' . $filename;

// Output PDF
$pdf->Output($full_path, 'FD');

//Close and output PDF document

//============================================================+
// END OF FILE
//============================================================+
