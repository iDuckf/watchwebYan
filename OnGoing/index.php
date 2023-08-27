<!DOCTYPE html>

<?php
    include '../config.php';

    $query = "SELECT * FROM tb_infor WHERE stat = 'On-Going'";
    $sql = mysqli_query($conn, $query);
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

<style>
    .bgJudulCont {
        width: 220px;
        height: 35px;
        overflow: hidden;
    }

    .bgJudulCont:hover {
        width: 220px;
        height: 63px;
        overflow: hidden;
    }
</style>

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
                        <button class="btnActive">
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
                    <h2>On-Going Anime</h2>
                </div>
            </div>

            <div class="row">
                <?php
                    while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                    <div class="col-2">
                        <div class="row">
                            <div class="col-12 text-center bgJudulCont">
                                <h4><?php echo $result['judul']; ?></h4>
                            </div>
                        </div>
                        <img src="../img/<?php echo $result['cover']; ?>" class="img-fluid my-1">
                        <div class="text-center">
                            <a href="../MainMenuAnime/index.php?anime=<?php echo $result['judul']; ?>" class="aBtn">
                                <button class="btnWatch">
                                    <i class="fa fa-play-circle"></i>
                                    Watch
                                </button>
                            </a>
                        </div>
                    </div>
                <?php
                    }
                ?>
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