<?php
require('fpdf.php');
$db= new PDO('mysql:host=localhost;dbname=comments', 'root', '');
class myPDF extends FPDF {
	function header(){
		$this->Image('logo.png',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'Review Doc ',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		$this->Cell(276,10,'Review List',0,0,'C');
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
		$this->Cell(60,10,'Name',1,0,'C');
		$this->Cell(60,10,'Email',1,0,'C');
		$this->Cell(60,10,'Content',1,0,'C');
		$this->Cell(50,10,'Rate',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Times','B',12);
		$stmt=$db->query('select * from  reviews');
		while($data=$stmt->fetch(PDO::FETCH_OBJ)){
		$this->Cell(20,10,$data->id,1,0,'C');
		$this->Cell(60,10,$data->name,1,0,'L');
		$this->Cell(60,10,$data->email,1,0,'L');
		$this->Cell(60,10,$data->content,1,0,'L');
		$this->Cell(50,10,$data->rate,1,0,'L');
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