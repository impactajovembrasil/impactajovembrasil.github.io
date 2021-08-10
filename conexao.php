<?php

$host = "impactajovembrasil.database.windows.net";
$user = "impacta";
$pass = "cont@to2021";
$dbname = "contatoimpacta";
$port = 3306;

$conn = new PDO("sql:host=$host;port=$port;dbname=$dbname", $user, $pass);
?>