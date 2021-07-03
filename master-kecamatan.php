<?php
	include "conf_header.php";
    opendb();
    session_start();

	$action=$_POST['action'];
	$e=$_GET['e'];

	$gidmode=$_GET['idmode'];
	$gkeckode=$_GET['keckode'];

	$pengguna_nama = $_SESSION['username'];

	date_default_timezone_set('Asia/Jakarta');
    $datetransaksi = date("Ymd");
    $jam = date("His");  
    $datecreated = date("Y-m-d");
    $dateupdated = date("Y-m-d");
    $timecreated = date("h:i:sa");
    $tahun = date("Y"); 
	$kodetransaksi = $datetransaksi.$jam;
	
	$url="master-kecamatan.php";
	$url_reject="conf_logout.php";

	$kecamatan_kode=$_POST['kecamatan_kode'];
	$kecamatan_nama=$_POST['kecamatan_nama']; 
	$kecamatan_alamat=$_POST['kecamatan_alamat']; 
	
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
            <?php  include "conf_leftmenu.php"?>
            <!--struktur menu bagian header pindah ke file ini untuk mempermudah proses pemmbuatan menu-->
            <?php  include "conf_headermenu.php"?>

            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class=" container ">
                    <!--Form Master Kecamatan-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Form Master Data Management : Master Kecamatan
                                    </h3>
                                    <div class="card-toolbar">
                                        <div
                                            <?php echo 'style="display:none"'?>class="example-tools justify-content-center">
                                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- database dikirim -->
                                <?php
                                   if ($action == 'Simpan Data')
                                   {
                                       $query = "  SELECT max(kecamatan_id) 
                                                   FROM master_kecamatan
                                                   WHERE usercreated = '$pengguna_nama'
                                               ";
                                       $result = mysql_query($query);
                                       $data = mysql_fetch_array($result);
                                       $maxid =($data[0]+1);
                                       $max =(int)$maxid;
                                       
                                       $query_input = " INSERT INTO master_kecamatan VALUES (
                                                       '$max',
                                                       '$kecamatan_kode',
                                                       '$kecamatan_nama',
                                                       '$kecamatan_alamat',
                                                       '1',
                                                       '$datecreated',
                                                       '$dateupdated',
                                                       '$pengguna_nama',
                                                       '$pengguna_nama'
                                                       )";
                                       querydb($query_input);
                                       //$result = querydb($query_input);
                                       //or die(pg_last_error());
                                       //echo $query_input;
                                               echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script><script type ='text/javascript'>
                                       
                                       Swal.fire({
                                        title: 'Pesan',
                                        text: 'Berhasil menambah data !',
                                        icon: 'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText: 'Ok'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            
                                            window.location.href = 'master-kecamatan.php';

                                        }
                                    })</script>";
                                   }
                                    if ($e=='Edit')
								        {
                                        $query_edit= "  SELECT kecamatan_kode, kecamatan_nama, kecamatan_alamat, kecamatan_status 
                                                        FROM master_kecamatan
                                                        WHERE kecamatan_id = '$gidmode' 
                                                        ";
                                        $rs_queryedit = querydb($query_edit);
                                        $data_queryedit = fetch($rs_queryedit);
                                        // echo $query_edit;
								        }
                                    if ($action == 'Edit Data')
                                        {
                                        $query_update = "   UPDATE master_kecamatan SET
                                                            kecamatan_nama='$kecamatan_nama',
                                                            kecamatan_alamat='$kecamatan_alamat'
                                                            WHERE kecamatan_id = '$gidmode'
                                                            ";
                                        // echo "$query_update<hr>";
                                        querydb($query_update);
                                        
                                       echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script><script type ='text/javascript'>
                                        
                                        Swal.fire({
                                        title: 'Pesan',
                                        text: 'Berhasil Disimpan !',
                                        icon: 'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText: 'Ok'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            
                                            window.location.href = 'master-kecamatan.php';

                                        }
                                    })</script>";
                                        }
                                    if ($e == 'nonaktif')
                                    {
                                        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script><script type ='text/javascript'>
                                        var id = '$gidmode';

                                        Swal.fire({
                                            title: 'Pesan',
                                            text: 'Yakin hapus data ?',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Hapus'
                                            }).then((result) => {
                                            if (result.isConfirmed) {
                                                
                                                $.ajax({
                                                    url: 'hapus/hapus-kecamatan.php?id=$gidmode',
                                                    action: 'post',
                                                    data: {
                                                        id: id
                                                    },
                                                    success: function(data){

                                                        Swal.fire({
                                                            title: 'Pesan',
                                                            text: 'Berhasil Hapus Data',
                                                            icon: 'success',
                                                          }).then((result) => {
                                                            if (result.isConfirmed) {

                                                                window.location.href = 'master-kecamatan.php';

                                                            }
                                                          })  
                                                    }
                                                })  
                                            } else 
                                            window.location.href = 'master-kecamatan.php';
                                        })    

                                        </script>";	
                                        }
                                        ?>
                                <!-- database end -->
                                <!--begin::Form-->
                                <form class="form" action="" method="post" name="frmmasterkecamatan">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Kode Kecamatan:</label>
                                            <input type="text" class="form-control form-control-solid"
                                                name="kecamatan_kode"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['kecamatan_kode']:'') ?>"
                                                required />
                                            <span class="form-text text-muted">Kode Kecamatan</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Kecamatan:</label>
                                            <input type="text" class="form-control form-control-solid"
                                                name="kecamatan_nama"
                                                value="<?=(($e == 'Edit') ? $data_queryedit['kecamatan_nama']:'') ?>" />
                                            <span class="form-text text-muted">Masukkan Nama Kecamatan</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Kecamatan:</label>
                                            <div class="input-group-prepend"><span class="input-group-text">Jalan</span>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="kecamatan_alamat"
                                                    value="<?=(($e == 'Edit') ? $data_queryedit['kecamatan_alamat']:'') ?>" />
                                            </div>
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
                    <!--Lihat Data Master Kecamatan-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Lihat Data : Master Kecamatan
                                    </h3>
                                    <div class="card-toolbar">
                                        <div class="example-tools justify-content-center">
                                            <span <?php echo 'style="display:none"'?>class="example-toggle"
                                                data-toggle="tooltip" title="View code"></span>
                                            <span <?php echo 'style="display:none"'?>class="example-copy"
                                                data-toggle="tooltip" title="Copy code"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- database dikirim -->
                                <!--begin::Card-->
                                <div class="card card-custom gutter-b">
                                    <div class="card-body">
                                        <!--begin: Datatable-->
                                        <table class="table table-separate table-head-custom table-checkable"
                                            id="kt_datatable1">
                                            <thead>
                                                <tr>
                                                    <th>Kecamatan ID</th>
                                                    <th>Kecamatan Kode</th>
                                                    <th>Kecamatan Nama</th>
                                                    <th>Kecamatan Alamat</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                    <th <?php echo 'style="display:none"'?>>Pilihan</th>
                                                    <th <?php echo 'style="display:none"'?>>Status</th>
                                                    <th <?php echo 'style="display:none"'?>>Type</th>
                                                    <th <?php echo 'style="display:none"'?>>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $n=1;
                                                    $query = mysql_query("  SELECT  master_kecamatan.kecamatan_id,
                                                                                    master_kecamatan.kecamatan_kode,
                                                                                    master_kecamatan.kecamatan_nama,
                                                                                    master_kecamatan.kecamatan_alamat,
                                                                                    master_kecamatan.kecamatan_status
                                                                            FROM    master_kecamatan
                                                                            WHERE   master_kecamatan.kecamatan_status = '1'
                                                                        ");
                                                    //Tampilkan Data Selama Masih Ada
                                                    while($data = mysql_fetch_array($query)) {
                                                        if($data['kecamatan_status']==1)
                                                        {
                                                            $status = "Aktif";
                                                            $status_ = "1";
                                                        }
                                                        if($data['kecamatan_status']==2)
                                                        {
                                                            $status = "Tidak Aktif";
                                                            $status_ = "2";
                                                        }
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $data['kecamatan_id'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['kecamatan_kode'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['kecamatan_nama'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['kecamatan_alamat'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $status ?>
                                                    </td>
                                                    <td><a data-toggle="tooltip" title="Ubah Data"
                                                            class="btn btn-info btn-sm"
                                                            href="<?=$url?>?e=Edit&idmode=<?=$data['kecamatan_id']?>">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="Hapus Data"
                                                            class="btn btn-danger btn-sm"
                                                            href="<?=$url?>?e=nonaktif&idmode=<?=$data['kecamatan_id']?>">
                                                            <i class="flaticon2-delete"></i>
                                                        </a>
                                                    </td>
                                                    <td <?php echo 'style="display:none"'?>>5</td>
                                                    <td <?php echo 'style="display:none"'?>>1</td>
                                                    <td <?php echo 'style="display:none"'?>>2</td>
                                                    <td <?php echo 'style="display:none"'?> nowrap></td>
                                                </tr>
                                                <?php
                                                $n++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <!--end: Datatable-->
                                    </div>
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--END CARD-->
                        </div>
                    </div>
                    <!--END Lihat data master kecamatan-->
                </div>
                <!--END CONTAINER-->
            </div>
        </div>

        <?php include "conf_footerheader.php" ?>

        <?php include "conf_rightstickymenu.php"?>

        <?php include "conf_footer.php"?>