<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <span><h1>Transaction Payment<br>Saturnus Hotels</h1><img src="images/logo.png" alt="logo" style="width:95px; height=50px"></span>
    <hr><br>
    <table border=0>
        <tr>
            <td>Booking ID</td>
            <td>:</td>
            <td><?= $Booking->id_reservasi; ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?= $customer->nama_customer; ?></td>
        </tr>
        <tr>
            <td>Room Type</td>
            <td>:</td>
            <td><?= $room->tipe_kamar; ?></td>
        </tr>
        <tr>
            <td>Bed Type</td>
            <td>:</td>
            <td><?= $room->tipe_ranjang; ?></td>
        </tr>
        <tr>
            <td>Room Price</td>
            <td>:</td>
            <td>Rp. <?= $room->harga; ?></td>
        </tr>
        <tr>
            <td>Stay For</td>
            <td>:</td>
            <td><?= $Booking->lama_hari; ?> Days</td>
        </tr>
    </table>
    <hr>
    <table border=0>
        <tr>
            <td>Total</td>
            <td></td>
            <th>Rp. <?= $Booking->biaya; ?></th>
        </tr>
    </table>
</body>
</html>