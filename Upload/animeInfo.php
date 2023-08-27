<!DOCTYPE html>

<?php
    include '../config.php';

    $query = "SELECT * FROM tb_infor";
    $sql = mysqli_query($conn, $query);
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
    <title>WeWatch - Informasi Anime</title>
</head>

<style>
    .bgJud {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        background-color: maroon;
        color: white;
        border-left: 5px solid black;
        border-top: 5px solid black;
        border-right: 5px solid black;
    }

    .bgBtn {
        border-left: 5px solid black;
        border-right: 5px solid black;
    }

    .but {
        font-size: 23px;
    }

    .bgIsi {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border-left: 5px solid black;
        border-bottom: 5px solid black;
        border-right: 5px solid black;
    }

    td {
        font-size: 20px;
        text-align: center;
        font-weight: 700;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center bgJud">
                <h1>Informasi Anime</h1>
            </div>
            <div class="col-12 py-3 bgBtn">
                <a href="../Homepage/" class="btn btn-danger but">
                    <i class="fa fa-home"></i>
                    Homepage
                </a>
                <a href="kelola.php" class="btn btn-primary but mx-3">
                    <i class="fa fa-plus"></i>
                    Tambah Informasi
                </a>
                <a href="animeVid.php" class="btn btn-warning but">
                    <i class="fa fa-list"></i>
                    Daftar Video
                </a>
            </div>

            <div class="col-12 bgIsi">
                <table class="table table-danger table-striped">
                    <thead class="table-dark">
                        <tr>
                            <td>
                                Judul
                            </td>
                            <td>
                                Skor
                            </td>
                            <td>
                                Produser
                            </td>
                            <td>
                                Tipe
                            </td>
                            <td>
                                Status
                            </td>
                            <td>
                                Total Episode
                            </td>
                            <td>
                                Durasi
                            </td>
                            <td>
                                Tanggal Rilis
                            </td>
                            <td>
                                Studio
                            </td>
                            <td>
                                Genre
                            </td>
                            <td>
                                Hari
                            </td>
                            <td>
                                Aksi
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($result = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $result['judul']; ?>
                                </td>
                                <td>
                                    <?php echo $result['skor']; ?>
                                </td>
                                <td>
                                    <?php echo $result['produser']; ?>
                                </td>
                                <td>
                                    <?php echo $result['tipe']; ?>
                                </td>
                                <td>
                                    <?php echo $result['stat']; ?>
                                </td>
                                <td>
                                    <?php echo $result['totEps']; ?>
                                </td>
                                <td>
                                    <?php echo $result['durasi']; ?>
                                </td>
                                <td>
                                    <?php echo $result['tglRilis']; ?>
                                </td>
                                <td>
                                    <?php echo $result['studio']; ?>
                                </td>
                                <td>
                                    <?php echo $result['genre']; ?>
                                </td>
                                <td>
                                    <?php echo $result['hari']; ?>
                                </td>
                                <td>
                                    <a href="kelola.php?id=<?php echo $result['id']; ?>" class="btn btn-success but">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>