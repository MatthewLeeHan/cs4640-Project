<?php


// try commenting out the header setting to experiment how the back end refuses the request
header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');

// $data = (int) $_SERVER['CONTENT_LENGTH']; 


// retrieve data from the request
$postdata = file_get_contents("php://input");
require('./php/connect-db.php');

// process data 
// (this example simply extracts the data and restructures them back) 
$request = json_decode($postdata);

$data = [];
foreach ($request as $k => $v)
{
  $data[0][$k] = $v;
}

$name = $data[0]['name'];
$email = $data[0]['email'];
$phone = $data[0]['phone'];
$bodytext = $data[0]['bodytext'];
$help_option = $data[0]['help_option'];

$query = "INSERT INTO feedback VALUES(:name, :email, :phone, :bodytext, :help_option)";
$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':email', $email);  
$statement->bindValue(':phone', $phone);
$statement->bindValue(':bodytext', $bodytext);
$statement->bindValue(':help_option', $help_option);
$statement->execute();
$statement->closeCursor();

// sent response (in json format) back to the front end
echo json_encode(['content'=>$data]);

?>