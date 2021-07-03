<html>
<?php include 'connect.php'; ?>
<?php include 'head.html'; ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include 'navbar.html'; ?>
    <!--Konten-->
    <div class="container" style="margin-top:50px; margin-bottom:50px">
        <h3>
            <center>All Comments</center>
        </h3>
        <hr>
        <table class="table table-stripped table-hover datatab">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Komentar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $c=1;
                    $id = $_GET["id"];
                    $sql = "SELECT
                            komentar.komentar, master_aksesuser.nama_lengkap
                            FROM
                            komentar
                            INNER JOIN
                            master_aksesuser
                            ON
                            master_aksesuser.aksesuser_login = komentar.aksesuser_login
                            WHERE
                            komentar.transaksi_id = '$id'
                            ORDER BY
                            komentar.id_komentar
                            DESC";

                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?=$c;?></td>
                    <td><?=$row["nama_lengkap"];?></td>
                    <td><?=$row["komentar"];?></td>
                </tr>
                <?php
                        $c++;
                        }
                    }
                    ?>

            </tbody>
        </table>
    </div>
    <!--Akhir Konten-->
    <?php include 'footer.html'; ?>
    <?php include 'js.html'; ?>
</body>

</html>