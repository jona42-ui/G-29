<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","srms");

$sqlQuery = "SELECT assignmentID,usercode,marks FROM scores";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>