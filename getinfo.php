<?php
require_once("data.php");

$id = $_GET['id'];
$data = new propertyData();

if (is_object($data)) $status = '200 OK';
$status_header = 'HTTP/1.1 $status';

header($status_header);
return json_encode( $data->getAll($id) );

?>