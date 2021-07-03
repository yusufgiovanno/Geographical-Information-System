<?php

require_once("connection.php");

$id = $_GET["id"];

$sql = "update master_kelurahan set kelurahan_status = 2 where kelurahan_id =" . $id;

$mysqli->query($sql);

if(!$mysqli->error)
{
    echo "0";
}
else 
{
    print_r($_POST);
}


?>