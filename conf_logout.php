<?php
session_start();
//$sesi=session_id();
//include "session.php";
include "conf_config.php";
include "conf_dbconnect.php";
include "conf_functions.php";

$username=$_POST['username'];
$passwd=$_POST['password'];

$url="index.php";

opendb();
		
        $jam = date("H:i:s");	
        $tgl = date("Y-m-d");	
		querydb ("	UPDATE log_akses 
					SET timelogout='$jam', datelogout='$tgl' ,status='2' 
					WHERE idpengguna = '$_SESSION[idpengguna]' AND status ='1' ");
					unset($_SESSION['idpengguna']);
					unset($_SESSION['username']);
					unset($_SESSION['statusdata']);
					unset($_SESSION['hakakses']);
		session_destroy();
		redirect($url."");



?>