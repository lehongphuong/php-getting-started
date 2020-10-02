<?php
/**
 * @author vinasupport.com
 */
// connect to a database  
$dbConn = pg_connect("host=ec2-18-211-86-133.compute-1.amazonaws.com dbname=ddq87nqpej3h78 user=rhqgodplucnlwz password=d836ce9406c34f5daf08d39e004c2b198eb997a79d0940b5495c7b8394efad6f");
if (!$dbConn) {
    echo "An error occurred.\n";
    exit;
}
// Query data
$result = pg_query($dbConn, 'SELECT * FROM a1crud_project ORDER BY id');
echo json_encode($result); 
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
// Show value
while ($row = pg_fetch_assoc($result)) {
    var_dump($row);
}