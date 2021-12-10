<?php
$json = file_get_contents('php://input');
$data = json_decode($json);
$data->Cry_of_the_soul = "Finally figured it out";
$data = json_encode($data);
echo $data;
?>