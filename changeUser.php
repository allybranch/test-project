<?php


session_start(); 

if (!isset($_SESSION['user'])){
   $_SESSION['user'] = "not set";
}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');

// retrieve data from the request
$postdata = file_get_contents("php://input");

// Process data
// (this example simply extracts the data and restructures them back)

// Extract json format to PHP array
$request = json_decode($postdata);


$data = [];
foreach ($request as $k => $v)
{
  $temp = "$k => $v";
  $data[0][$k] = $v;
}

# Connect to the DB and update the account information
require('connectdb.php');
global $db;
$query = "UPDATE `users` SET `firstname` = :firstname, `lastname` = :lastname, `email` = :email WHERE `users`.`username` = :username";
$statement = $db->prepare($query);
$statement->bindValue(':firstname', $data[0]['firstname']);
$statement->bindValue(':lastname', $data[0]['lastname']);
$statement->bindValue(':email', $data[0]['email']);
$statement->bindValue(':username', $data[0]['username']);
$statement->execute();
$results = $statement->fetchAll();
$statement->closecursor();
$count = $statement->rowCount();


echo json_encode(['data'=>$postdata, 'count'=>$count]);

// 
?>