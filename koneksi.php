<?php
$host = "localhost";
$username = "root";
$password = "passwordku";
$database = "rukmanamulya";

$koneksi = mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

// if ($pilihdatabase) echo"Berhasil";
// else echo "Gagal Koneksi";
?>