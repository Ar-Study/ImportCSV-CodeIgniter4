<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>
<?php
$data = [5, 4, 1, 6, 8, 9, 7, 6, 3, 8, 7, 8, 10];
echo "<br/>";
echo "Dari data ini data = [5, 4, 1, 6, 8, 9, 7, 6, 3, 8, 7, 8, 10] maka data yang lebih dari 6 adalah  ";
echo "<br/>";

foreach ($data as $d) {
    if ($d > 6) {

        echo $d;
        echo "<br/>";

    }
}


$genap = [12, 7, 9, 14, 6, 3, 8, 10, 5, 4];
echo "<br/>";
echo "Dari data ini data = [12, 7, 9, 14, 6, 3, 8, 10, 5, 4] maka hitung berapa banyak bilangan genapnya adalah  ";
echo "<br/>";
$jumlah = 0;

foreach ($genap as $g) {
    if ($g % 2 == 0) {
        $jumlah += 1;
        echo "Bilangan bulatnya adalah" . $g;

    } else {
        $jumlah = $jumlah;
    }
    echo "<br/>";
}

echo "Jumlah Bilangan Bulat nya adalah " . $jumlah;
echo "<br/>";
echo "<br/>";



echo "Script untuk Menampilkan Bilangan Fibonanci";
echo "<br/>";

// siapkan 2 angka awal
$angka_sebelumnya = 0;
$angka_sekarang = 1;


for ($i = 0; $i < 10; $i++) {
    // hitung angka yang akan ditampilkan
    $output = $angka_sekarang + $angka_sebelumnya;
    echo " $output";

    //siapkan angka untuk perhitungan berikutnya
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
}
?>