<!DOCTYPE html>

<?php
    include '../config.php';

    $judul = '';
    $skor = '';
    $produser = '';
    $tipe = '';
    $stat = '';
    $totEps = '';
    $durasi = '';
    $tglRilis = '';
    $studio = '';
    $genre = '';
    $hari = '';
    $cover = '';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM tb_infor WHERE id = '$id'";
        $sql = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($sql);

        $judul = $result['judul'];
        $skor = $result['skor'];
        $produser = $result['produser'];
        $tipe = $result['tipe'];
        $stat = $result['stat'];
        $totEps = $result['totEps'];
        $durasi = $result['durasi'];
        $tglRilis = $result['tglRilis'];
        $studio = $result['studio'];
        $genre = $result['genre'];
        $hari = $result['hari'];
        $cover = $result['cover'];
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
    <title>WeWatch - Kelola Informasi Anime</title>
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
                            <label for="skor" class="form-label">Skor Anime</label>
                            <input required type="text" value="<?php echo $skor ?>" class="fs-4 form-control" name="skor" id="skor" placeholder="Ex: 1.0">
                        </div>

                        <div class="mb-3">
                            <label for="produser" class="form-label">Produser Anime</label>
                            <input required type="text" value="<?php echo $produser ?>" class="fs-4 form-control" name="produser" id="produser" placeholder="Ex: Adrian Nova">
                        </div>

                        <div class="mb-3">
                            <label for="tipe" class="form-label">Tipe Anime</label>
                            <input required type="text" value="<?php echo $tipe ?>" class="fs-4 form-control" name="tipe" id="tipe" placeholder="Ex: TV">
                        </div>

                        <div class="mb-3">
                            <label for="stat" class="form-label">Status Anime</label>
                            <input required type="text" value="<?php echo $stat ?>" class="fs-4 form-control" name="stat" id="stat" placeholder="Ex: On-Going">
                        </div>

                        <div class="mb-3">
                            <label for="totEps" class="form-label">Total Episode Anime</label>
                            <input required type="text" value="<?php echo $totEps ?>" class="fs-4 form-control" name="totEps" id="totEps" placeholder="Ex: 12">
                        </div>

                        <div class="mb-3">
                            <label for="durasi" class="form-label">Durasi Anime</label>
                            <input required type="text" value="<?php echo $durasi ?>" class="fs-4 form-control" name="durasi" id="durasi" placeholder="Ex: 12 Menit">
                        </div>

                        <div class="mb-3">
                            <label for="tglRilis" class="form-label">Tanggal Rilis Anime</label>
                            <input required type="text" value="<?php echo $tglRilis ?>" class="fs-4 form-control" name="tglRilis" id="tglRilis" placeholder="Ex: 01 Januari 2023">
                        </div>

                        <div class="mb-3">
                            <label for="studio" class="form-label">Studio Anime</label>
                            <input required type="text" value="<?php echo $studio ?>" class="fs-4 form-control" name="studio" id="studio" placeholder="Ex: MAPPA">
                        </div>

                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre Anime</label>
                            <input required type="text" value="<?php echo $genre ?>" class="fs-4 form-control" name="genre" id="genre" placeholder="Ex: Game, Fantasy">
                        </div>

                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari Rilis Anime</label>
                            <input required type="text" value="<?php echo $hari ?>" class="fs-4 form-control" name="hari" id="hari" placeholder="Ex: Random">
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover Anime</label>
                            <input <?php if (!isset($_GET['id'])) {
                                        echo "required";
                                    } ?> class="fs-4 form-control" name="cover" type="file" id="cover" accept="image/*">
                        </div>

                        <div class="row">
                            <div class="col">
                                <?php
                                    if (isset($_GET['id'])) {
                                ?>
                                    <button type="submit" class="btn btn-primary fs-5 mb-3" name="aksi" value="ubah">
                                        <i class="fa fa-plus"></i>
                                        Simpan Perubahan
                                    </button>
                                <?php
                                    } else {
                                ?>
                                    <button type="submit" class="btn btn-primary fs-5 mb-3" name="aksi" value="add">
                                        <i class="fa fa-plus"></i>
                                        Simpan Informasi Anime
                                    </button>
                                <?php
                                    }
                                ?>
                                    <a href="animeInfo.php" type="reset" class="btn btn-danger fs-5 mb-3 mx-3">
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