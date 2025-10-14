<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $mensagem = trim($_POST["mensagem"]);

    $to = "celestinogomes122@gmail.com";
    $subject = "Novo contato pelo site - Antónia Baltazar de Araújo";
    $body = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='contato.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar. Tente novamente.'); window.location.href='contato.html';</script>";
    }
}
?>
