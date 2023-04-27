<?php

include('functions.php');

if (isset($_POST['tambah'])) {
    $jenis_tumbuhan = $_POST['jenis-tumbuhan'];
    $nama = $_POST['nama'];
    $nama_biologi = $_POST['nama-biologi'];
    $deskripsi = $_POST['deskripsi'];

    tambahData($jenis_tumbuhan, $nama, $nama_biologi, $deskripsi, $_FILES);
    echo "<script>
            alert('Berhasil menambah Data!');
            window.location = '../index.php';
        </script>";
}

?>