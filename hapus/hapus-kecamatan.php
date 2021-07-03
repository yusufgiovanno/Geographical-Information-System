<?php

require_once("connection.php");

$id = $_GET["id"];

$sql = "update master_kecamatan set kecamatan_status = 2 where kecamatan_id =" . $id;

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