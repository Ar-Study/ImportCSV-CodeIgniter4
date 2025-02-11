<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

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
                    // Inisialisasi nomor urut
                    $no = 1;

                    // Loop melalui array $siswa
                    foreach ($siswa as $data) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . htmlspecialchars($data['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['umur']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['kelas']) . "</td>";
                        echo "</tr>";
                        $no++; // Increment nomor urut
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <h4>Form Data</h4>
            <form action="<?= base_url('upload') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="file" name="data" class="form-control" required>
                <input type="submit" name="input" value="INSERT" class="btn btn-primary mt-3">
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12">
            <h4>Grafik Jumlah Siswa per Kelas</h4>
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data untuk grafik
    const ctx = document.getElementById('myChart').getContext('2d');

    // Menghitung jumlah siswa per kelas
    const kelasCount = {};
    <?php
    // Inisialisasi kelasCount sebagai array
    $kelasCount = [];

    // Loop melalui array $siswa
    foreach ($siswa as $data) {
        // Ambil kelas dari data siswa
        $kelas = $data['kelas'];

        // Hitung jumlah siswa per kelas
        if (isset($kelasCount[$kelas])) {
            $kelasCount[$kelas]++;
        } else {
            $kelasCount[$kelas] = 1; // Inisialisasi jika kelas belum ada
        }
    }
    ?>

    // Menyiapkan data untuk grafik
    const labels = <?= json_encode(array_keys($kelasCount)); ?>;
    const data = <?= json_encode(array_values($kelasCount)); ?>;

    // Membuat grafik
    const myChart = new Chart(ctx, {
        type: 'line', // Tipe grafik
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Siswa',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>