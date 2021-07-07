<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail enviado</title>
</head>
<body>

<h2> Email enviado com sucesso!</h2>

<?php 
$Nome = $_GET [ 'Nome' ];
$EMAIL = $_GET [ 'EMAIL' ];
$messagem = $_GET [ 'messagem' ];

$to = " luizesiquivel@gmail.com ";
$subject = "Contato - ImpactaJovemBrasil";
$body = "Nome: " .$Nome. "\r\n".
         "Email: " .$email. "\r\n".
         "Mensagem: " .$messagem;
         
$header = "From: ". $to. "\r\n".  "Reply-to: " .$email. "\r\n";

if (mail ( $to, $subject, $body, $header)) {
    echo ("Obrigado pelo contato, nosso time irá ler e lhe responder o mais rápido possivel");
} else {
    echo ("Desculpe, seu contato não pode ser computado, favor tente de novo mais tarde");
}

?>
</body>
</html>