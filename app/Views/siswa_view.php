<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Masal</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-9">
                <h4>Data</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; // Initialize $no here
                        foreach ($siswa as $siswa_item) { // Use foreach to iterate over siswa data
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= esc($siswa_item['nama']) ?></td>
                                <td><?= esc($siswa_item['umur']) ?></td>
                                <td><?= esc($siswa_item['kelas']) ?></td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <h4>Form Data</h4>
                <form action="<?= site_url('siswa/upload'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="file" name="data" required>
                    <input type="submit" name="input" value="INSERT" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
</body>

</html>