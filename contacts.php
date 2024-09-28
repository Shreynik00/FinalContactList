<?php

try{


$pdo = new PDO(dsn:'mysql:host=localhost; dbname=contacts',username:'root',password:'123456');# to connect with dqatabase
}
catch(PDOException $e) # to catch the exception
{
    echo $e->getMessage();
    exit;
}

$query = 'SELECT * FROM contact'; # creating a query to get all data from database from contact table

$statement = $pdo->prepare($query); 

$statement->execute();

$rows = $statement->fetchAll();
include 'index.template.php';  
?>