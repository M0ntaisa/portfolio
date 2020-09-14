<?php

    echo "<pre>";
    print_r($_GET);die;

    $kd_kriteria = $_GET['kd_kriteria'];

    // untuk fungsi update parameternya (nama_tabel, id untuk where, id untuk nilai, nama_kolom, nama_value/nama_hasil)
    $update = $pdo->Update('tb_data', 'id_data' ,$id_data, ['judul', 'link', 'text'], [$judul, $link, $text]);

    if ($update == TRUE) {
    echo "Berhasil";
    } else {
    echo "Gagal";
    }


