<?php      
include "conf_config.php";
include "conf_dbconnect.php";
include "conf_functions.php";
opendb();
// Akses dengan parameter id => http://domain.com/filtertes.php?id=200
$filter = $_GET['id'];

$sql = ($filter)
        ? "SELECT * FROM master_transaksi WHERE id_jkategori LIKE '%$filter%'"
        : "SELECT * FROM kategori_tempat";
$query = querydb($sql);

header('Content-Type: Application/json');
$json['data'] = [];
while($data = mysql_fetch_assoc($query)) array_push($json['data'], $data);

echo json_encode($json);
?>