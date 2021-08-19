<?php 

include ("fpdf/fpdf.php");
require 'cone.php';
$consulta = "SELECT * FROM paciente";
$resultado = $mysqli->query($consulta);


$pdf= new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial", "B",20);

$pdf->Cell(100 , 10, "Reporte de Personas", 0, 1, "C");

$pdf->Ln(6);
$pdf->SetFont("Arial", "B", 10);

##$pdf->Cell(10 , 5, "Id", 1, 0, "C");
$pdf->Cell(20 , 5, "Nombres", 1, 0, "C");
$pdf->Cell(20 , 5, "Apellidos", 1, 0, "C");
$pdf->Cell(10 , 5, "Edad", 1, 0, "C");
$pdf->Cell(20 , 5, "Direccion", 1, 0, "C");
$pdf->Cell(20 , 5, "Telefono", 1, 0, "C");
$pdf->Cell(20 , 5, "Ocupacion", 1, 0, "C");
$pdf->Cell(20 , 5, "Genero", 1, 1, "C");

$pdf->SetFont("Arial", "", 9);


while ($fila = $resultado->fetch_assoc()){
  ##  $pdf->Cell(10 , 5, $fila['id_paciente'], 1, 0, 'C');
    $pdf->Cell(20 , 5, $fila['nombres_paciente'], 1, 0, 'C');
    $pdf->Cell(20 , 5, $fila['apellidos_paciente'], 1, 0, 'C');
    $pdf->Cell(10 , 5, $fila['edad_paciente'], 1, 0, 'C');
    $pdf->Cell(20 , 5, $fila['direccion_paciente'], 1, 0, 'C');
    $pdf->Cell(20 , 5, $fila['telefono_paciente'], 1, 0, 'C');
    $pdf->Cell(20 , 5, $fila['ocupacion_paciente'], 1, 0, 'C');
    $pdf->Cell(20 , 5, $fila['genero_paciente'], 1, 1, 'C');
}
$pdf->Output();

?>