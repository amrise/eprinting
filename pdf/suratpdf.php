<?php
require('../fpdf17/fpdf.php');
include("../connection.php");
//db connection
// $conn = pg_connect('localhost','root','');
// pg_select_db($conn,'printing');
//
//
// 		if(isset($_POST['print'])){
//
// 			$start = $_POST['start_date'];
// 			$end = $_POST['end_date'];
// 		}
$fileno=$_GET['activity_id'];
// $query =  mysqli_query ($conn,"SELECT * FROM item JOIN transaction ON item.itemNo = transaction.itemNo Where date Between '$start' and '$end' ORDER BY transactionID ASC ");
$res = pg_query($connection, "SELECT * FROM activity WHERE activity_id = '$fileno';");
$row = pg_fetch_array($res);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','',12);//step 1

//Cell(width , height , text , border , end line , [align] )


$pdf->Cell(59	,5,'Dekan,',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'Fakulti Teknologi Maklumat,',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);//step 2
$pdf->Cell(59	,5,'Tingkat 2,',0,1);//end of line

$pdf->Cell(59	,5,'Hang Tuah Jaya,',0,1);
$pdf->Cell(130	,5,'76100 Durian Tunggal,',0,0);
$pdf->Cell(25	,5,'',0,0);
// date_default_timezone_set('Asia/Kuala_Lumpur');
$pdf->Cell(34	,5, '',0,1);//end of line

