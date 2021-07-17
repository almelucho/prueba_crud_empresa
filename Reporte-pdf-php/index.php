<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte activo',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(100, 10, 'Fecha creacion', 1, 0, 'C', 0);
    $this->Cell(45, 10, 'Empresa ID', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexion.php';

$consulta = "SELECT * FROM `empresa` ORDER BY `fecha_creacion` ASC";
$resultado = $mysqli->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(100, 10, $row['fecha_creacion'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['idempresa'], 1, 1, 'C', 0);
    
}



$pdf->Output();
?>

