<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpando e validando o nome
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validando o email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Limpando e validando a mensagem
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Verifica se todos os campos foram preenchidos e são válidos
    if ($name && $email && $message) {
        // Enviar o email ou processar os dados
        $to = 'techinova73@gmail.com';
        $subject = 'Novo contato de ' . $name;
        $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo 'Mensagem enviada com sucesso!';
        } else {
            echo 'Erro ao enviar a mensagem.';
        }
    } else {
        echo 'Por favor, preencha todos os campos corretamente.';
    }
}

