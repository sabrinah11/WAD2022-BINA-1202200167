<?php
require '../config/conn.php';

$id = $_GET['id'];

$sql = "SELECT * FROM showroom_sabrina_table WHERE id_mobil = $id";

$result = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Car | Sabrina_1202200167</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand navbar-dark bg-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">My Car</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Form -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($result)) {
        echo "
                <h1 class='tambahh1'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='tambahp'>Car Detail " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/images/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='' enctype='multipart/form-data'>
                    <label for='nama'>Car Name</label>
                    <input type='text' id='nama' name='nama' value='" . $getDetail["nama_mobil"] . "' readonly>
                    <label for='pemilik'>Car Owner</label>
                    <input type='text' id='pemilik' name='pemilik' value='" . $getDetail["pemilik_mobil"] . "' readonly>
                    <label for='merk'>Brand</label>
                    <input type='text' id='merk' name='merk' value='" . $getDetail["merk_mobil"] . "' readonly>
                    <label for='tanggalbeli'>Purchase Date</label>
                    <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $getDetail["tanggal_beli"] . "' readonly>
                    <label for='desc'>Description</label>
                    <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' readonly> " . $getDetail["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'>Photo</label>
                    <div class='input-group mb-3'>
                      <input type='text' class='form-control' id='inputGroupFile01' value='" . $getDetail["foto_mobil"] . "' readonly>
                    </div>
                    <label for='status'>Payment Status</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' " . (($getDetail["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <a href='Edit-Sabrina.php?id=" . $getDetail["id_mobil"] . "' class='btn btn-success' style='margin-top: 40px;'>Edit</a>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>