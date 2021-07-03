<html>
    <?php
    include 'connect.php';
    include 'head.html';
    $id = $_GET['tid'];
    $sql = "SELECT * FROM master_transaksi WHERE transaksi_id='$id'";
    $result = mysqli_query($conn, $sql);
    $c = 1;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nama = $row['transaksi_nama'];
            $foto = $row['foto'];
            $alamat = $row['transaksi_alamat'];
            $telp = $row['no_telepon'];
            $author = $row['usercreated'];
            $tipe = $row['id_kategori'];
            $desc = $row['deskripsi'];
        }
    }

    if (isset($_GET["submit"])){
        $komen = $_GET["komen"];
        $user = $_SESSION['username'];
        $sql = "INSERT INTO komentar (aksesuser_login, transaksi_id, komentar) VALUES
        ('$user', '$id', '$komen')";
        if (mysqli_query($conn, $sql)) {
            echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Comment Posted Succesfully.
                  </div>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <?php include 'navbar.html'; ?><br>
        <div class="container">
            <!--konten-->
            <div class="row mb-5 ">
                <div class="col-md-8 section-title text-center mx-auto">
                    <span class="sub-title mb-2 d-block">Sistem Informasi</span>
                    <h2 class="title text-primary mb-3">Geografis</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="<?=$foto;?>" alt="Image" class="img-fluid" class="img-fluid">

                </div>
                <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
                    <h3 style="text-transform: capitalize"><?=$tipe;?> <?=$nama;?></h3>
                    <p class="mb-4"><?=$alamat;?></p>

                    <blockquote class="blockquote">
                        <p><?=$desc;?>.</p>
                    </blockquote>
                    <p class="mb-4"><a href="list-transaksi.php?id=<?=$id;?>" class="readmore">View All Comments</a></p>
                </div>
            </div>
            <div class="row mb-5 ">
                <div class="col-md-7 section-title text-center mx-auto">
                    <span class="sub-title mb-2 d-block">Comments</span>
                    <h2 class="title text-primary mb-3">Our Visitor Sayings</h2>
                </div>
            </div>
            <div class="row">
                <?php
                $sql = "SELECT
            komentar.komentar, master_aksesuser.foto, master_aksesuser.nama_lengkap
            FROM
            komentar
            INNER JOIN
            master_aksesuser
            ON
            master_aksesuser.aksesuser_login = komentar.aksesuser_login
            WHERE
            komentar.transaksi_id = '$id' ORDER BY komentar.id_komentar DESC LIMIT 4";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {?>
                <div class="col-lg-6 mb-4">
                    <blockquote class="blockquote">
                        <p><?=$row['komentar'];?></p>
                        <p class="mb-0 d-flex align-items-center">
                            <img class="img-fluid mr-3" src="<?=$row['foto'];?>" alt="Image">
                            <cite>&mdash; <?=$row['nama_lengkap'];?></cite>
                        </p>
                    </blockquote>
                </div>
                <?php }} ?>
            </div>

            <form action="transaksi.php" method="GET" class="contact-form" id="komen">
                <input type="text" value="<?=$id;?>" name="tid" hidden>
                <div class="section-title text-center mb-5">
                    <span class="sub-title mb-2 d-block">Tell Us What You Think</span>
                    <h2 class="title text-primary">Leave a Comment</h2>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <textarea class="form-control" id="" cols="30" rows="10" placeholder="Message" name="komen"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-md" name="submit">Post Comment</button>
                    </div>
                </div>
            </form>

            <!--akhir konten-->
        </div>

        <footer class="site-footer">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="footer-heading mb-4" style="color: white">About Us</h3>
                                <p style="color: white">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 ml-auto">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4" style="color: white">Navigation</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#" style="color: white">Home</a></li>
                                    <li><a href="#" style="color: white">About Us</a></li>
                                    <li><a href="#" style="color: white">Privacy</a></li>
                                    <li><a href="#" style="color: white">Terms</a></li>
                                    <li><a href="#" style="color: white">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-2" style="color: white">Subscribe Newsletter</h3>
                            <form method="post" class="form-subscribe">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | This template is made
                            with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
        <?php include 'js.html'; ?>
    </body>

</html>