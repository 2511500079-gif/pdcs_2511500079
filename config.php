<?php
require_once __DIR__ . '/helpers/response.php';

mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$username = "root";
$password = "";
$db = "akademik_db";

$koneksi = @mysqli_connect($host, $username, $password, $db);

if (!$koneksi) {
    sendResponse(
        false,
        "Koneksi database gagal: " ,
        null,
        500
    );
}