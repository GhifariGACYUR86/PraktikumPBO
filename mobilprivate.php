<?php
class Mobil
{
    // 1. Ubah semua properti menjadi private
    private $merk;
    private $warna;
    private $kecepatan;

    // Construct untuk inisialisasi awal
    public function __construct($merk, $warna, $kecepatan)
    {
        $this->setMerk($merk);
        $this->setWarna($warna);           // Lewat setter agar tervalidasi
        $this->setKecepatan($kecepatan);   // Lewat setter agar tervalidasi
    }

    // 2. Method Getter untuk setiap properti
    public function getMerk()
    {
        return $this->merk;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function getKecepatan()
    {
        return $this->kecepatan;
    }

    // Setter Merk (Tanpa Validasi)
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    // 3. Setter Kecepatan (Validasi: Tidak boleh negatif & Maksimal 200 km/jam)
    public function setKecepatan($kecepatan)
    {
        if ($kecepatan < 0) {
            echo "<b>Kecepatan tidak boleh negatif!<br>";
        } elseif ($kecepatan > 200) {
            echo "<b>Kecepatan maksimal 200 km/jam!<br>";
        } else {
            $this->kecepatan = $kecepatan;
        }
    }

    // 4. Setter Warna (Validasi: Tidak boleh kosong & Minimal 3 karakter)
    public function setWarna($warna) {
    if (empty($warna)) {
        echo "Warna tidak boleh kosong!<br>";
    } else if (strlen($warna) < 3) {
        echo "<b>Warna minimal harus 3 karakter!<br>";
    } else {
        $this->warna = $warna;
    }
}

    // Method pendukung teks pesan
    public function getinfo()
    {
        return "Mobil yang berjalan tersebut yaitu mobil $this->merk 
        dan iya berwarna $this->warna berkendara dengan kecepatan $this->kecepatan km/jam";
    }

    public function berjalan()
    {
        return "Ada Mobil $this->warna sedang berjalan";
    }

    public function berhenti()
    {
        return "Tidak lama mobil $this->warna memelankan kecepatan dan berhenti";
    }
}

// 5. Buat Object Mobil & Masukkan Data yang VALID
$mobil1 = new Mobil("Toyota", "Abu", 80);

// 6. Tampilkan Data Produk/Mobil yang Berhasil Disimpan
echo "--- DETAIL DATA MOBIL ---";
echo "<br>Merk      : " . $mobil1->getMerk() . "<br>";
echo "Warna     : " . $mobil1->getWarna() . "<br>";
echo "Kecepatan : " . $mobil1->getKecepatan() . " km/jam<br><br>";

echo "--- STATUS MOBIL ---";
echo "<br>" . $mobil1->berjalan() . "<br>";
echo $mobil1->getinfo() . "<br>";
echo $mobil1->berhenti() . "<br><br>";

// --- PENGUJIAN VALIDASI ERROR & MENGUBAH MERK ---
echo "--- UJI COBA SETTER & VALIDASI ---";

// Mengubah merk menggunakan setMerk (tanpa error)
$mobil1->setMerk("Honda");
echo "<br> Merk Setelah Diubah : " . $mobil1->getMerk() . "<br>";

// Menguji validasi error
$mobil1->setKecepatan(-10); // Menguji kecepatan negatif
$mobil1->setKecepatan(250); // Menguji kecepatan > 200 km/jam
$mobil1->setWarna("");      // Menguji warna kosong
$mobil1->setWarna("Ab");    // Menguji warna < 3 karakter
?>