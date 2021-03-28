<?= $this->extend('data_temp') ?>

<?= $this->section('content') ?>
    <center>
        <h1>Reservation</h1><br>
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Customer ID</th>
                    <th>Room ID</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Stay For</th>
                    <th>Price</th>
                    <th>Employee ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Booking as $row) : ?>
                    <tr>
                        <td><?= $row['id_reservasi']; ?></td>
                        <td><?= $row['id_customer']; ?></td>
                        <td><?= $row['id_kamar']; ?></td>
                        <td><?= $row['tgl_checkin']; ?></td>
                        <td><?= $row['tgl_checkout']; ?></td>
                        <td><?= $row['lama_hari']; ?> Days</td>
                        <td><?= $row['biaya']; ?></td>
                        <td><?= $row['id_pegawai']; ?></td>
                        <td>
                        <a href=<?= base_url("booking/edit/{$row['id_reservasi']}"); ?>>
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href=<?= base_url("booking/delete/{$row['id_reservasi']}"); ?>>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <a href=<?= base_url("booking/invoice/{$row['id_reservasi']}"); ?>>
                            <i class="fas fa-print"></i>
                        </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href=<?= base_url("booking/add_new"); ?> class="btn">Add New Booking</a>
    </center>
<?= $this->endSection() ?>