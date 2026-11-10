<?php
    // transaksi penjualan produk
    $namaproduk = "Baju suka tdiur";
    $harga_satuan = 300000;
    $qty = 2;

    // hitung harga yang harus dibayar
    $totalharga = $harga_satuan * $qty;

    // tampilkan hasil
    echo "Total Harga: Rp " . $totalharga;

    //terdapat diskon 5% jika Total lebih dari 500.000
    if ($totalharga > 500000) {
    $diskon = $totalharga * 5 / 100;
        } else {
    $diskon = 0;
    }

    // hitung total bayar
    $totalbayar = $totalharga - $diskon;

    // tampilkan hasil
    echo "<br> Diskon: Rp " . $diskon . "<br>";
    echo "Total Bayar: Rp " . $totalbayar;

?>