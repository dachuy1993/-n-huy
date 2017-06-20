<?php 
if(isset($user)){
	$nguoinhap = $user;
}else $nguoinhap ='';

 ?>
<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
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
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
// $pdf->SetHeaderData('Do Go Noi That');
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

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content
$html = '<p style="text-align:center;font-size:20px;";>PHIẾU NHẬP HÀNG</p>';
$html.='<p>Ngày nhập: '.date("d/m/Y").'</p>';
// $html.= '<p style="float:right;">Người nhập:'.$nguoinhap.'</p>';
$html.='<table border="1" cellpadding="10px">';
$html.='<thead>';
$html.='<tr>';
$html.='<td style="width:50px;">STT</td>';
$html.='<td style="text-align:center;">Tên sản phẩm</td>';
$html.='<td style="text-align:center;">Chất liệu</td>';
$html.='<td style="text-align:center;">Giá nhập</td>';
$html.='<td style="text-align:center;">Số lượng</td>';
$html.='<td style="text-align:center;">Thành tiền</td>';
$html.='</tr>';
$html.='</thead>';
$html.='<tbody>';
$i =0;
$s=0;
if(isset($hdnhap)){
	foreach ($hdnhap as $key => $value) {
	$i+=1;
	$s+=$value['price']*$value['qty'];
$html.='<tr>';
$html.='<td style="width:50px;text-align:center;">'.$i.'</td>';
$html.='<td style="text-align:center;">'.$value['name'].'</td>';
$html.='<td style="text-align:center;">'.$value['Chatlieu_sp'].'</td>';
$html.='<td style="text-align:center;">'.number_format($value['price']) .'VNĐ</td>';
$html.='<td style="text-align:center;">'.$value['qty'].'</td>';
$html.='<td style="text-align:center;">'.number_format($value['price']*$value['qty']) .' VNĐ</td>';
$html.='</tr>';
	}
}
$html.='<tr>';
$html.='<td colspan="5">Tổng</td>';
$html.='<td>'.number_format($s). 'VNĐ</td>';
$html.='</tr>';
$html.='</tbody>';
$html.='</table>';
$html.= '<p style="text-align:right;">Người làm</p>';
$html.= '<p style="text-align:right;">'.$nguoinhap.'</p>';



// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
