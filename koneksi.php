<?php
$koneksi = mysqli_connect("localhost","root","","trimitra_abadi");
// cek koneksi
if (!$koneksi){
    die("Error koneksi: " . mysqli_connect_errno());
}
?>