<?php

$host="localhost";
$user="root";
$db="kelompok3";

$kon = mysql_connect($host, $user, $password, $db);
if (!$kon){
    die("Koneksi Gagal:".mysql_connect_error());
}
?>