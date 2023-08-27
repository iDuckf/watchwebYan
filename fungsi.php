<?php
    include 'config.php';

    function addInfor($post, $file) {
        $judul = $post['judul'];
        $skor = $post['skor'];
        $produser = $post['produser'];
        $tipe = $post['tipe'];
        $stat = $post['stat'];
        $totEps = $post['totEps'];
        $durasi = $post['durasi'];
        $tglRilis = $post['tglRilis'];
        $studio = $post['studio'];
        $genre = $post['genre'];
        $hari = $post['hari'];


        $split = explode('.', $file['cover']['name']);
        $ekstensi = $split[count($split) - 1];
        $cover = $judul.'.'.$ekstensi;

        $dir = "img/";
        $tmp_file = $file['cover']['tmp_name'];

        move_uploaded_file($tmp_file, $dir.$cover);

        $querry = "INSERT INTO tb_infor VALUES(null, '$judul', '$skor', '$produser', '$tipe', '$stat', '$totEps', '$durasi', '$tglRilis', '$studio', '$genre', '$hari', '$cover')";
        $sql = mysqli_query($GLOBALS['conn'], $querry);
        return true;
    }

    function addVid($post) {
        $judul = $post['judul'];
        $eps = $post['eps'];
        $tglRilis = $post['tglRilis'];
        $video = $post['video'];
        $judulEps = $judul." ".$eps;

        $querry = "INSERT INTO tb_vid VALUES(null, '$judul', '$eps', '$tglRilis', '$video', '$judulEps')";
        $sql = mysqli_query($GLOBALS['conn'], $querry);
        return true;
    }

    function editInfor($post, $file) {
        $id = $post['id'];
        $judul = $post['judul'];
        $skor = $post['skor'];
        $produser = $post['produser'];
        $tipe = $post['tipe'];
        $stat = $post['stat'];
        $totEps = $post['totEps'];
        $durasi = $post['durasi'];
        $tglRilis = $post['tglRilis'];
        $studio = $post['studio'];
        $genre = $post['genre'];
        $hari = $post['hari'];

        $querryShow = "SELECT * FROM tb_infor WHERE id = '$id';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $querryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if ($file['cover']['name'] == "") {
            $cover = $result['cover'];
        }else {
            $split = explode('.', $file['cover']['name']);
            $ekstensi = $split[count($split) - 1];
            $cover = $result['judul'].'.'.$ekstensi;
            unlink("img/".$result['cover']);
            move_uploaded_file($file['cover']['tmp_name'], 'img/'.$cover);
        }

        $query = "UPDATE tb_infor SET judul = '$judul', skor = '$skor', produser = '$produser', tipe = '$tipe', stat = '$stat', totEps = '$totEps', durasi = '$durasi', tglRilis = '$tglRilis', studio = '$studio', genre = '$genre', hari = '$hari', cover = '$cover' WHERE id = '$id'";
        $sql = mysqli_query($GLOBALS['conn'], $query);
    }

    function editVid($post) {
        $id = $post['id'];
        $judul = $post['judul'];
        $eps = $post['eps'];
        $tglRilis = $post['tglRilis'];
        $video = $post['video'];
        $judulEps = $judul." ".$eps;

        $query = "UPDATE tb_vid SET judul = '$judul', eps = '$eps', tglRilis = '$tglRilis', video = '$video', judulEps = '$judulEps' WHERE id = '$id'";
        $sql = mysqli_query($GLOBALS['conn'], $query);
    }
?>