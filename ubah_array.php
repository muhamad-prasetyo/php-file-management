<?php

    // * FILE INI MEMBUAT SEBUAH ARRAY.
    // * LALU AKAN DIUBAH MENJADI SEBUAH DATA JSON MENGGUNAKAN json_encode()
    // * LALU DI JADIKAN ATAU DISIMPAN MENJADI FILE TEXT MENGGUNAKAN file_put_contents()

    $anggota = [
        ['nama' => 'Tyo', 'Alamat' => 'Jl. Mawar'],
        ['nama' => 'Budi', 'Alamat' => 'Jl. Melati'],
        ['nama' => 'Santoso', 'Alamat' => 'Jl. Bunga'],
        ['nama' => 'Farhan', 'Alamat' => 'Jl. Mangga'],
    ];

    $data = json_encode($anggota);
    file_put_contents('data.txt', $data);

    // * LALU DIUBAH KEMBALI MENJADI SEBUAH ARRAY LAGI 
    $output = file_get_contents('data.txt');
    $hasil = json_decode($output, true);
    print_r($hasil);