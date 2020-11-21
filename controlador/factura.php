<?php
require('./pdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('./pdf/logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(150);
    // Título
    $this->Cell(30,10,'Factura',0,0,'R');
    // Salto de línea
    $this->Ln(10);
	$this->Cell(43,8,'Almacenes',0,0,'R');
	$this->Ln(20);
	//direccion
	$this->Ln(10);
	$this->SetFont('Arial','B',11);
	$this->Cell(43,8,'Direccion de entrega',0,0,'R');
	$this->Cell(133,8,'Direccion de facturacion',0,0,'R');
	$this->Ln(20);
	
	$this->SetFont('Arial','B',11);
	$this->Cell(38,6,'Numero de orden',1,0,'C');
	$this->Cell(43,6,'fecha de la orden',1,0,'C');
	$this->Cell(43,6,'DUI',1,0,'C');
	$this->Cell(60,6,'NIT',1,0,'C');
	$this->Ln(20);
}
//utf8_decode()
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
$pdf->Output();
?>