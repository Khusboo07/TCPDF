<?php

ini_set("memory_limit", "-1");
set_time_limit(0);
setlocale(LC_MONETARY, 'en_IN');
$pdf = new TCPDF('P','mm','A4', true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->SetFooterMargin(0);
$pdf->AddPage();//Add page

$pdf->SetFont('times', 'B', 20);


$pdf->MultiCell(200,12,'CLIENT DETAILS','1','C',0,1,5,10,true,'',false,false,'','M',true);
$pdf->MultiCell(60,7, 'Client Code', '1', 'L', 0,2,5,22,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Client Name', '1', 'L', 0,2,65,22,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'Platform', '1', 'L', 0,2,165,22,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0001', '1', 'L', 0,2,5,29,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Shinde Stone Company', '1', 'L', 0,2,65,29,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS/RMS', '1', 'L', 0,2,165,29,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0002', '1', 'L', 0,2,5,36,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Ubitech System', '1', 'L', 0,2,65,36,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,36,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0004', '1', 'L', 0,2,5,43,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Maxel Rock Processing', '1', 'L', 0,2,65,43,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS', '1', 'L', 0,2,165,43,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0005', '1', 'L', 0,2,5,50,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Satav Patil', '1', 'L', 0,2,65,50,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS/RMS', '1', 'L', 0,2,165,50,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0006', '1', 'L', 0,2,5,57,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Kaspers BuildMate', '1', 'L', 0,2,65,57,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS', '1', 'L', 0,2,165,57,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0007', '1', 'L', 0,2,5,64,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'BMK Buildcon', '1', 'L', 0,2,65,64,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS', '1', 'L', 0,2,165,64,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0008', '1', 'L', 0,2,5,71,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Motilal Dhoot', '1', 'L', 0,2,65,71,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS/RMS', '1', 'L', 0,2,165,71,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0009', '1', 'L', 0,2,5,78,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Kalokhe RMC', '1', 'L', 0,2,65,78,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,78,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0012', '1', 'L', 0,2,5,85,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Sai Concretes', '1', 'L', 0,2,65,85,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,85,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0013', '1', 'L', 0,2,5,92,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Pratik RMC', '1', 'L', 0,2,65,92,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,92,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0015', '1', 'L', 0,2,5,99,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Manjulai Construction Company', '1', 'L', 0,2,65,99,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'ALL', '1', 'L', 0,2,165,99,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0016', '1', 'L', 0,2,5,106,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Sai Readymix Concrete', '1', 'L', 0,2,65,106,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,106,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0017', '1', 'L', 0,2,5,113,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Shree Ganesh Construction', '1', 'L', 0,2,65,113,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,113,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0018', '1', 'L', 0,2,5,120,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Samarth RMC', '1', 'L', 0,2,65,120,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,120,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0019', '1', 'L', 0,2,5,127,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Anishwar RMC', '1', 'L', 0,2,65,127,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,127,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0020', '1', 'L', 0,2,5,134,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Saundarya Stone Crusher', '1', 'L', 0,2,65,134,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS', '1', 'L', 0,2,165,134,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0021', '1', 'L', 0,2,5,141,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Trimurti Stone Metal Co.', '1', 'L', 0,2,65,141,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'ALL', '1', 'L', 0,2,165,141,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0022', '1', 'L', 0,2,5,148,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Shree Venkateshwara RMC', '1', 'L', 0,2,65,148,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,148,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0023', '1', 'L', 0,2,5,155,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Adber Infra India Pvt Ltd.', '1', 'L', 0,2,65,155,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,155,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0024', '1', 'L', 0,2,5,162,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Shraddha Stone Crusher', '1', 'L', 0,2,65,162,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS', '1', 'L', 0,2,165,162,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0025', '1', 'L', 0,2,5,169,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'VRS CONCRETE LLP', '1', 'L', 0,2,65,169,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,169,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0026', '1', 'L', 0,2,5,176,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Amix Infra Concrete Solutions', '1', 'L', 0,2,65,176,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'RMS', '1', 'L', 0,2,165,176,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '0027', '1', 'L', 0,2,5,183,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, 'Jagson Buildcon Pvt Ltd', '1', 'L', 0,2,65,183,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, 'CMS/RMS', '1', 'L', 0,2,165,183,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,190,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,190,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,190,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,197,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,197,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,197,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,204,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,204,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,204,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,211,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,211,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,211,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,218,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,218,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,218,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,225,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,225,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,225,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,232,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,232,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,232,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,239,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,239,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,239,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,246,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,246,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,246,true,'',false,false,'','M',true);

$pdf->MultiCell(60,7, '', '1', 'L', 0,2,5,253,true,'',false,false,'','M',true);
$pdf->MultiCell(100,7, '', '1', 'L', 0,2,65,253,true,'',false,false,'','M',true);
$pdf->MultiCell(40,7, '', '1', 'L', 0,2,165,253,true,'',false,false,'','M',true); 
$pdf->Output("");
?>