<!DOCTYPE html>

<?php
    include '../config.php';

    $query = "SELECT * FROM tb_vid";
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
    <!-- Data Tables -->
    <link rel="stylesheet" href="datatables/datatables.css">
    <script type="text/javascript" src="datatables/datatables.js"></script>
    <title>WeWatch - Daftar Video Anime</title>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#controlTB').DataTable();
    } );
</script>

<body>

</body>
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
                <a href="kelolaVid.php" class="btn btn-primary but mx-3">
                    <i class="fa fa-plus"></i>
                    Tambah Video
                </a>
                <a href="animeInfo.php" class="btn btn-warning but">
                    <i class="fa fa-list"></i>
                    Informasi Anime
                </a>
            </div>

            <div class="col-12 bgIsi">
                <table id="controlTB" class="table table-striped mt-3">
                    <thead class="table-dark">
                        <tr>
                            <td>
                                Judul
                            </td>
                            <td>
                                Episode
                            </td>
                            <td>
                                Tanggal Rilis
                            </td>
                            <td>
                                Video
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
                                    <?php echo $result['eps']; ?>
                                </td>
                                <td>
                                    <?php echo $result['tglRilis']; ?>
                                </td>
                                <td>
                                    <?php echo $result['video']; ?>
                                </td>
                                <td>
                                    <a href="kelolaVid.php?id=<?php echo $result['id']; ?>" class="btn btn-success but">
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
</html>