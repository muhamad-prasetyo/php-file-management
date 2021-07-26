<?php 

    // * DALAM KASUS INI AKAN MEMBUAT SEBUAH CODE UNTUK GENERATE SEBUAH FILE MELALUI  function pada PHP 
    // * MENGGUNAKAN FUNGSI file_put_contents();


    // * INI UNTUK MEMBUAT MENJADI SEBUAH FILE TIPE TEXT. 
    $pesan = "Hello ini adalah tulisan didalam file nanti.";
    file_put_contents('konten.txt', $pesan);

    // DAN FUNGSI INI UNTUK MEMBUKA ISI FILE KONTENT.TEXT INI 
    $isi_file = file_get_contents('konten.txt');
    echo $isi_file;


