<?php
require_once("data.php");

$id = $_GET['id'];
$data = new propertyData();

if (is_object($data)) $status = '200 OK';
$status_header = 'HTTP/1.1 '.$status;

header($status_header);
echo json_encode( $data->getAll($id) );
echo json_encode( $data->getSwimmingPool($id)->getSwimmingPoolByPID() );
echo json_encode( $data->getHdbblock($id)->getHdbblockByPID() );

?>