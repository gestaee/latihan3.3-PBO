<?php
class Toko_Pegadaian_Syariah
{
    var $BesarPinjam;
    var $PersentaseBunga;
    var $TotalPinjam;
    var $LamaAngsuran;
    var $BesarAngsuran;
}

// Buat sebuah instance dari kelas
$tokoPegadaian = new Toko_Pegadaian_Syariah();

// Tetapkan properti-properti
$tokoPegadaian->BesarPinjam = 1000000; // Nilai contoh untuk Besar Pinjam
$tokoPegadaian->PersentaseBunga = 10;   // Nilai contoh untuk Persentase Bunga (5%)
$tokoPegadaian->LamaAngsuran = 5;     // Nilai contoh untuk Lama Angsuran

// Hitung Total Pinjam berdasarkan persentase bunga
$tokoPegadaian->TotalPinjam = $tokoPegadaian->BesarPinjam + ($tokoPegadaian->BesarPinjam * ($tokoPegadaian->PersentaseBunga / 100));
$tokoPegadaian->BesarAngsuran = $tokoPegadaian->TotalPinjam / $tokoPegadaian->LamaAngsuran;

// Tampilkan nilai-nilai yang telah dihitung
echo "Besar Pinjam: " . $tokoPegadaian->BesarPinjam . " IDR\n";
echo "Persentase Bunga: " . $tokoPegadaian->PersentaseBunga . "%\n";
echo "Lama Angsuran: " . $tokoPegadaian->LamaAngsuran . " bulan\n";
echo "Total Pinjam: " . $tokoPegadaian->TotalPinjam . " IDR\n";
echo "Besar Angsuran: " . $tokoPegadaian->BesarAngsuran . " IDR per bulan\n";
?>
