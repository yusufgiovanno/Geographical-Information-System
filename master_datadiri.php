<?php
	include "conf_header.php";
    opendb();
    session_start();
	$action=$_POST['action'];
	$e='Edit';

	$gidmode=$_SESSION['idpengguna'];
	$gusrkode=$_GET['usrkode'];

	$pengguna_nama = $_SESSION['username'];

	date_default_timezone_set('Asia/Jakarta');
    $datetransaksi = date("Ymd");
    $jam = date("His");  
    $datecreated = date("Y-m-d");
    $dateupdated = date("Y-m-d");
    $timecreated = date("h:i:sa");
    $tahun = date("Y"); 
	$kodetransaksi = $datetransaksi.$jam;
	
	$url="master_datadiri.php";
	$url_reject="conf_logout.php";

    $aksesuser_login=$_POST['aksesuser_login'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $kota_kelahiran=$_POST['kota_kelahiran'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $no_tlp=$_POST['no_tlp'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $aksesuser_password=$_POST['aksesuser_password'];
    
	
?>

<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
            <div class="brand flex-column-auto " id="kt_brand">
                <a href="home.php" class="brand-logo">
                    <img alt="Logo" src="images/logo.png" width="65px" />
                </a>
                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                    <span class="svg-icon svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                    fill="#000000" fill-rule="nonzero"
                                    transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                <path
                                    d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                    transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </button>
            </div>
            <!--struktur menu pindah ke file ini untuk mempermudah proses pemmbuatan menu-->
            <?php include "conf_leftmenu.php"?>
            <!--struktur menu bagian header pindah ke file ini untuk mempermudah proses pemmbuatan menu-->
            <?php  include "conf_headermenu.php"?>

            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class=" container ">
                    <!--Form Master Kelurahan-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Form Master Data Management : Master Data Diri
                                    </h3>
                                    <div class="card-toolbar">
                                        <div <?php echo 'style="display:none"'?>
                                            class="example-tools justify-content-center">
                                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- database dikirim -->
                                <?php
                                   if ($action == 'Simpan Data')
                                   {
                                       $query = "  SELECT max(aksesuser_id) 
                                                   FROM master_aksesuser
                                               ";
                                       $result = mysql_query($query);
                                       $data = mysql_fetch_array($result);
                                       $maxid =($data[0]+1);
                                       $max =(int)$maxid;
                                       
                                       $query_input = " INSERT INTO master_aksesuser VALUES (
                                                       '$max',
                                                       '$aksesuser_login',
                                                       '$nama_lengkap',
                                                       '$kota_kelahiran',
                                                       '$tanggal_lahir',
                                                       '$no_tlp',
                                                       '$email',
                                                       '$alamat',
                                                       '$gender',
                                                       '$aksesuser_password',
                                                       '2',
                                                       '0'
                                                       )";
                                       querydb($query_input);
                                       //$result = querydb($query_input);
                                       //or die(pg_last_error());
                                       //echo $query_input;
                                               echo "<script>
                                                     $(window).load(function(){
                                                       swal({
                                                       title: 'Data Master User Baru Berhasil Disimpan',
                                                       type: 'success',
                                                       },
                                                       function() {
                                                           window.location='$url';                                                        
                                                       });
                                                       });
                                                   </script>";
                                   }
                                    if ($e=='Edit')
								        {
                                        $query_edit= "  SELECT *
                                                        FROM master_aksesuser
                                                        WHERE aksesuser_id = '$gidmode' 
                                                        ";
                                        $rs_queryedit = querydb($query_edit);
                                        $data_queryedit = fetch($rs_queryedit);
                                        // echo $query_edit;
								        }
                                    if ($action == 'Edit Data')
                                        {
                                        $query_update = "   UPDATE master_aksesuser SET
                                                            aksesuser_login='$aksesuser_login',
                                                            nama_lengkap='$nama_lengkap'
                                                            kota_kelahiran='$kota_kelahiran'
                                                            tanggal_lahir='$tanggal_lahir'
                                                            no_tlp='$no_tlp'
                                                            email='$email'
                                                            alamat='$alamat'
                                                            gender='$gender'
                                                            aksesuser_password='$aksesuser_password
                                                            WHERE aksesuser_id = '$gidmode'
                                                            ";
                                        // echo "$query_update<hr>";
                                        querydb($query_update);
                                        echo "<script type ='text/javascript'>alert('Perubahan Data Berhasil Disimpan');</script>";	
                                        redirect($url."");
                                        }
                                    if ($e == 'nonaktif')
                                            {
                                            $query_update = "   UPDATE master_aksesuser SET
                                                                aksesuser_status='0'
                                                                WHERE aksesuser_id = '$gidmode' ";
                                            //echo $query_update;
                                            querydb($query_update);
                                            echo "<script type ='text/javascript'>alert('User Berhasil Dinonaktifkan');</script>";	
                                            redirect($url."");
                                            }
                                    if ($e == 'aktivasi')
                                            {
                                            $query_update = "   UPDATE master_aksesuser SET
                                                                aksesuser_status='1'
                                                                WHERE aksesuser_id = '$gidmode' ";
                                            //echo $query_update;
                                            querydb($query_update);
                                            echo "<script type ='text/javascript'>alert('User Berhasil Diaktifkan');</script>";	
                                            redirect($url."");
                                            }
                                        ?>
                                <!-- database end -->
                                <!--begin::Form-->
                                <form class="form" action="" method="post" name="frmmasteruser">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Foto Diri:</label>
                                            <input type="text" class="form-control form-control-solid" name="foto"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['foto']:'') ?>" required />
                                            <span class="form-text text-muted">Foto</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Aksesuser Login:</label>
                                            <input type="text" class="form-control form-control-solid"
                                                name="aksesuser_login"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['aksesuser_login']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Username</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Lengkap:</label>
                                            <input type="text" class="form-control form-control-solid"
                                                name="nama_lengkap"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['nama_lengkap']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Nama Lengkap</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Kota Kelahiran:</label>
                                            <input type="text" class="form-control form-control-solid"
                                                name="kota_kelahiran"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['kota_kelahiran']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Kota Kelahiran</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir:</label>
                                            <input type="date" class="form-control form-control-solid"
                                                name="tanggal_lahir"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['tanggal_lahir']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Tanggal Lahir</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Telepon:</label>
                                            <input type="text" class="form-control form-control-solid" name="no_tlp"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['no_tlp']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Nomor Telepon</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" class="form-control form-control-solid" name="email"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['email']:'') ?>" required />
                                            <span class="form-text text-muted">Alamat Email</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat:</label>
                                            <div class="input-group-prepend"><span class="input-group-text">Jalan</span>
                                                <input type="text" class="form-control form-control-solid" name="alamat"
                                                    value="<?=(($e == 'Edit') ? $data_queryedit['alamat']:'') ?>" />
                                            </div>
                                        </div>

                                        <label>Gender:</label><br>
                                        <div class="form-group container">
                                            <label class="form-check-label" for="radio1">
                                                <input type="radio" class="form-check-input" id="radio1" name="gender"
                                                    value="L"
                                                    <?=(($e == 'Edit' && $data_queryedit['gender'] == 'L') ? "checked":'') ?> />Laki
                                                Laki
                                        </div>

                                        <div class="form-group container">
                                            <label class="form-check-label" for="radio2">
                                                <input type="radio" class="form-check-input" id="radio2" name="gender"
                                                    value="P"
                                                    <?=(($e == 'Edit' && $data_queryedit['gender'] == 'P') ? "checked":'') ?> />Perempuan
                                        </div>


                                        <div class="form-group">
                                            <label>Aksesuser Password:</label>
                                            <input type="password" class="form-control form-control-solid"
                                                name="aksesuser_password"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['aksesuser_password']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Password</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Aksesuser Confirm Password:</label>
                                            <input type="password" class="form-control form-control-solid"
                                                name="aksesuser_password"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['aksesuser_password']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Confirm Password</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="action" id="action"
                                            value="<?=($e == 'Edit' ? 'Edit Data':'Simpan Data') ?>"
                                            class="btn btn-primary mr-2">Simpan Data</button>
                                        <button type="reset" value="Reset" <?php echo "onclick=\"
                                            javascript:window.location='$url' \"" ; ?> class="btn
                                            btn-secondary">Batal</button>
                                    </div>
                                </form>
                                <!--END FORM-->
                            </div>
                            <!--END CARD-->
                        </div>
                    </div>
                    <!--END Form-->

                </div>
                <!--END CONTAINER-->
            </div>
        </div>

        <?php include "conf_footerheader.php" ?>

        <?php include "conf_rightstickymenu.php"?>

        <?php include "conf_footer.php"?>