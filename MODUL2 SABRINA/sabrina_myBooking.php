    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>My Booking</title>
    </head>

    <body>
        <?php
        error_reporting(error_reporting() & ~E_NOTICE);
        $idNumber = rand(2340, 3000);
        $name = $_POST['nama'];
        $duration = $_POST['time'];
        $checkIn = date("d-m-Y H:i:s", strtotime($_POST['book'] . " " . $duration));
        $checkOut = date("d-m-Y H:i:s", (strtotime($checkIn) + 60 * 60 * 24 * $_POST["hari"]));
        $car = $_GET['motor'];
        $phone = $_POST['phone'];

        $price = 0;
        if ($car == "Toyota Rush") {
            $price = 200000;
        } else if ($car = "Toyota Ayla") {
            $price = 150000;
        } else {
            $price = 150000;
        }

        $price = $price * $_POST['hari'];
        if (is_iterable($_POST['addservice'])) {
            foreach ($_POST['addservice'] as $addservice) {
                if ($addservice == "Health Protocol") {
                    $price += 25000;
                } else if ($addservice == "Driver") {
                    $price += 100000;
                } else if ($addservice == "Fuel Filled") {
                    $price += 250000;
                }
            }
        }
        ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse d-flex justify-content-center">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="sabrina_Home.php"> Home </a>
                    <a class="nav-item nav-link" href="sabrina_Booking.php"> Booking </a>
                </div>
            </div>
        </nav>

        <div class=" title mt-2 text-center">
            <h2 class="">Thank you Sabrina_1202200167 for Reserving</h2>
            <p class="">Please double check your reservation detail</p>
        </div>

        <div class="d-flex justify-content-center p-2">
            <table class="table table-striped">
                <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check-in</th>
                    <th>check-out</th>
                    <th>Car Type</th>
                    <th>Phone Number</th>
                    <th>Service</th>
                    <th>Total Price</th>
                </tr>
                <tr>
                    <td><?= $idNumber ?></td>
                    <td><?= $name ?></td>
                    <td><?= $checkIn ?></td>
                    <td><?= $checkOut ?></td>
                    <td><?= $car ?></td>
                    <td><?= $phone ?></td>
                    <td>
                        <?php
                        if (is_iterable($_POST["addservice"])) {
                            foreach ($_POST["addservice"] as $service) {
                                echo "<li>$addservice</li>";
                            }
                        } else {
                            echo "no service";
                        }
                        ?>
                    </td>
                    <td>
                        Rp.
                        <?php echo $price ?>
                    </td>
                </tr>
            </table>
        </div>

        <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; color: black; text-align: center; background-color: lightgrey;">
            <p>Created by Sabrina_1202200167</p>
        </footer>
    </body>

    </html>