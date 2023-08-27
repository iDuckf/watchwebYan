<!DOCTYPE html>

<?php
    include '../config.php';

    if (isset($_GET['epsanime'])) {
        $epsanime = $_GET['epsanime'];

        $queryVid = "SELECT * FROM tb_vid WHERE judulEps = '$epsanime'";
        $sqlVid = mysqli_query($conn, $queryVid);
        $resVid = mysqli_fetch_assoc($sqlVid);

        $judul = $resVid['judul'];
        $eps = $resVid['eps'];
        $video = $resVid['video'];
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
    <title>WeWatch - OnGoing Anime</title>
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
                    <h2><?php echo $judul." ".$eps; ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-11 offset-1 py-2">
                    <iframe allow="fullscreen" width="1080" height="700"
                        src="<?php echo $video; ?>">
                    </iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-12 onGo my-2">
                    <h2><?php echo $judul." Episode List" ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <?php
                            $query = "SELECT * FROM tb_vid WHERE judul = '$judul'";
                            $sql = mysqli_query($conn, $query);

                            while ($result = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td><a class="eps" href="../AnimeWatch/index.php?epsanime=<?php echo $result['judulEps']; ?>"><?php echo $result['judulEps']; ?></a></td>
                                <td style="text-align: end;"><?php echo $result['tglRilis']; ?></td>
                            </tr>
                        <?php
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