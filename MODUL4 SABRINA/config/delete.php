<?php
require './conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_EAD WHERE id_mobil = $id";

if (mysqli_query($conn, $sql)) {
  header("location: ../pages/List-Faruqi.php?message=delete");
} else {
  echo "Gagal";
}
