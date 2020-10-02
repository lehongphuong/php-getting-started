<?php
    // header("Access-Control-Allow-Origin: *");
	// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	// header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization, X-Auth-Token');
	// header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');
	// header('Content-Type: text/html; charset=utf-8'); 
	
    // mysql
    // $servername = "localhost";  
    // $username = "root";
    // $password = "root";
    // $dbname = "tool"; 

    // postgres
    $servername = "ec2-18-211-86-133.compute-1.amazonaws.com";  
    $username = "rhqgodplucnlwz";
    $password = "d836ce9406c34f5daf08d39e004c2b198eb997a79d0940b5495c7b8394efad6f";
    $dbname = "ddq87nqpej3h78"; 
    
    // $conn = new mysqli($servername, $username, $password, $dbname);
    $conn = pg_connect("host=ec2-18-211-86-133.compute-1.amazonaws.com port=5432 dbname=ddq87nqpej3h78 user=rhqgodplucnlwz password=d836ce9406c34f5daf08d39e004c2b198eb997a79d0940b5495c7b8394efad6f"); 
	
	if (!$conn) {
		echo "An error occurred.\n";
		exit;
	}
	
    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } 
    // mysqli_set_charset($conn,"utf8"); 

?> 