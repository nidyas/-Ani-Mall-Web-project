<?php 



    
    require("fpdf/fpdf.php");
    $db=new PDO('mysql:host=localhost;dbname=webdev', 'root', '');  
   
    class myPDF extends FPDF
    {
    	
    	function header()
    	{
    		$this->SetFont("Arial","B",14);
            $this->Ln(20);
            $this->Cell(5,5,"Liste des dresseurs",'C');
            $this->Ln(20);

    	}
    	function headertable()
    	{
    		$this->SetFont('Times','B',12);
    	//	$this->Cell(20,10,'Id cmd',1,0,'C');
    		$this->Cell(40,10,'Utilisateur',1,0,'C');
    		$this->Cell(40,10,'Titre',1,0,'C');
    		$this->Cell(30,10,'Contenu',1,0,'C');
            $this->Cell(60,10,'Date',1,0,'C');

    		$this->ln();
    	}
    	function viewsTable($db)
    	{ 
    		$this->SetFont('times','',12);
    		$stmt = $db->query("SElECT * From dresseur");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
    		   // $this->Cell(20,10,$data->ID,1,0,'C');
    		    $this->Cell(40,10,$data->nom,1,0,'L');
    		    $this->Cell(40,10,$data->prenom,1,0,'L');
    		    $this->Cell(30,10,$data->num_tel,1,0,'C');
                $this->Cell(60,10,$data->adresse,1,0,'C');

    		    $this->ln();
            }

    	}
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->Output("F","listecom.pdf");
    header('Location: listecom.pdf');


?>   