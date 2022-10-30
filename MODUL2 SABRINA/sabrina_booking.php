<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Booking</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse d-flex justify-content-center">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="sabrina_Home.php"> Home </a>
                <a class="nav-item nav-link" href="sabrina_Booking.php"> Booking </a>
            </div>
        </div>
    </nav>

    <div class="mt-2 mb-2 container">
        <h1 class="p-1" style="text-align: center;">Rent your car now!</h1>
    </div>

    <div class="container card shadow-sm">
        <div class="d-flex justify-content-around">
            <div class="col-6 ps-5 pe-5 d-flex align-items-center">
                <?php
                if (isset($_GET["img"])) {
                ?><img class="" width="100%" src="<?= $_GET["img"]; ?>" alt="">
                <?php
                } else {
                ?><img width="100%" src="1.png" alt="">
                <?php } ?>
            </div>
            <div class="col-6 ps-5 pe-5">
                <ul type="none">
                    <form action="sabrina_myBooking.php" method="post">
                        <li class="m-1">
                            <label for="nama">Name</label><br>
                            <input class="form-control" type="text" name="nama" id="nama" value="Sabrina_1202200167" readonly>
                        </li>
                        <li class="m-1">
                            <label for="book">Book Date</label><br>
                            <input class="form-control" type="date" name="book" id="book">
                        </li>
                        <li class="m-1">
                            <label for="time">Start Time</label><br>
                            <input class="form-control" type="time" name="time" id="time">
                        </li>
                        <li class="m-1">
                            <label for="hari">Duration (Days)</label><br>
                            <input class="form-control" type="number" name="hari" id="hari">
                        </li>
                        <li class="m-1">
                            <label for="mobil">Car Type</label>
                            <select class="form-select" name="mobil" id="mobil">
                                <option selected>Choose...</option>
                                <option value="Toyota Rush">Toyota Rush</option>
                                <option value="Toyota Ayla">Toyota Ayla</option>
                                <option value="Honda Brio">Honda Brio</option>
                            </select>
                        </li>
                        <li class="m-1">
                            <label for="phone">Phone Number</label><br>
                            <input class="form-control" type="number" name="phone" id="phone" min="0">
                        </li>
                        <li class="m-1">
                            <label for="service">Add Service(s)</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="addservice[]" value="Health protocol" id="health"><label class="form-check-label" for="health">Health protocol / Rp25.000</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="addservice[]" value="Driver" id="driver"><label class="form-check-label" for="driver">Driver / Rp100.000</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="addservice[]" value="Fuel Filled" id="fuel"><label class="form-check-label" for="fuel">Fuel Filled / Rp.250.000</label><br>
                        </li>
                        <li class="text-center">
                            <button class="btn btn-primary justify-content-around" type="submit">Book</button>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>

    <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; color: black; text-align: center; background-color: lightgrey;">
        <p>Created by Sabrina_1202200167</p>
    </footer>
</body>

</html>