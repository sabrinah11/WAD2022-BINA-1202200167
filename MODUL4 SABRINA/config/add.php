<?php
require './conn.php';

$carname = $_POST['nama'];
$owner = $_POST['pemilik'];
$brand = $_POST['merk'];
$date = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$photo = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $photo)) {
  $sql = "INSERT INTO showroom_sabrina_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$carname', '$owner', '$brand', '$date', '$desc', '$photo', '$status')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../pages/List-Sabrina.php?message=added");
  } else {
    echo "Gagal";
  }
} else {
  echo "Gagal";
}
