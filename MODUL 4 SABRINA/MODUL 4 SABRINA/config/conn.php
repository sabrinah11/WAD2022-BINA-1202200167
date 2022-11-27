<?php
$conn = new mysqli("localhost", "root", "", "modul4");

if (!$conn) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
