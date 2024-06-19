<?php

$nome = $_POST["nome"];
$assunto = $_POST ["assunto"];
$mensagem = $_POST["mensagem"];
$remetente = $_POST["email"];


$destino = "marcosvcsantos2020@gmail.com";

$mensagemFormatada = nl2br(htmlspecialchars($mensagem));

$sucesso = mail($destino, $assunto, $mensagemFormatada);

if ($sucesso) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Erro ao enviar o e-mail";
}

?>
