<?php
$mysqli = new mysqli("localhost", "root", "root", "test");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT * FROM users");

// echo "Reverse order...\n";
// for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
//     $res->data_seek($row_no);
//     $row = $res->fetch_assoc();
//     echo " id = " . $row['id'] . "\n";
// }

// echo "Result set order...\n";
// $res->data_seek(0);
// while ($row = $res->fetch_assoc()) {
//     echo " id = " . $row['name'] . "\n";
// }

// $json = array();
// while($row = $res->fetch_assoc()) {
//   $json[]['idusers'] = $row['idusers'];
//   $json[]['name'] = $row['name'];
// }

$json = array();
while($row = $res->fetch_assoc()) {
	$val = array();
  $val['idusers'] = $row['idusers'];
  $val['name'] = $row['name'];
  $json[][] = $val;
}


// $json = $res->fetch_all( MYSQLI_ASSOC );

// while ( $row = $res->fetch_assoc() ){
//     $json[] = json_encode($row);
// }

header('Content-Type: application/json');
echo json_encode($json);
?>