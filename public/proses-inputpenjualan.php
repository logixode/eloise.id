<?php

include "../config/connection.php";
include "data_harga.php";

$tanggal = date("Y-m-d");
$kode_jenis = $_POST['kode_jenis'];
$jumlah = $_POST['jumlah'];

switch ($kode_jenis) {
    case 1:
        $harga_kerudung = $k_segiempat;
        $harga_kain = $harga_kain_se;
        $jenis_kerudung = "Kerudung Segi Empat";
        break;
    case 2:
        $harga_kerudung = $kp_diamond;
        $harga_kain = $harga_kain_pd;
        $jenis_kerudung = "Kerudung Pasmina Diamond";
        break;
    case 3:
        $harga_kerudung = $kp_ceruty;
        $harga_kain = $harga_kain_pc;
        $jenis_kerudung = "Kerudung Pasmina Ceruty";
        break;
}

$pemasukan = $jumlah * $harga_kerudung;
$pengeluaran = $jumlah * ($harga_kain + $biaya_jahit + $label);
$laba = $pemasukan - $pengeluaran;
// echo $tanggal . " " . $jenis_kerudung . " " . $jumlah . " " . $pemasukan . " " . $pengeluaran . " " . $laba;

mysqli_query($connect, "INSERT INTO tb_data SET tanggal='$tanggal', kode_jenis='$kode_jenis', jumlah='$jumlah', pengeluaran='$pengeluaran', pemasukan='$pemasukan', laba='$laba'");

// print_r($_POST);
header("location:{$base_url}/index.php");
