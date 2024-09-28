<?php
include 'remove.view.php'; #including  html file to get u name of contact to delete
try{


$pdo = new PDO(dsn:'mysql:host=localhost;dbname=contacts',username:'root',password:'123456');
}
catch(PDOException $e)
{
    echo $e->getMessage();
    exit;
}
if(!empty($_POST)){   #to check if user have entered a name
   $name = $_POST['name'];
   

   $queryy = "DELETE FROM contact  WHERE name ='$name'";  #a delete query to delete the data where is specified


$statement = $pdo->prepare($queryy);

$statement->execute();
header('Location: contacts.php'); # to redirect back to List of contact to check has contact deleted


exit;
}
include 'views.list.php'; # including view file to see list of contact  in remove contact page to get the name of contact to remove
?>