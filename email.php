<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail enviado</title>
</head>
<body>
<?php 
if(isset($_POST(['email']))) && !empty ($_POST (['email'])) {

$Name = addcslashes ( $_GET ( [ 'Nome' ]))
$email = addcslashes ( $_GET ( [ 'EMAIL' ]))
$message = addcslashes ( $_GET ( [ 'messagem' ]))

$to = " luizesiquivel@gmail.com ";
$subject = "Contato - ImpactaJovemBrasil";
$body = "Nome: " .$Name. "\r\n"
         "Email: " .$email. "\r\n"
         "Mensagem: " .$message;
         
$header = "From: ". "\r\n".  "Reply-to: " .$email. "\r\n"
"X=Mailer:php/". phpversion (7.3.21);

if (mail ( $to, $subject, $body, $header)) {
    echo ("Email enviado!");
} else {
    echo("Email não pode ser enviado");
}
}
?>
</body>
</html>