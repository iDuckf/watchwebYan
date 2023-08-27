<?php
    include 'fungsi.php';
    session_start();

    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == "add") {
            $success = addInfor($_POST, $_FILES);

            if ($success) {
                $_SESSION['alert'] = "Informasi Anime Berhasi Ditambahkan!";
                header("location: Upload/animeInfo.php");
            } else {
                $_SESSION['alert'] = "Error!";
                header("location: Upload/animeInfo.php");
            }
        } else if ($_POST['aksi'] == "ubah") {
            $success = editInfor($_POST, $_FILES);

            if ($success) {
                $_SESSION['alert'] = "Informasi Anime Berhasi Diedit!";
                header("location: Upload/animeInfo.php");
            } else {
                $_SESSION['alert'] = "Error!";
                header("location: Upload/animeInfo.php");
            }
        } else if ($_POST['aksi'] == "addVid") {
            $success = addVid($_POST);

            if ($success) {
                $_SESSION['alert'] = "Video Anime Berhasi Ditambahkan!";
                header("location: Upload/animeVid.php");
            } else {
                $_SESSION['alert'] = "Error!";
                header("location: Upload/animeVid.php");
            }
        } else if ($_POST['aksi'] == "ubahVid") {
            $success = editVid($_POST);

            if ($success) {
                echo "Berhasil";
                $_SESSION['alert'] = "Video Anime Berhasi Diedit!";
                header("location: Upload/animeVid.php");
            } else {
                echo "Error";
                $_SESSION['alert'] = "Error!";
                header("location: Upload/animeVid.php");
            }
        }
    }
?>