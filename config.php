<?php
// Commit 2: Menambahkan konfigurasi database utama untuk proyek inventori

//hst
$databaseHost = 'localhost';
//Nama database
$databaseName = 'simrs';
//username
$databaseUsername = 'root';
//pasword mysql
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
