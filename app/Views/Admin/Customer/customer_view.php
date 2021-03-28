<?= $this->extend('data_temp') ?>

<?= $this->section('content') ?>
    <center>
    <h1>Customer</h1><br>
        <table>
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Addres</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customer as $row) : ?>
                    <tr>
                        <td><?= $row['id_customer']; ?></td>
                        <td><?= $row['nama_customer']; ?></td>
                        <td><?= $row['tgl_lahir_customer']; ?></td>
                        <td><?= $row['jenis_kelamin']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['kota_asal']; ?></td>
                        <td>
                        <a href=<?= base_url("customer/edit/{$row['id_customer']}"); ?>>
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href=<?= base_url("customer/delete/{$row['id_customer']}"); ?>>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href=<?= base_url("customer/add_new"); ?> class="btn">Add New Customer</a>
    </center>
<?= $this->endSection() ?>