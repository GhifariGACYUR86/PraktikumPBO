<?php

// 1. Buat interface Bentuk dengan method hitungLuas()
interface Bentuk {
    public function hitungLuas();
}

// 2. Buat class Persegi yang mengimplementasikan interface
class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

// 3. Buat class Lingkaran yang mengimplementasikan interface
class Lingkaran implements Bentuk {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        return 3.14 * $this->radius * $this->radius;
    }
}

// 4. Skrip untuk menampung objek dalam array dan perulangan loop
$bentuk = [
    new Persegi(5),
    new Lingkaran(7)
];

echo "Luas Persegi (sisi=5): " . $bentuk[0]->hitungLuas() . "<br>";
echo "Luas Lingkaran (radius=7): " . $bentuk[1]->hitungLuas() . "<br>";

?>