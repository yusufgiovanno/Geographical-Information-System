<?php

require('connection.php');

$id = $_GET["id"];

$sql = "update master_transaksi set transaksi_status = 2 where transaksi_id =" . $id;

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