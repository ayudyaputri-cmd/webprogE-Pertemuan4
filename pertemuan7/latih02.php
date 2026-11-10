<?php
    // Percabangan if pada PHP

    $nilai = 70;

    // beri keteranga lulus apabila nilai 65 keatas

    $ket = "Lulus";
    if( $nilai < 65 ){
        $ket = "Tidak Lulus";
    }
    echo "Keterangan: ". $ket;
    