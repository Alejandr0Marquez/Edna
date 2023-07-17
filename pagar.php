<?php
include("conexion.php");
$sql = mysqli_query($con, "SELECT * FROM productos");

$marca = $_POST['paquete'];
$modelo = $_POST['producto'];
$precio = $_POST['precio'];
require('../pagina-para-joyeria-con-parallax-master/fpdf/fpdf.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
while ($row = $sql->fetch_assoc()) {
    $pdf->MultiCell(160,10,strval('Paquete: '.$row['paquete'].'   '.'Producto: '.$row['producto'].'   '.'Precio: $ '.$row['precio']), 1, 'L');
 }
$pdfdoc = $pdf->Output("Doc","S");
$pdflisto = chunk_split(base64_encode($pdfdoc));

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'a21310380@ceti.mx';
    $mail->Password = 'Edna3312';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('a21310380@ceti.mx', 'Edna Ponce');
    $mail->addAddress('ednajaropo@gmail.com', 'Receptor');
    $mail->addCC('a21310257@ceti.mx');

    $mail->addStringAttachment($pdfdoc, 'Order.pdf');

    $mail->isHTML(true);
    $mail->Subject = 'Prueba desde GMAIL';
    $mail->Body = 'Hola buen dia!, <br/>Esta es tu orden<b>Hermose</b>.';
    $mail->send();

    echo 'Correo enviado';
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}

header("Location: http://localhost/pagina-para-joyeria-con-parallax-master/ofertas.php");
