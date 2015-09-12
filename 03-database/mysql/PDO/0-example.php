<?php
// PDO + MySQL
// http://www.phptherightway.com/#databases

$pdo = new PDO('mysql:host=localhost;dbname=todo', 'peru', 'peru');
$statement = $pdo->query("SELECT * FROM users");
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['email']);

//$result = $statement->fetchAll();
// //print_r($result);
//var_dump($result);

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);