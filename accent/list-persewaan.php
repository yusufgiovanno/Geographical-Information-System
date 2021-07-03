<html>
<?php include 'connect.php'; ?>
<?php include 'head.html'; ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include 'navbar.html'; ?>
    <!--Konten-->
    <div class="container">

        <br>
        <h3 style="text-align:center">Daftar Persewaan<br><br></h3>
        <div class="col-lg-12 ml-auto">
            <?php
                $sql = "SELECT * FROM master_transaksi WHERE id_kategori='2' AND transaksi_status='1'";
                $result = mysqli_query($conn, $sql);
                $c = 1;
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        if ($c == 1){ echo '<div class="row">'; }?>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                    <img src="<?=$row['foto'];?>" class="img-thumbnail" alt="<?=$row['transaksi_nama'];?>"
                        style="max-height:250px">
                    <h3><?=$row['transaksi_nama'];?></h3>
                    <p><?=$row['transaksi_alamat'];?></p>
                    <p><a href="transaksi.php?tid=<?=$row['transaksi_id'];?>" class="readmore">Learn more</a></p>
                </div>
            </div>

            <?php

                        if ($c == 3){ echo '</div>'; }

                        $c++;
                        if ($c > 3){
                            $c = 1;
                        }
                    }
                    if (mysqli_num_rows($result) % 3 > 0){echo '</div><br>';}

                    mysqli_close($conn);

                }

                ?>
        </div>
    </div>
    <!--Akhir Konten-->
    <?php include 'footer.html'; ?>
    <?php include 'js.html'; ?>
</body>

</html>