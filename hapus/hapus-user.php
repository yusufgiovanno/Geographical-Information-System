<?php

require('connection.php');

$id = $_GET["id"];

$sql = "update master_aksesuser set aksesuser_status = 0 where aksesuser_id =" . $id;

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