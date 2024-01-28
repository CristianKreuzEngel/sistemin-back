<?php
    $dbHost = 'localhost';
    $dbUsername = 'postgres';
    $dbPassword = 'masterkey';
    $dbName = 'baseDegustar';
    $dbPort = '5432';

    try {
        $conection = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName;user=$dbUsername;password=$dbPassword");

        echo "Conexão efetuada com sucesso";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
