<?php
include_once('conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$result_msg_contato = "SELECT * FROM `contato-impacta` INSERT INTO mensagens_contatos(nome, email, mensagem, created) VALUES ('$nome', '$email', '$mensagem', NOW())";

$resultado_msg_contato= mysqli_query($conn, $result_msg_contato);

?>

<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="fonts/airport/stylesheet.css">

    <style>
        .mensagem-enviada-container {
            display: flex;
            justify-content: center;
            height: 500px;
            align-items: center;
        }

        .mensagem-enviada {
            width: 400px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .mensagem-enviada button {
            background-color: #0d5900;
            border-color: #0d5900;
            padding: 0.5em 2.5em;
            padding-bottom: 0em;
            vertical-align: middle;
            cursor: pointer;
            border-radius: 0.25rem;
            border: 1px solid transparent;
        }

        .mensagem-enviada button:hover {
            background-color: black;
            border-color: black;
            color: white;
            transition: background-color .3s ease-in-out;
            transition: border-color .3s ease-in-out;
            transition: color .3s ease-in-out;
        }

        .mensagem-enviada button a {
            color: white;
            font-size: 1.5rem;
            line-height: 2;
            font-weight: 400;
            font-family: 'Bebas Neue';
        }

        .mensagem-enviada button a:hover {
            text-decoration: none;
            color: white;
        }
    </style>
	
</head>

<body>
<header>

<nav id="navpc" class="fixed-top" style="position: relative;">
	<!--  White Navbar  -->
	<nav id="whitenav" class="navbar navbar-expand-lg navbar-light"
		style="background-color: rgba(255, 255, 255, 0.8);">

		<div class="container" style="justify-content: center;">

			<a class="navbar-brand" href="https://impactajovembrasil.com">
				<img src="Imagens/Impacta/logo.png" class="d-inline-block align-top"><span
					class="blue">IMPACTAJOVEM</span><span class="yellow">BRASIL</span>
			</a>

		</div>
	</nav>
</nav>

<nav id="navmobile" class="fixed-top">

	<div class="logo" style="display: flex; justify-content: center;">
		<a href="https://impactajovembrasil.com">
			<img src="Imagens/Impacta/logo.png"
				style="left:20px; width: 45px; height: auto; padding-right: 10px;">
			<span style="color: #055673; font-size: 18px">IMPACTAJOVEM</span><span
				style="color: #daaa1b; font-size: 14px">BRASIL</span>
		</a>
	</div>
	<hr>
</nav>
<!--navmobile-->

</header>

<div class="mensagem-enviada-container">
<div class="mensagem-enviada">
	<h1> A Mensagem foi enviada!</h1>

	<button>
		<a href="contato.html">Voltar</a>
	</button>
</div>
</div>
</body>
</html>