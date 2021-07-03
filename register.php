<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .bg {
        /* The image used */
        background-image: url("images/login1.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Geografis Pemetaan Camping Ground dan Persewaan Camping Malang Raya</title>
    <meta name="Sistem Informasi Geografis Pemetaan Camping Ground dan Persewaan Camping Malang Raya"
        content="Sistem Informasi Geografis Pemetaan Camping Ground dan Persewaan Camping Malang Raya" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="assets/css/pages/login/classic/login-6.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/logo.png" />
</head>

<body id="kt_body"
    class="bg header-fixed header-mobile-fixed subheader-enabled subheader-fixed subheader-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="row h-100 justify-content-center">
        <div class="col-md-8"></div>
        <div class="col-md-4" style="background-color:white;">
            <h3 style="text-align:center"><br>Registrasi Pengguna</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="container">
                <div class="form-group py-2 m-0">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                        placeholder="Link Foto" name="foto" />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                        placeholder="Username" name="aksesuser_login" required />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                        placeholder="nama lengkap" name="nama_lengkap" required />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                        placeholder="kota_kelahiran" name="kota_kelahiran" required />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="date"
                        placeholder="tanggal_lahir" name="tanggal_lahir" required />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                        placeholder="no_telepon" name="no_tlp" required />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="email"
                        name="email" required />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                        placeholder="Alamat" name="alamat" required />
                </div>
                <div class="form-group">
                    <input type="radio" value="Laki Laki" class="mr-2" name="gender" /> Laki - Laki
                    <br>
                    <input type="radio" value="Perempuan" class="mr-2" name="gender" /> Perempuan
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password"
                        placeholder="Password" name="aksesuser_password" required />
                </div>
                <div class="form-group py-2 m-0 border-top">
                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password"
                        placeholder="ulangi kata sandi" name="cpassword" required />
                </div>
                <div class="form-group mt-5">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline font-weight-bold">
                            <input type="checkbox" name="agree" required />
                            <span></span>
                            Saya Setuju <a href="#" class="ml-1">Terhadap Persyaratan Yang Sudah Ditetapkan</a>.
                        </label>
                    </div>
                </div>
                <!--button type="submit" id="kt_login_signin_submit" class="btn btn-primary btn-pill shadow-sm py-4 px-9 font-weight-bold">Masuk Sistem</button-->
                <div class="form-group d-flex flex-wrap flex-center mt-10">
                    <button type="submit" class="btn btn-primary btn-pill shadow-sm py-3 px-15 font-weight-bold"
                        value="Submit" name="Submit">Daftar</button>
                    <a href="index.php">
                        <button type="button" class="btn btn-primary btn-pill shadow-sm py-3 px-15 font-weight-bold"
                            style="margin-left:10px">Batalkan</button>
                    </a>
                </div>
            </form>
            <?php
                                if (isset($_POST['Submit'])){
                                    $foto = $_POST['foto'];
                                    $user = $_POST['aksesuser_login'];
                                    $nama = $_POST['nama_lengkap'];
                                    $kota = $_POST['kota_kelahiran'];
                                    $tgl_lahir = $_POST['tanggal_lahir'];
                                    $nomor = $_POST['no_tlp'];
                                    $email = $_POST['email'];
                                    $alamat = $_POST['alamat'];
                                    $gender = $_POST['gender'];
                                    $password = $_POST['aksesuser_password'];
                                    $cpassword = $_POST['cpassword'];
                                    if ($password != $cpassword){
                                        ?>
            <div class="alert alert-warning container">
                Password <strong>tidak</strong> sama.
            </div>
            <?php
                                    } else { 
                                        $servername = "localhost";
                                        $username = "root";
                                        $pwd = "";
                                        $dbname = "kelas_sig";

                                        // Create connection
                                        $conn = mysqli_connect($servername, $username, $pwd, $dbname);
                                        $query = "  SELECT max(aksesuser_id) 
                                                   FROM master_aksesuser
                                               ";
                                        $result = mysqli_query($conn, $query);
                                        $data = mysqli_fetch_array($result);
                                        $maxid =($data[0]+1);
                                        $max =(int)$maxid;
                                        $sql = "INSERT into master_aksesuser VALUES (
                                                '$max',
                                                '$foto',
                                                '$user',
                                                '$nama',
                                                '$kota',
                                                '$tgl_lahir',
                                                '$nomor',
                                                '$email',
                                                '$alamat',
                                                '$gender',
                                                '$password',
                                                '3',
                                                '0'
                                                 )";
                                        if(mysqli_query($conn, $sql)){?>
            <div class="alert alert-success container">
                <strong>Berhasil!</strong> Akun Berhasil Dibuat. Silahkan tunggu aktivasi oleh admin.
            </div>

            <?php
                                    }
                                        
                                        mysqli_close($conn);

                                    }


                                }
                            ?>
        </div>
    </div>
</body>

</html>