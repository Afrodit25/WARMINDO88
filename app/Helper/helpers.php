<?php

// if (!function_exists('rupiah')) {
//     function rupiah($angka)
//     {

//         return "" . number_format($angka, 3, '.', ',');
//     }
// }

function rupiah($angka)
{
    $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
    return $hasil_rupiah;
}
