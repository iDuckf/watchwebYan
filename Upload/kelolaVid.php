<!DOCTYPE html>

<?php
    include '../config.php';

    $judul = '';
    $eps = '';
    $tglRilis = '';
    $video = '';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM tb_vid WHERE id = '$id'";
        $sql = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($sql);

        $judul = $result['judul'];
        $eps = $result['eps'];
        $tglRilis = $result['tglRilis'];
        $video = $result['video'];
    }
?>

<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="../Font/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>WeWatch - Kelola Video Animes</title>
</head>

<style>
    .bg {
        background-image: linear-gradient(to bottom right, white, black);
    }

    .bgJud {
        background-color: maroon;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-left: 5px solid black;
        border-top: 5px solid black;
        border-right: 5px solid black;
    }

    .bgJud h1 {
        font-size:50px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .bgIsi {
        border-left: 5px solid black;
        border-bottom: 5px solid black;
        border-right: 5px solid black;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    label {
        font-size: 23px;
        margin-top: 10px;
        color: white;
    }
</style>

<body>
    <div class="contaienr-fluid bg py-5">
        <div class="container shadow-lg bg-body">
            <div class="row">
                <div class="col-12 bgJud text-center">
                    <h1>Kelola Informasi Anime</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12 bgIsi bg-secondary">
                    <form action="../proses.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3" style="display: none;">
                            <label for="id" class="form-label">ID Anime</label>
                            <input required type="text" value="<?php echo $id ?>" class="fs-4 form-control" name="id" id="id" placeholder="Ex: Valorant ACE">
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Anime</label>
                            <input required type="text" value="<?php echo $judul ?>" class="fs-4 form-control" name="judul" id="judul" placeholder="Ex: Valorant ACE">
                        </div>

                        <div class="mb-3">
                            <label for="eps" class="form-label">Episode Anime</label>
                            <input required type="text" value="<?php echo $eps ?>" class="fs-4 form-control" name="eps" id="eps" placeholder="Ex: 1">
                        </div>

                        <div class="mb-3">
                            <label for="tglRilis" class="form-label">Tanggal Rilis Anime</label>
                            <input required type="text" value="<?php echo $tglRilis ?>" class="fs-4 form-control" name="tglRilis" id="tglRilis" placeholder="Ex: 1 januari 2000">
                        </div>

                        <div class="mb-3">
                            <label for="video" class="form-label">Video Anime</label>
                            <input required type="text" value="<?php echo $video ?>" class="fs-4 form-control" name="video" id="video" placeholder="Ex: http://xxxxx/xxxx">
                        </div>

                        <div class="row">
                            <div class="col">
                                <?php
                                    if (isset($_GET['id'])) {
                                ?>
                                    <button type="submit" class="btn btn-primary fs-5 mb-3" name="aksi" value="ubahVid">
                                        <i class="fa fa-plus"></i>
                                        Simpan Perubahan
                                    </button>
                                <?php
                                    } else {
                                ?>
                                    <button type="submit" class="btn btn-primary fs-5 mb-3" name="aksi" value="addVid">
                                        <i class="fa fa-plus"></i>
                                        Simpan Informasi Anime
                                    </button>
                                <?php
                                    }
                                ?>
                                    <a href="animeVid.php" type="reset" class="btn btn-danger fs-5 mb-3 mx-3">
                                        <i class="fa fa-reply"></i>
                                        Cancel
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>