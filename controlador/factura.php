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
	$this->SetFillColor( 145, 137, 135 );
	
	$this->Cell(38,6,'Numero de orden',1,0,'C',true);
	$this->Cell(43,6,'fecha de la orden',1,0,'C',true);
	$this->Cell(43,6,'DUI',1,0,'C',true);
	$this->Cell(60,6,'NIT',1,0,'C',true);
	$this->Ln(6);
	
	$this->SetFont('Arial','B',11);
	$this->SetFillColor( 222, 213, 211 );
	$this->Cell(38,6,'Numero de orden',1,0,'C',true);
	$this->Cell(43,6,'fecha de la orden',1,0,'C',true);
	$this->Cell(43,6,'DUI',1,0,'C',true);
	$this->Cell(60,6,'NIT',1,0,'C',true);
	$this->Ln(15);
	
	//encabezado del cuerpo de la facturaa
	$this->SetFont('Arial','B',11);
	$this->SetFillColor( 145, 137, 135 );
	
	$this->Cell(25,6,'Codigo',1,0,'C',true);
	$this->Cell(51,6,'Producto',1,0,'C',true);
	$this->Cell(43,6,'Precio',1,0,'C',true);
	$this->Cell(25,6,'Cantidad',1,0,'C',true);
	$this->Cell(40,6,'Total',1,0,'C',true);
	$this->Ln(6);
	
}
//utf8_decode()
// Pie de página
function Footer()
{
	//posicion 10 cm arriba del final
	$this->SetY(-100);
	//metodo de pago
	$this->SetFont('Arial','B',11);
	$this->SetFillColor( 145, 137, 135 );
	$this->Cell(90,6,'Metodo de Pago',1,0,'',true);
	$this->Cell(8,6,'',0,0,'C');
	$this->Cell(90,6,'Subtotal',1,0,'L',true);
	$this->Ln(6);
	$this->Cell(90,6,'Envio',1,0,'',true);
	$this->Cell(8,6,'',0,0,'C');
	$this->Cell(90,6,'IVA 13%',1,0,'L',true);
	$this->Ln(6);
	$this->Cell(90,6,'',0,0,'');
	$this->Cell(8,6,'',0,0,'C');
	$this->Cell(90,6,'Costo de envio',1,0,'L',true);
	$this->Ln(6);
	$this->Cell(90,6,'',0,0,'');
	$this->Cell(8,6,'',0,0,'C');
	$this->Cell(90,6,'Total',1,0,'L',true);
	
	
	
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetFont('Arial','B',11);
$pdf->SetFillColor( 222, 213, 211 );
$pdf->Cell(25,6,'001',1,0,'C',true);
$pdf->Cell(51,6,'Memoria USB 32 gb',1,0,'C',true);
$pdf->Cell(43,6,'$5.95',1,0,'C',true);
$pdf->Cell(25,6,'2',1,0,'C',true);
$pdf->Cell(40,6,'$11.90',1,0,'C',true);
$pdf->Ln(10);
$pdf->Output();
?>