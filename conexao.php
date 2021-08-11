<?php

try {
    $conn = new PDO("sqlsrv:server = tcp:impactajovembrasil.database.windows.net,1433; Database = contatoimpacta", "impacta", "cont@to2021");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

try {
    $conn = new PDO("sqlsrv:server = tcp:impactajovembrasil.database.windows.net,1433; Database = contatoimpacta", "impacta", "cont@to2021");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>