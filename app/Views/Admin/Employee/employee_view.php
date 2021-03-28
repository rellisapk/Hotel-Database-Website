<?= $this->extend('data_temp') ?>

<?= $this->section('content') ?>
    <center>
    <h1>Employee</h1><br>
        <table>
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Employee as $row) : ?>
                    <tr>
                        <td><?= $row['id_pegawai']; ?></td>
                        <td><?= $row['nama_pegawai']; ?></td>
                        <td><?= $row['tgl_lahir_pegawai']; ?></td>
                        <td><?= $row['jenis_kelamin']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['jabatan']; ?></td>
                        <td><?= $row['gaji']; ?></td>
                        <td>
                        <a href=<?= base_url("employee/edit/{$row['id_pegawai']}"); ?>>
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href=<?= base_url("employee/delete/{$row['id_pegawai']}"); ?>>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href=<?= base_url("employee/add_new"); ?> class="btn">Add New Employee</a>
    </center>
<?= $this->endSection() ?>