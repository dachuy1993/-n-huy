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
$html = '<p style="text-align:center;font-size:20px;">PHIẾU XUẤT HÀNG</p>';
if(isset($gettt1)){
			foreach ($gettt1 as $key) {
							
$html.= '<p>Khách hàng: '.$key->Ten_kh.'</p>';
$html.= '<p>Ngày lập: '.date("d/m/Y").'</p>';
$html.= '<p>Mã phiếu xuất: '.$key->Dondh_id.'</p>';
$html.= '<table border="1" cellpadding = "10px">';
$html.= '<tr>';
$html.= '<td style="width:50px;">STT</td>';
$html.= '<td>Tên sản phẩm</td>';
$html.= '<td>Chất liệu</td>';
$html.= '<td>Giá sản phẩm</td>';
$html.= '<td>Số lượng</td>';
$html.= '<td style="width:150px;">Thành tiền</td>';
$html.= '</tr>';
}}
$i=0;
$s=0;
if(isset($gettt2)){
			foreach ($gettt2 as $key) {
				$i+=1;
				$s+=$key->Gia_sp*$key->Soluongmua;

$html.= '<tr>';
$html.= '<td>'.$i.'</td>';
$html.= '<td>'.$key->Ten_sp.'</td>';
$html.= '<td>'.$key->Chatlieu_sp.'</td>';
$html.= '<td>'.number_format($key->Gia_sp) .'</td>';
$html.= '<td>'.$key->Soluongmua.'</td>';
$html.= '<td>'.number_format($key->Gia_sp*$key->Soluongmua) .'VNĐ</td>';
$html.= '</tr>';
$html.= '<tr>';
$html.= '<td colspan = "5">Tổng</td>';
$html.= '<td>'.$s .'VNĐ</td>';
$html.= '</tr>';
$html.= '</table>';
$html.= '<p style="text-align:right;">Người làm</p>';
$html.= '<p style="text-align:right;">'.$user.'</p>';
// $html.= '<tr>';
}}
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
