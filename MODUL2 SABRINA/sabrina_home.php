<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Home</title>
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

    <div>
        <p class="m-2" style="text-align: center; font-size: 25px">WELCOME TO EAD RENT</p>
    </div>

    <div class="container">
        <p class="p-1" style="text-align: center;">Find your best deal, here!</p>
    </div>

    <div class="container">
        <div class="d-flex justify-content-around">
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="1.png" alt="rush">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 20px">Toyota Rush</p>
                        <p class="m-0" style="color: grey">Rp. 200.000 / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">7 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">1500 CC</p>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">Manual</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <form action="sabrina_booking.php" method="post">
                            <button class="m-2 btn btn-primary" type="submit" name="img" value="1.png">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1 ms-2 me-2">
                <div class="card shadow-sm rounded">
                    <img src="2.png" alt="ayla">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 20px">Toyota Ayla</p>
                        <p class="m-0" style="color: grey">Rp. 150.000 / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">5 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">1200 CC</p>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">Manual</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <form action="sabrina_booking.php" method="post">
                            <button class="m-2 btn btn-primary" type="submit" name="img" value="2.png">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="3.jpeg" alt="" style="width:280px;">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 20px">Honda Brio</p>
                        <p class="m-0" style="color: grey">Rp. 150.000 / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">5 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">1200 CC</p>
                    <hr class="m-0">
                    <p class="m-2 text-primary" style="text-align: center;">Automatic</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <form action="sabrina_booking.php" method="post">
                            <button class="m-2 btn btn-primary" type="submit" name="img" value="3.jpeg">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; color: black; text-align: center; background-color: lightgrey;">
        <p>Created by Sabrina_1202200167</p>
    </footer>
</body>

</html>