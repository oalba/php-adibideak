<?php
console.log("hello.php");

// $data = $_GET["name"];

$data = '{hello:hello}';

header('Content-Type: application/json');
echo json_encode($data);

?>
