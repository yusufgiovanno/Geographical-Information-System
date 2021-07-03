<html>
<?php
    include 'connect.php';
    include 'head.html';
    $id = $_SESSION["idpengguna"];

    if (isset($_POST["submit"])){
        $nm = $_POST["nama"];
        $kt = $_POST["ktlahir"];
        $tg = $_POST["tglahir"];
        $tl = $_POST["tlp"];
        $em = $_POST["email"];
        $al = $_POST["alamat"];
        $ge = $_POST["gender"];
        $fo = $_POST["foto"];
        $sql = "UPDATE master_aksesuser SET nama_lengkap = '$nm', kota_kelahiran = '$kt', tanggal_lahir = '$tg', no_tlp = '$tl', email = '$em', alamat = '$al', gender = '$ge', foto = '$fo' WHERE aksesuser_id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Profile Updated Succesfully.
                  </div>';
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    $sql = "SELECT * FROM master_aksesuser WHERE aksesuser_id = '$id' AND aksesuser_hakakses='3'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $pw = $row["aksesuser_password"];
            $nama = $row["nama_lengkap"];
            $kota = $row["kota_kelahiran"];
            $tgl = $row["tanggal_lahir"];
            $telp = $row["no_tlp"];
            $email = $row["email"];
            $alamat = $row["alamat"];
            $gender = $row["gender"];
            $foto = $row["foto"];
        }
    }

    if (isset($_POST["cpwd"])){
        $pw1 = $_POST["pwd"];
        $pw2 = $_POST["pwd2"];
        $pw3 = $_POST["pwd3"];

        if($pw2 != $pw3){
            echo '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> New Password And Confirmation New Password Did Not Matched.
                  </div>';
        } else {
            if($pw1 != $pw){
                echo '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> Incorrect Old Password.
                  </div>';
            } else{
                $sql = "UPDATE master_aksesuser SET aksesuser_password = '$pw2' WHERE aksesuser_id = '$id'";
                if (mysqli_query($conn, $sql)) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Password Updated Succesfully.
                  </div>';
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            }
        }
    }

    ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include 'navbar.html'; ?>
    <!--Konten-->
    <div class="container" style="margin-top:1px;margin-bottom:50px;">
        <h3 style="margin-bottom:50px">
            <center>User Profile</center>
        </h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?=$foto;?>" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            <center><?=$nama;?></center>
                        </h4>
                        <p class="card-text">
                            <center><?=$kota;?>, <?=$tgl;?><br><?=$email;?><br><?=$telp;?></center>
                        </p>
                    </div>
                </div>
                <h5 style="margin-top:25px">
                    <center>Password Edit</center>
                </h5>
                <form action="profile.php" method="post">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Curent Password" name="pwd">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New password" name="pwd2">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm New password" name="pwd3">
                    </div>
                    <button type="submit" class="btn btn-outline-primary" name="cpwd" style="float:right">Change
                        Password</button>
                </form>
            </div>
            <div class="col-md-8">
                <h5 style="margin-bottom:50px">
                    <center>Personal Information</center>
                </h5>
                <form action="profile.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Full Name:</label>
                        <input type="text" class="form-control" placeholder="Full Name" name="nama" value="<?=$nama;?>">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Select list:</label>
                        <select class="form-control" name="gender">
                            <option disabled hidden><?=$gender;?></option>
                            <option>L</option>
                            <option>P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Date of Birth:</label>
                        <input type="date" class="form-control" name="tglahir" value="<?=$tgl;?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">City of Birth:</label>
                        <input type="text" class="form-control" placeholder="City of Birth" name="ktlahir"
                            value="<?=$kota;?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Address:</label>
                        <textarea class="form-control" rows="5" name="alamat"><?=$alamat;?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">Phone:</label>
                        <input type="text" class="form-control" placeholder="Phone" name="tlp" value="<?=$telp;?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">E-mail:</label>
                        <input type="email" class="form-control" placeholder="E-mail" name="email" value="<?=$email;?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Foto:</label>
                        <input type="text" class="form-control" value="<?=$foto;?>" name="foto" value="<?=$email;?>">
                    </div>
                    <button type="submit" class="btn btn-outline-primary" name="submit" style="float:right">Save
                        Changes</button>
                </form>
            </div>
        </div>
    </div>
    <!--Akhir Konten-->
    <?php include 'footer.html'; ?>
    <?php include 'js.html'; ?>
</body>

</html>