<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "seu@email.com";
    $assunto = "Nova mensagem do formulário de contato";
    $mensagem_email = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";

    mail($destinatario, $assunto, $mensagem_email);

    header("Location: contact.html?success=true");
exit();

    exit();
}
?>
