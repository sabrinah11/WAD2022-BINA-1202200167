<?php
$conn = new mysqli("localhost:3308", "root", "", "modul4");

if (!$conn) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