$pdf->Cell(130	,5,'Melaka.',0,0);
$pdf->Cell(25	,5,'',0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

$pdf->Cell(130 ,30,'Tuan,',0,0);
$pdf->Cell(25	,5,'',0,0);
date_default_timezone_set('Asia/Kuala_Lumpur');
$pdf->Cell(34	,30, date("d/m/y", strtotime($row['formdate'])),0,1,'R');//data insert

$pdf->SetFont('Arial','BU',14);//step 3 Bold and Underline
$pdf->Cell(98,10,'MEMOHON KEBENARAN MENGADAKAN '.strtoupper($row['title']),0,1);
$pdf->Cell(12 ,5,'' ,0,1);

// $pdf->SetFont('Arial','B',14);//step 3
// $pdf->Cell(60	,80,'Title: ITEM TRANSACTION INFORMATION REPORT' ,0,1);

$pdf->SetFont('Arial','',12);//step 2
$pdf->Cell(12	,5,'Saya',0,0);//end of line
$pdf->Cell(73	,5,$row['name'],0,0,'L');//data name
$pdf->Cell(35	,5,'mewakili program',0,0,'L');
$pdf->Cell(62	,5,ucwords($row['title']),0,1,'L');//data program
$pdf->Cell(61	,5,'Lawatan ini melibatkan komuniti ',0,0,'L');
$pdf->Cell(85	,5,'Fakulti Teknologi Maklumat dan Komunikasi.',0,1,'L');
$pdf->Cell(12 ,5,'' ,0,1);

$pdf->SetFont('Arial','',12);//step 2
$pdf->Cell(12 ,5,'' ,0,1);//untuk menjarakkan kebawah
$pdf->Cell(12 ,5,'2.' ,0,0);
$pdf->Cell(171,5,'Untuk pengetahuan pihak tuan, lawatan tersebut akan diadakan sepertimana yang berikut:',0,1);//end of line
$pdf->Cell(12 ,5,'' ,0,0);
$pdf->Cell(10	,5,'',0,0,'L');
$pdf->Cell(10	,5,'',0,1,'L');

// $pdf->Cell(59	,5,'Hang Tuah Jaya,',0,1);
// $pdf->Cell(130	,5,'76100 Durian Tunggal,',0,0);

$pdf->SetFont('Arial','',12);//step 3 Bold and Underline
$pdf->Cell(12 ,5,'' ,0,1);//untuk menjarakkan kebawah
$pdf->Cell(12 ,5,'' ,0,0);
$pdf->Cell(30	,5,'Tarikh ',0,0,'L');//data eventdate
$pdf->Cell(3 ,5,':',0,0);
$pdf->Cell(30	,5, date("d/m/y", strtotime($row['eventdate'])),0,1,'L');
$pdf->Cell(12 ,5,'' ,0,0);
$pdf->Cell(30	,5,'Tempat ',0,0,'L');//data place
$pdf->Cell(3 ,5,':' ,0,0);
$pdf->Cell(30	,5,$row['place'],0,1,'L');
$pdf->Cell(12 ,5,'' ,0,0);
$pdf->Cell(30	,5,'Anjuran ',0,0,'L');//data club_id
$pdf->Cell(3 ,5,':' ,0,0);
$pdf->Cell(30	,5,$row['club_id'],0,1,'L');//join table get club name
$pdf->Cell(12 ,5,'' ,0,0);
$pdf->Cell(30	,5,'Penglibatan ',0,0,'L');//data scope
$pdf->Cell(3 ,5,':' ,0,0);
$pdf->Cell(30	,5,'Pelajar FTMK',0,1,'L');


$pdf->SetFont('Arial','',12);//step 2
$pdf->Cell(12 ,5,'' ,0,1);//untuk menjarakkan kebawah
$pdf->Cell(12 ,5,'3.' ,0,0);
$pdf->MultiCell(165,5,'Program ini bertujuan bagi '.$row['description'],0,1);//end of line
// $pdf->Cell(135,5,'',0,1);//data description
$pdf->Cell(10	,5,'',0,0,'L');
$pdf->Cell(10	,5,'',0,0,'L');

// $pdf->Cell(100	,15,'TITLE: ITEM TRANSACTION INFORMATION REPORT' ,1,1,'L');
// date_default_timezone_set('Asia/Kuala_Lumpur');
$pdf->Cell(34	,5, '',0,0);
// $pdf->SetFont('Arial','',12);
// $pdf->Cell(60	,-50,'This Report is refer from Date:' ,0,0);
// $pdf->Cell(25	,-50,$start,0,0);
// $pdf->Cell(5	,-50,'-' ,0,0);
// $pdf->Cell(10	,-50,$end ,0,1);

//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(187	,17,'',0,0);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(187,17,'',0,1);//end of line
$pdf->Cell(187,17,'',0,1);
$pdf->Cell(187,17,'',0,1);
$pdf->Cell(187,17,'',0,1);
// $pdf->Cell(187,13,'',0,1);

//invoice contents
// $pdf->SetFont('Arial','B',10);
//
// $pdf->Cell(100	,5,'Item Name',1,0);
// $pdf->Cell(25	,5,'Category',1,0);
// $pdf->Cell(17	,5,'Add QTY',1,0);
// $pdf->Cell(23	,5,'Deduct QTY',1,0);
// $pdf->Cell(20	,5,'Date',1,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(12 ,5,'' ,0,1);//untuk menjarakkan kebawah
$pdf->Cell(57,5,'"Berkhidmat untuk pelajar"',0,1);//end of line
$pdf->Cell(12 ,5,'' ,0,1);



$pdf->SetFont('Arial','',12);//step 2
$pdf->Cell(12 ,5,'' ,0,1);//untuk menjarakkan kebawah
$pdf->Cell(57,5,'Yang menjalankan tugas,',0,0);//end of line
$pdf->Cell(10	,5,'',0,0,'L');
$pdf->Cell(10	,5,'',0,1,'L');

$pdf->SetFont('Arial','',12);//step 2
$pdf->Cell(12 ,5,'' ,0,1);//untuk menjarakkan kebawah
$pdf->Cell(100,5,$row['name'],0,0);//data nama
$pdf->Cell(10	,5,'',0,0,'L');
$pdf->Cell(10	,5,'',0,1,'L');
// $pdf->SetFont('Arial','',10);

$pdf->SetFont('Arial','',12);//step 2
$pdf->Cell(12 ,5,'' ,0,1);//untuk menjarakkan kebawah
if($row['club_id'] == 'BITD')
{
$pdf->Cell(100,5,'Pengerusi Kelab Pengkalan Data (DMC).',0,0);//data club id
}
else if($row['club_id'] == 'BITS')
{
  $pdf->Cell(100,5,'Pengerusi Kelab Pembangunan Perisian (SDC).',0,0);//data club id
}
$pdf->Cell(10	,5,'',0,0,'L');
$pdf->Cell(10	,5,'',0,0,'L');
//Numbers are right-aligned so we give 'R' after new line parameter

//items
//display the items
// if(mysqli_num_rows($query) > 0 )
// {
// while($row = mysqli_fetch_assoc($query)){
//
//
// 	$pdf->Cell(100	,5,$row['item_name'],1,0);
// 	$pdf->Cell(25	,5,$row['category'],1,0);
// 	$pdf->Cell(17	,5,$row['add_quantity'],1,0);
// 	$pdf->Cell(23	,5,$row['deduct_quantity'],1,0);
// 	$pdf->Cell(20	,5,$row['date'],1,1);//end of line
// 	//accumulate tax and amount
// }}
//
//
//  $sql = "SELECT COUNT(1) FROM transaction Where date Between '$start' and '$end' ORDER BY date ";
// $result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_array($result);
// $total=$row[0];
//
// $pdf->SetFont('Arial','',12);
// $pdf->Cell(40	,15,'Total Transaction is:' ,0,0);
// $pdf->Cell(25	,15,$total,0,0);


$pdf->Output();

?>
