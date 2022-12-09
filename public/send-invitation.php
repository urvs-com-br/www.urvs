<?php

$origin = "mail@urvs.com.br";
$destiny = $_POST["email"];
$subject = "Convite para participar do URVS";
$message = "Parabéns! Você foi convidado para participar do URVS.";
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
$headers .= "From: URVS <" . $origin . ">\n";
$headers .= "Reply-To: " . $origin . "\n";
$headers .= "Return-Path: URVS <" . $origin . ">\n";

if(mail($destiny, $subject, $message, $headers, "-r".$origin)) {
    echo "Enviado!";
} else {
    echo "Erro ao Enviar!";
}
