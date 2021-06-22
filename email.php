<?php 

if(isset($_POST(['email']))) && !empty ($_POST (['email']))

$Name = addcslashes ( $_POST ( [ 'Nome' ]))
$email = addcslashes ( $_POST ( [ 'EMAIL' ]))
$message = addcslashes ( $_POST ( [ 'messagem' ]))

$to = " luizesiquivel@gmail.com ";
$subject = "Contato - ImpactaJovemBrasil";
$body = "Nome: " .$Name. "\r\n"
         "Email: " .$email. "\r\n"
         "Mensagem: " .$message;
         
$header = "From: ". "\r\n".  "Reply-to: " .$email. "\r\n"
"X=Mailer:php/". phpversion ();

if (mail ( $to, $subject, $body, $header)) {
    echo ("Email enviado!");
} else {
    echo("Email não pode ser enviado");
}


?>