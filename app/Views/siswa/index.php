<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container mt-4">
        <h4>Data Siswa</h4>
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
                <?php $no = 1;
                foreach ($siswa as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($row['nama']) ?></td>
                        <td><?= esc($row['umur']) ?></td>
                        <td><?= esc($row['kelas']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url('/siswa/form') ?>" class="btn btn-primary">Upload CSV</a>
    </div>
</body>

</html>