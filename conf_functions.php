<?php

function redirect($url){
	echo "<script language='javascript'>window.location.href='".$url."'</script>";
}
//fungsi keamanan untuk menghindari sql injection pada form login
function sc($value)
	{
		 $value = trim($value);
		 
		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		
		$value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));
		
		$value = strip_tags($value);
		$value = mysql_real_escape_string($value);
		$value = htmlspecialchars ($value);
		return $value;	
	}
//fungsi untuk login ke dalam system
function login(){
        global $username,$passwd;
        $nama=sc($username);
        $passwd=sc($passwd);
        $url="index.php";
        $url_user="home.php";
        $url_cust="accent/index.php";
    
                $query_cekuser = "    SELECT 	idpengguna, username, status
                                      FROM  	log_akses
                                      WHERE 	status ='1' 
                                      AND 	username ='$nama' 
                                      ";
                $rs_cekuser=querydb($query_cekuser);
                
                if (mysql_num_rows($rs_cekuser) < 0 ) 				
                        {
                            echo "<script type ='text/javascript'>alert('Login Gagal, User Anda Sedang Aktif Login Pada Sistem!. Hubungi Admin Sistem');</script>"; 
                            redirect($url."");
                        }
                        else
                        {
                            $query_login="    SELECT    aksesuser_id AS idpengguna,
                                                        aksesuser_login AS username,
                                                        aksesuser_hakakses AS hakakses,
                                                        aksesuser_status AS statusdata 
                                              FROM  	master_aksesuser 
                                              WHERE 	aksesuser_status = '1'  
                                              AND 	aksesuser_login = '$nama' 
                                              AND 	aksesuser_password ='".($passwd)."' ";
                            //echo $query_login;
                            $rs_login=querydb($query_login);		
                            if (mysql_num_rows($rs_login)>0) 				
                                    {
                                    $data_login=mysql_fetch_array($rs_login);
                                    $_SESSION['idpengguna']=$data_login['idpengguna'];
                                    $_SESSION['username']=$data_login['username'];
                                    $_SESSION['hakakses']  =$data_login['hakakses'];
                                    $_SESSION['statusdata']  =$data_login['statusdata'];
                                    $_SESSION['username']= $username;
                                    $jam = date("H:i:s");
                                    $tgl = date("Y-m-d");
                                    if ($_SESSION['hakakses'] == 3){
                                        redirect($url_cust."");
                                    }

                                    redirect($url_user."");
                                    //merekam aktifitas login dengan status sukses
                                    querydb("INSERT INTO log_akses(idpengguna,username,datelogin,timelogin,timelogout,status)
                                            VALUES('$_SESSION[idpengguna]','$_SESSION[username]','$tgl','$jam','','1')");
                                    
                                    }	
                                    else
                                    {
                                    unset($_SESSION['idpengguna']);
                                    unset($_SESSION['username']);
                                    unset($_SESSION['statusdata']);
                                    unset($_SESSION['hakakses']);
                                    echo "<script type ='text/javascript'>alert('Login Gagal, Pastikan User Anda Sudah Aktif!. Hubungi Help Desk Jika Ada Pertanyaan');</script>"; 
                                    redirect($url."");
                                    }
                        }
    }
?>