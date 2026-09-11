<?php
/* 
===================================================================
KASUS 1: Kapan INHERITANCE Lebih Baik Dari Trait?
Kasus: Hierarki Produk
Mengapa: Makanan "ADALAH" Produk. Ada hubungan induk-anak (hierarki) 
         dan berbagi atribut dasar ($merk, $harga) yang sama.
===================================================================
*/

// Parent Class
class Produk
{
    protected $merk;
    protected $harga;

    public function __construct($merk, $harga)
    {
        $this->merk = $merk;
        $this->harga = $harga;
    }

    public function getInfoProduk()
    {
        return "<br>Merk: " . $this->merk . "<br>Harga: Rp" . $this->harga;
    }
}

// Child Class meng-inherit secara alami dari Produk
class Makanan extends Produk
{
    private $tglKadaluarsa;

    public function __construct($merk, $harga, $tglKadaluarsa)
    {
        parent::__construct($merk, $harga);
        $this->tglKadaluarsa = $tglKadaluarsa;
    }

    public function getInfoLengkap()
    {
        return $this->getInfoProduk() . "<br>Kadaluarsa: " . $this->tglKadaluarsa;
    }
}


/* 
===================================================================
KASUS 2: Kapan TRAIT Lebih Baik Dari Inheritance?
Kasus: Fitur Bayar QRIS Pada Class Berbeda (Horizontal Reuse)
Mengapa: Pakaian dan TiketKonser TIDAK MEMILIKI hubungan keturunan,
         tetapi keduanya sama-sama membutuhkan kemampuan fitur QRIS.
===================================================================
*/

// Trait untuk ditempel pada class manapun tanpa hubungan keturunan
trait BisaBayarPakaiQR
{
    public function buatQRCodeBelanja($namaBarang, $harga)
    {
        return "Kode QR untuk '" . $namaBarang . "' berhasil dibuat! Silahkan Scan untuk bayar Rp" . $harga . "<br>";
    }
}

class Pakaian
{
    use BisaBayarPakaiQR; // Menggunakan trait
}

class TiketKonser
{
    use BisaBayarPakaiQR; // Menggunakan trait pada class lain
}


// --- EKSEKUSI PROGRAM TUGAS 2 ---

echo "Kasus 1: Penggunaan Inheritance";
$indomie = new Makanan("Indomie Goreng", 3500, "12-12-2026");
echo $indomie->getInfoLengkap() . "<br><br>";

// Enter/spasi baris sebelum Kasus 2
echo "<br>";

echo "Kasus 2: Penggunaan Trait (Fitur Pembayaran QRIS)<br>";
$baju = new Pakaian();
echo $baju->buatQRCodeBelanja("Kaos Polos", 50000);

$tiket = new TiketKonser();
echo $tiket->buatQRCodeBelanja("Tiket Konser Musik", 150000);

?>