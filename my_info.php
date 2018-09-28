<?php

ini_set("memory_limit", "-1");
set_time_limit(0);
$pdf = new TCPDF('P','mm','A4', true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFooterMargin(0);
$pdf->AddPage();//Add page
$name="Khushboo Babudas Vaishnav";
$pdf->SetFont('times','B','20');
$name='Name : '.$name;
$pdf->MultiCell(280,7,$name,'0','L',0,1,5,10,true,'',false,false,'','M',true);

//$pdf->writeHTMLCell(280,5,5,8,$html,'0',0,false,true,'L');
$pdf->Output("");
?>