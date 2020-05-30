<?php
    $jambu = 15000;
    $kardus = 2000;

    $jumlah_jambu = 6 * 5;
    $penjualan_jambu = $jumlah_jambu * $jambu;
    $jumlah_dus = $kardus * 2;

    $hasil = $penjualan_jambu + $jumlah_dus;

    echo"============================================= <br>";
    echo "Harga Jambu = Rp. $jambu / Kg <br>";
    echo "Harga Kardus = Rp. $kardus / Kg <br>";
    echo "Total Penjualan ( Dus dan Jambu ) = Rp. $hasil <br>";
    echo"=============================================";
?>