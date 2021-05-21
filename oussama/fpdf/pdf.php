<?php
require('fpdf.php');
$db= new PDO('mysql:host=localhost;dbname=produit', 'root', '');
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
		$this->Cell(30,10,'idProduit',1,0,'C');
		$this->Cell(30,10,'IdCategorie',1,0,'C');
		$this->Cell(30,10,'prix',1,0,'C');
		$this->Cell(30,10,'image',1,0,'C');
		$this->Cell(30,10,'quantite',1,0,'C');
		$this->Cell(30,10,'titre',1,0,'C');
		$this->Cell(30,10,'description',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Times','B',12);
		$stmt=$db->query('select * from  produit');
		while($data=$stmt->fetch(PDO::FETCH_OBJ)){
		$this->Cell(30,10,$data->idProduit,1,0,'C');
		$this->Cell(30,10,$data->IdCategorie,1,0,'L');
		$this->Cell(30,10,$data->prix,1,0,'L');
		$this->Cell(30,10,$data->image,1,0,'L');
		$this->Cell(30,10,$data->quantite,1,0,'L');
		$this->Cell(30,10,$data->titre,1,0,'L');
		$this->Cell(30,10,$data->description,1,0,'L');
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