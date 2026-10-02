<?php
// UTS Praktikum PBO - Soal No. 10 : Sistem Toko Sepatu
// Nama : Muhammad Ghifari Rubiyanto
// NIM  : H1101251022
 
$D = 2; // digit terakhir NIM
 
// ===== Abstract Class =====
abstract class ProdukSepatu {
    protected $id;
    protected $nama;
    protected $hargaDasar;
 
    public function __construct($id, $nama, $hargaDasar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->hargaDasar = $hargaDasar;
    }
 
    public function getId() {
        return $this->id;
    }
 
    public function getNama() {
        return $this->nama;
    }
 
    public function getHargaDasar() {
        return $this->hargaDasar;
    }
 
    abstract public function hitungTotal();
    abstract public function getJenis();
}
 
// ===== Child Class 1 =====
class Sneakers extends ProdukSepatu {
    private $size;
 
    public function __construct($id, $nama, $hargaDasar, $size) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->size = $size;
    }
 
    public function hitungTotal() {
        return $this->hargaDasar + (10000 * $this->size);
    }
 
    public function getJenis() {
        return "Sneakers";
    }
 
    public function cetakDetail() {
        return "Sneakers ukuran " . $this->size;
    }
}
 
// ===== Child Class 2 =====
class Formal extends ProdukSepatu {
    private $kulit;
 
    public function __construct($id, $nama, $hargaDasar, $kulit) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->kulit = $kulit;
    }
 
    public function hitungTotal() {
        return $this->hargaDasar + (50000 * $this->kulit);
    }
 
    public function getJenis() {
        return "Formal";
    }
 
    public function cetakDetail() {
        return "Formal kulit " . $this->kulit;
    }
}
 
// ===== Child Class 3 =====
class Sandal extends ProdukSepatu {
    private $pasang;
    private $size;
    private $D;
 
    public function __construct($id, $nama, $hargaDasar, $pasang, $size, $D) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->pasang = $pasang;
        $this->size = $size;
        $this->D = $D;
    }
 
    public function hitungTotal() {
        $total = $this->hargaDasar * $this->pasang;
        if ($this->size > $this->D) {
            $total = $total - ($total * 10 / 100); // diskon 10%
        }
        return $total;
    }
 
    public function getJenis() {
        return "Sandal";
    }
 
    public function cetakDetail() {
        if ($this->size > $this->D) {
            return "Sandal " . $this->pasang . " pasang ukuran " . $this->size . " (diskon 10%)";
        } else {
            return "Sandal " . $this->pasang . " pasang ukuran " . $this->size;
        }
    }
}
 
// ===== Membuat 5 Objek =====
$p1 = new Sneakers("SP001", "Muhammad Ghifari Rubiyanto", 300000, 42);
$p2 = new Formal("SP002", "Deslo", 400000, 2);
$p3 = new Sandal("SP003", "Amey", 50000, 3, 40, $D);
$p4 = new Sneakers("SP004", "Najwa", 350000, 38);
$p5 = new Sandal("SP005", "Aiffy", 40000, 1, 38, $D);
 
// ===== Menampilkan Data (ke bawah) =====
echo "<h2>Sistem Toko Sepatu</h2>";
 
echo "ID : " . $p1->getId() . "<br>";
echo "Nama : " . $p1->getNama() . "<br>";
echo "Jenis : " . $p1->getJenis() . "<br>";
echo "Harga Dasar : " . $p1->getHargaDasar() . "<br>";
echo "Total : " . $p1->hitungTotal() . "<br>";
echo "Detail : " . $p1->cetakDetail() . "<br><br>";
 
echo "ID : " . $p2->getId() . "<br>";
echo "Nama : " . $p2->getNama() . "<br>";
echo "Jenis : " . $p2->getJenis() . "<br>";
echo "Harga Dasar : " . $p2->getHargaDasar() . "<br>";
echo "Total : " . $p2->hitungTotal() . "<br>";
echo "Detail : " . $p2->cetakDetail() . "<br><br>";
 
echo "ID : " . $p3->getId() . "<br>";
echo "Nama : " . $p3->getNama() . "<br>";
echo "Jenis : " . $p3->getJenis() . "<br>";
echo "Harga Dasar : " . $p3->getHargaDasar() . "<br>";
echo "Total : " . $p3->hitungTotal() . "<br>";
echo "Detail : " . $p3->cetakDetail() . "<br><br>";
 
echo "ID : " . $p4->getId() . "<br>";
echo "Nama : " . $p4->getNama() . "<br>";
echo "Jenis : " . $p4->getJenis() . "<br>";
echo "Harga Dasar : " . $p4->getHargaDasar() . "<br>";
echo "Total : " . $p4->hitungTotal() . "<br>";
echo "Detail : " . $p4->cetakDetail() . "<br><br>";
 
echo "ID : " . $p5->getId() . "<br>";
echo "Nama : " . $p5->getNama() . "<br>";
echo "Jenis : " . $p5->getJenis() . "<br>";
echo "Harga Dasar : " . $p5->getHargaDasar() . "<br>";
echo "Total : " . $p5->hitungTotal() . "<br>";
echo "Detail : " . $p5->cetakDetail() . "<br><br>";
 
// ===== Total Keseluruhan =====
$totalSemua = $p1->hitungTotal() + $p2->hitungTotal() + $p3->hitungTotal() + $p4->hitungTotal() + $p5->hitungTotal();
echo "<b>Total Keseluruhan : " . $totalSemua . "</b>";
?>