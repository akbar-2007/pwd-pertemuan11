<?php 
/* 
Nama    : Muhammad Rizky Akbar
Kelas   : TI 2B
NPM     : 250102052

Pertemuan 10
*/

mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$user = "root";
$pass = "";
$database = "db_perpustakaan";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if(!$koneksi){
    die("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
}

mysqli_set_charset($koneksi, "utf8mb4");

?>