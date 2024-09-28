<?php
include 'add.view.php';
try{


$pdo = new PDO(dsn:'mysql:host=localhost;dbname=contacts',username:'root',password:'123456'); #to connect database
}
catch(PDOException $e)
{
    echo $e->getMessage();
    exit;
}
if(!empty($_POST)){     #toccheck if user has entered
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];

$query = "INSERT INTO contact SET name='$name',phone = '$phone', email='$duedate'"; #creating a query to execute to add data into database

$statement = $pdo->prepare($query);

$statement->execute();
header('Location: contacts.php'); # to redirect back to   List page to see changes


exit;
}


?>