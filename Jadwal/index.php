<!DOCTYPE html>

<?php
    include '../config.php';

    $querySenin = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Senin'";
    $sqlSenin = mysqli_query($conn, $querySenin);

    $querySelasa = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Selasa'";
    $sqlSelasa = mysqli_query($conn, $querySelasa);

    $queryRabu = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Rabu'";
    $sqlRabu = mysqli_query($conn, $queryRabu);

    $queryKamis = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Kamis'";
    $sqlKamis = mysqli_query($conn, $queryKamis);

    $queryJumat = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Jumat'";
    $sqlJumat = mysqli_query($conn, $queryJumat);

    $querySabtu = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Sabtu'";
    $sqlSabtu = mysqli_query($conn, $querySabtu);

    $queryMinggu = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Minggu'";
    $sqlMinggu = mysqli_query($conn, $queryMinggu);

    $queryRandom = "SELECT * FROM tb_infor WHERE stat = 'On-Going' AND hari = 'Random'";
    $sqlRandom = mysqli_query($conn, $queryRandom);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="../Font/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>WeWatch - Jadwal Anime</title>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bgLogo">
        <div class="container">
            <div class="row">
                <div class="col-1 text-end">
                    <h1 class="we">We</h1>
                </div>
                <div class="col-9">
                    <h1 class="watch">Watch</h1>
                </div>
                <div class="col-3 text-center">
                    <p class="desc">Platform Anime Streaming</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Button Start -->
    <div class="container-fluid bgBtn">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="../Homepage/" class="aBtn">
                        <button class="btnNonActive">
                            HOMEPAGE
                        </button>
                    </a>
                    <a href="../Jadwal/" class="aBtn">
                        <button class="btnActive">
                            JADWAL
                        </button>
                    </a>
                    <a href="../OnGoing/" class="aBtn">
                        <button class="btnNonActive">
                            ON-GOING ANIME
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Button End -->

    <!-- Content Start -->
    <div class="container-fluid bgContent">
        <div class="container content">
            <div class="row">
                <div class="col-12 onGo">
                    <h2>Jadwal Rilis Anime</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Senin</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resSenin = mysqli_fetch_assoc($sqlSenin)) {
                            ?>
                                <tr>
                                    <td><?php echo $resSenin['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Selasa</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resSelasa = mysqli_fetch_assoc($sqlSelasa)) {
                            ?>
                                <tr>
                                    <td><?php echo $resSelasa['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Rabu</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resRabu = mysqli_fetch_assoc($sqlRabu)) {
                            ?>
                                <tr>
                                    <td><?php echo $resRabu['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Kamis</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resKamis = mysqli_fetch_assoc($sqlKamis)) {
                            ?>
                                <tr>
                                    <td><?php echo $resKamis['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Jum'at</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resJumat = mysqli_fetch_assoc($sqlJumat)) {
                            ?>
                                <tr>
                                    <td><?php echo $resJumat['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Sabtu</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resSabtu = mysqli_fetch_assoc($sqlSabtu)) {
                            ?>
                                <tr>
                                    <td><?php echo $resSabtu['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Minggu</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resMinggu = mysqli_fetch_assoc($sqlMinggu)) {
                            ?>
                                <tr>
                                    <td><?php echo $resMinggu['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="table table-dark table-striped my-2">
                        <thead>
                            <tr>
                                <td>Random</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($resRandom = mysqli_fetch_assoc($sqlRandom)) {
                            ?>
                                <tr>
                                    <td><?php echo $resRandom['judul']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-12 onGo">
                    <h2>Follow Social Media Kami</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="https://www.instagram.com/kagemine_inochi/" class="sosmed">
                        <i class="fa fa-instagram"></i>
                        Instagram
                    </a>
                </div>
                <div class="col-12 text-center">
                    <a href="https://www.youtube.com/channel/UCBkB-udPl4HBK5IMYrt75Hg" class="sosmed">
                        <i class="fa fa-youtube"></i>
                        YouTube
                    </a>
                </div>
                <div class="col-12 text-center">
                    <a href="https://www.facebook.com/adriannova.adriannova.50" class="sosmed">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <!-- Footer Start -->
    <div class="container-fluid bgFoot">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div>
                        <h5>Info</h5>
                        <p>
                            WeWatch - Platform Streaming Anime Lengkap Kualitas HD
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>About</h5>
                        <p>
                            WeWatch - Platform Anime Streaming Yang Dibuat Pada <br>
                            Tanggal 22 Agustus 2023. Di Kembangkan Oleh Adrian Nova. <br>
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>Tips</h5>
                        <p>
                            Lebih Nyaman Menonton Anime Di Hari Santai Ditemani Cemilan
                            Dan Minuman. Selamat Menonton.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid bgCopy">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        All Rigths Reserved Copyright 2023. WeWatch. Created By Adrian Nova
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
</body>

</html>