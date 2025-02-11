<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container mt-4">
        <h4>Upload Data Siswa (CSV)</h4>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('/siswa/upload') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="data" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Upload CSV</button>
            <a href="<?= base_url('/siswa') ?>" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>
</body>

</html>