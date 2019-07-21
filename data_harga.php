<?php


include "connection.php";


function getDataHarga($value){
    switch ($value) {
        case 'k_segiempat':
            $kode_jenis = 1;
            break;
        case 'kp_diamond':
            $kode_jenis = 2;
            break;
        case 'kp_ceruty':
            $kode_jenis = 3;
            break;
        case 'kain_se':
            $kode_jenis = 4;
            break;
        case 'kain_pd':
            $kode_jenis = 5;
            break;
        case 'kain_pc':
            $kode_jenis = 6;
            break;
        case 'biaya_jahit':
            $kode_jenis = 7;
            break;
        case 'label':
            $kode_jenis = 8;
            break;
    }
    global $connect;
    $getArray = mysqli_query($connect, "SELECT * FROM harga WHERE kode_jenis='$kode_jenis' ");
    $data_tabel = mysqli_fetch_array($getArray);
    $data_harga = $data_tabel['harga'];
    // echo "<pre>";
    // print_r($data_tabel);
    // echo "</pre>";

    return $data_harga;            
}

$k_segiempat = getDataHarga('k_segiempat'); 
// echo $k_segiempat . " ";

$kp_diamond = getDataHarga('kp_diamond'); 
// echo $kp_diamond . " ";

$kp_ceruty = getDataHarga('kp_ceruty'); 
// echo $kp_ceruty . " ";

$harga_kain_se = getDataHarga('kain_se'); 
// echo $harga_kain_se . " ";

$harga_kain_pd = getDataHarga('kain_pd'); 
// echo $harga_kain_pd . " ";

$harga_kain_pc = getDataHarga('kain_pc'); 
// echo $harga_kain_pc . " ";

$biaya_jahit = getDataHarga('biaya_jahit'); 
echo $biaya_jahit . " ";

$label = getDataHarga('label'); 
// echo $label . " ";


$harga_kain = 10;

// class DataHarga
// {
//     function getDataHarga($value){
//         switch ($value) {
//             case 'kain_se':
//                 $kode_jenis = 1;
//                 break;
//             case 'kain_pd':
//                 $kode_jenis = 2;
//                 break;
//             case 'segiempat':
//                 $kode_jenis = 3;
//                 break;
//             case 'segiempat':
//                 $kode_jenis = 4;
//                 break;
//             case 'segiempat':
//                 $kode_jenis = 5;
//                 break;
//             case 'segiempat':
//                 $kode_jenis = 6;
//                 break;
//             case 'segiempat':
//                 $kode_jenis = 7;
//                 break;
//             case 'segiempat':
//                 $kode_jenis = 8;
//                 break;
            
//             default:
//                 # code...
//                 break;
//         }
//         global $connect;
//         $getArray = mysqli_query($connect, "SELECT * FROM harga WHERE kode_jenis='$kode_jenis' ");
//         $data_tabel = mysqli_fetch_array($getArray);
//         $data_harga = $data_tabel['harga'];
//         // echo "<pre>";
//         // print_r($data_tabel);
//         // echo "</pre>";

//         return $data_harga;            
//     }
// }

//     $dataHarga = new DataHarga;
//     // echo $harga_kain->getDataHarga(1); 
//     $harga_kain_se = $dataHarga->getDataHarga('kain_se'); 
//     echo $harga_kain_se;
//     $harga_kain_pd = $dataHarga->getDataHarga('kain_pd'); 
//     echo $harga_kain_pd;
    // $harga_kain_pd = new DataHarga;
    // // echo $harga_kain->getDataHarga(1); 
    // $harga_kain_pd->getDataHarga(5); 

    // $harga_kain_pc = new DataHarga;
    // // echo $harga_kain->getDataHarga(1); 
    // $harga_kain_pc->getDataHarga(6); 

    // $biaya_jahit = new DataHarga;
    // // echo $biaya_jahit->getDataHarga(2); 
    // $biaya_jahit->getDataHarga(7); 

    // $label = new DataHarga;
    // // echo $label->getDataHarga(3);
    // $label->getDataHarga(8);

    // $biaya_jahit = new DataHarga;
    // $label = new DataHarga;

    // $tb_harga       = mysqli_query($connect, "SELECT * FROM harga ");
    // $data_harga     = mysqli_fetch_array($tb_harga);
    // echo "<pre>";
    // print_r($tb_harga);
    // echo "</pre>";
    // // $harga_kain     = "";
    // // $biaya_jahit    = "";
    // // $label          = "";
        

    // $no = 0;
    // $read   = mysqli_query($connect, "SELECT * FROM harga where kode_jenis=3");
    //         $no     = 0;

    //         $data_col = mysqli_fetch_array($read);
    //         echo "<pre>";
    // print_r($data_col);
    // echo "</pre>";
            // while ($data_col) { 
            //     $link_edit = "daftar-harga.php?id=" . $data_col['kode_jenis'] . 
            //                   "&data=" . $data_col['data'];
            //     ++$no; 
        

            