<?php
	require_once('conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(nome, email, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

?>