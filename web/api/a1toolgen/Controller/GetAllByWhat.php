<?php 
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); 
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization, X-Auth-Token'); 
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS'); 
header('Content-Type: text/html; charset=utf-8'); 
include "BaseConnection.php"; 
$data = json_decode($_GET['input']);  
$sql = ""; 

if (isset($data->what)) {  

	include "../Service/100project.php";
	include "../Service/200class.php";
	include "../Service/300crud.php";
	
    // echo $sql."<br>";  

    //excute sql 
	if ($sql != ""){
		$result = pg_query($conn, $sql);
		
		// echo json_encode($result); 
		
		// if (isset($result->num_rows) && ($result->num_rows > 0)) {
		if ($result) {
			// output data of each row 
			$data = array(); 
			
			// while ($row = $result->fetch_assoc()) {
			while ($row = pg_fetch_assoc($result)) {
				$data[] = $row;
			} 
			echo json_encode($data);
		} else { 
			echo "[]";
		}
	} 
}

$conn->close();

?>