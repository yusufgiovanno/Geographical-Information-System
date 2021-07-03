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

	if ($username == "") 
	{
			echo "<script type ='text/javascript'> alert('Login Gagal, Isikan Username dan Password Dengan Benar !!!');</script>";
			redirect($url."");
	}
	else
	{
			login();
	}
?>