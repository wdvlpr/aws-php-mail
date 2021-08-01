<?php
require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;

$mail->SMTPDebug = 3;

$mail->isSMTP();

$mail->Host = "nome_do_host_ses";

$mail->SMTPAuth = true;

$mail->Username = "username_credencial_ses";
$mail->Password = "password_credencial_ses";

$mail->SMTPSecure = "tls";

$mail->Port = 587;

$mail->From = "email_valido_no_ses@dominio.com";
$mail->FromName = "Nome Sobrenome";

$mail->addAddress("email_valido_no_ses@dominio.com","Nome Sobrenome");

$mail->isHTML(true);

$mail->Subject = "Envio de email pelo SES";
$mail->Body = "<b>Ola, Nome</b><br />Mensagem de teste.";

if(!$mail->send())
{
    echo "Error:".$mail->ErrorInfo;
} else {
    echo "Email enviado com sucesso.";
}