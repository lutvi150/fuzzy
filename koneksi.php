<?php
function koneksi()
{
    $koneksi = new mysqli("localhost", "root", "", "gizi_fuzzy");
    if (mysqli_connect_errno()) {
        return "Koneksi database gagal : " . mysqli_connect_error();
    } else {
        return $koneksi;
    }
}
