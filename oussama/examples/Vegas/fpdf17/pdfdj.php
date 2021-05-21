<?php
require('fpdf.php');
$db= new PDO('mysql:host=localhost;dbname=centravel', 'root', '');
class myPDF extends FPDF {
	function header(){
		$this->Image('logo.png',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'Review Doc ',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		$this->Cell(276,10,' Delivery List',0,0,'C');
		$this->ln(20);



	}
	function footer(){
		$this->setY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,'Page'.$this->PageNO().'/{nb}',0,0,'C');


	}
	function headerTable(){
		$this->SetFont('Times','B',12);
		$this->Cell(20,10,'ID',1,0,'C');
		$this->Cell(60,10,'city',1,0,'C');
		$this->Cell(60,10,'description',1,0,'C');
		$this->Cell(60,10,'Image',1,0,'C');
		
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Times','B',12);
		$stmt=$db->query('select * from  product');
		while($data=$stmt->fetch(PDO::FETCH_OBJ)){
		$this->Cell(20,10,$data->id,1,0,'C');
		$this->Cell(60,10,$data->region,1,0,'L');
		$this->Cell(60,10,$data->city,1,0,'L');
		$this->Cell(60,10,$data->description,1,0,'L');
		$this->Ln();
		}

	}

}
$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->output();

?>