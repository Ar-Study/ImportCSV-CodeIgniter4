<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

<div class="container">
    <div class="row mt-4">
        <a href="<?= base_url() ?>tambah" onclick="return konf()" class="btn btn-default btn-xs"><span
                class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            Tambah</a>
        <div class="col-lg-9">
            <h4>Data CRUD Siswa </h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Kelas</th>
                        <th>Eskul</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Inisialisasi nomor urut
                    $no = 1;

                    // Loop melalui array $siswa
                    foreach ($siswa as $data) {
                        foreach ($eskul as $e) {

                            if ($e) {
                                echo "<tr>";
                                echo "<td>" . $no . "</td>";
                                echo "<td>" . htmlspecialchars($data['nama']) . "</td>";
                                echo "<td>" . htmlspecialchars($data['umur']) . "</td>";
                                echo "<td>" . htmlspecialchars($data['kelas']) . "</td>";
                                echo "<td>" . htmlspecialchars($e['eskul']) . "</td>";

                                ?>
                                <td> <a href="<?= base_url() ?>crud/edit/<?= $data['id'] ?>" class="btn btn-default btn-xs"><span
                                            class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>

                                <td> <a href="<?= base_url() ?>crud/delete/<?= $data['id'] ?>" class="btn btn-default btn-xs"><span
                                            class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Delete</a></td>
                                <?php echo "</tr>";
                                $no++; // Increment nomor urut
                            } else {

                            }
                            ?>
                            <?php
                        }

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>