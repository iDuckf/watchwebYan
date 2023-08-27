<!DOCTYPE html>

<?php
    include '../config.php';

    if (isset($_GET['anime'])) {
        $anime = $_GET['anime'];

        $queryInfo = "SELECT * FROM tb_infor WHERE judul = '$anime'";
        $sqlInfo = mysqli_query($conn, $queryInfo);
        $resInfo = mysqli_fetch_assoc($sqlInfo);

        $judul = $resInfo['judul'];
        $skor = $resInfo['skor'];
        $produser = $resInfo['produser'];
        $tipe = $resInfo['tipe'];
        $stat = $resInfo['stat'];
        $totEps = $resInfo['totEps'];
        $durasi = $resInfo['durasi'];
        $tglRilis = $resInfo['tglRilis'];
        $studio = $resInfo['studio'];
        $genre = $resInfo['genre'];
        $hari = $resInfo['hari'];
        $cover = $resInfo['cover'];   
    }
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
    <title>WeWatch - Homepage</title>
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
                        <button class="btnNonActive">
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
                    <h2>Informasi Anime</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-2 offset-2">
                    <img src="../img/<?php echo $cover ?>" class="img-fluid my-1">
                </div>

                <div class="col-8">
                    <table>
                        <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td><?php echo $judul; ?></td>
                        </tr>
                        <tr>
                            <td>Skor</td>
                            <td>:</td>
                            <td><?php echo $skor; ?></td>
                        </tr>
                        <tr>
                            <td>Produser</td>
                            <td>:</td>
                            <td><?php echo $produser; ?></td>
                        </tr>
                        <tr>
                            <td>Tipe</td>
                            <td>:</td>
                            <td><?php echo $tipe; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo $stat; ?></td>
                        </tr>
                        <tr>
                            <td>Total Episode</td>
                            <td>:</td>
                            <td><?php echo $totEps; ?></td>
                        </tr>
                        <tr>
                            <td>Durasi</td>
                            <td>:</td>
                            <td><?php echo $durasi; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Rilis</td>
                            <td>:</td>
                            <td><?php echo $tglRilis; ?></td>
                        </tr>
                        <tr>
                            <td>Studio</td>
                            <td>:</td>
                            <td><?php echo $studio; ?></td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td>:</td>
                            <td><?php echo $genre; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-12 onGo my-2">
                    <h2><?php echo $judul." Episode List"; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <?php
                            if (isset($_GET['anime'])) {
                                $id = $_GET['anime'];
                                $queryVid = "SELECT * FROM tb_vid WHERE judul = '$id'";
                                $sqlVid = mysqli_query($conn, $queryVid);
                                while ($resVid = mysqli_fetch_assoc($sqlVid)) {
                        ?>
                            <tr>
                                <td><a class="eps" href="../AnimeWatch/index.php?epsanime=<?php echo $resVid['judulEps']; ?>"><?php echo $resVid['judul']." ".$resVid['eps']; ?></a></td>
                                <td style="text-align: end;"><?php echo $resVid['tglRilis']; ?></td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
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