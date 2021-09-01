<?php
$servidor = 'localhost';
$banco = 'impactajovem';
$usuario = 'impactajovem';
$senha = 'ALTlettuce#753!';

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conn)
{
echo "erro ao conectar ao banco de dados!";exit();
}
?>