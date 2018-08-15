<?php



require 'pdf/fpdf/fpdf.php';


class PDF extends FPDF
{

  

   function Header()
   { 
        if($this->PageNo()==1){                          //     x   y    h   w
    $this->Image('assets/img/beca2.jpg',10 ,10 ,40 ,40 ,'JPG', '');
    $this->SetFont('Helvetica','B',14);

    $this->SetXY(80,10);
    $this->Cell(70, 10, 'PROGRAMA DE BECAS GREEN A.C', 0, 1, 'L');
    $this->SetXY(90,20);
    $this->Cell(70, 10, 'Solicitud de Aplicacion', 0, 1, 'C');
    $this->SetXY(60,40);
    $this->SetFont('Helvetica','',10);
    $this->MultiCell(120 ,5 ,'GSP Sede Morelos Local 3 y 4. entre Revolucion y Carranza Col.Centro, CP.23450 ,BCS, México. Tel:+52 (624) 105 098',0 ,'C' ,0);

    $this->Ln(20);
    }


   }





   function Footer()
   {
   $this->SetY(-15);
   $this->SetFont('Helvetica','I',8);
   $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');



   }





}




?>