<?php


$pesanan = $_POST["pesanan"];
$jumlah_porsi = $_POST["jumlah_porsi"];

if ($pesanan == 1) {
    $pesan = "Ayam Goreng";
    $harga = 10000;
    $total_bayar = $harga * $jumlah_porsi;
} elseif ($pesanan == 2) {
    $pesan = "Nasi Goreng";
    $harga = 12000;
    $total_bayar = $harga * $jumlah_porsi;
} elseif ($pesanan == 3) {
    $pesan = "Mie Pangsit";
    $harga = 10000;
    $total_bayar = $harga * $jumlah_porsi;
} elseif ($pesanan == 4) {
    $pesan = "Pecel Ayam + Nasi";
    $harga = 15000;
    $total_bayar = $harga * $jumlah_porsi;
} elseif ($pesanan == 5) {
    $pesan = "Nasi Rames";
    $harga = 8000;
    $total_bayar = $harga * $jumlah_porsi;
} elseif ($pesanan == 6) {
    $pesan = "Jus Jeruk ";
    $harga = 5000;
    $total_bayar = $harga * $jumlah_porsi;
} elseif ($pesanan == 7) {
    $pesan = "Teh Manis";
    $harga = 2000;
    $total_bayar = $harga * $jumlah_porsi;
} else {
    echo "Maaf pilihan yang anda masukkan salah";
    $harga = "-";
    $total_bayar = "-";
}

echo "<br />";
echo "Pesanan : $pesan";
echo "<br />";
echo "Harga : $harga";
echo "<br />";
echo "Jumlah Porsi : $jumlah_porsi";
echo "<br />";
echo "Total Bayar : $total_bayar";
