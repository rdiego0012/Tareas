<?php 

include ("fpdf/fpdf.php");
require 'cone.php';
$consulta = "SELECT * FROM paciente";
$resultado = $mysqli->query($consulta);


$pdf= new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial", "B",16);

$pdf->Cell(100 , 5, "Reporte de Personas", 1, 1, "C");

$pdf->Ln(2);
$pdf->SetFont("Arial", "B", 9);

$pdf->Cell(10 , 5, "Id", 1, 0, "C");
$pdf->Cell(40 , 5, "Nombres", 1, 0, "C");
$pdf->Cell(40 , 5, "Apellidos", 1, 0, "C");
$pdf->Cell(10 , 5, "Edad", 1, 0, "C");
$pdf->Cell(40 , 5, "Direccion", 1, 0, "C");
$pdf->Cell(40 , 5, "Telefono", 1, 1, "C");

$pdf->SetFont("Arial", "", 9);


while ($fila = $resultado->fetch_assoc()){
    $pdf->Cell(10 , 5, $fila['id_paciente'], 1, 0, 'C',0);
    $pdf->Cell(40 , 5, $fila['nombres_paciente'], 1, 0, 'C',0);
    $pdf->Cell(40 , 5, $fila['apellidos_paciente'], 1, 0, 'C',0);
    $pdf->Cell(10 , 5, $fila['edad_paciente'], 1, 0, 'C',0);
    $pdf->Cell(40 , 5, $fila['direccion_paciente'], 1, 0, 'C',0);
    $pdf->Cell(40 , 5, $fila['telefono_paciente'], 1, 1, 'C',0);
}
$pdf->Output();

?>