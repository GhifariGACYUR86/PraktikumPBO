<?php
class mobil//class sebagai blueprintnya yaitu mobil
{
    public $merk;     //kita membuat
    public $warna;    //properti dari setiap
    public $kecepatan;//object unutukk diberikan nilai
    public function __construct($merk,$warna,$kecepatan) //construct agar bisa dijalankan otomatis
    {
        $this->merk=$merk;            // membuat this agar
        $this->warna=$warna;          // setiap object sudah 
        $this->kecepatan=$kecepatan;  // memilki data data
    }
    public function getinfo() // method dalam get info
    {
        return "Mobil yang berjalan tersebut yaitu mobil $this->merk dan iya berwarna 
        $this->warna berkendara dengan kecepatan $this->kecepatan km/jam"; // isi dari getinfo
    }

    public function berjalan()  //method dalam berjalan
    {
        return "Ada Mobil $this->warna sedang berjalan"; // isi dari berjalan
    }

    public function berhenti() //method dalam berhenti
    {
        return "Tidak lama mobil $this->warna memelankan kecepatan dan berhenti";// isi dari berhenti
    }
}

$mobil1=new Mobil("Toyota","Abu",80);  //
$mobil2=new Mobil("Honda","Kuning",60);// menginisialisasi setiap
$mobil3=new Mobil("Suzuki","Hitam",98);// object beserta nilainya

echo $mobil1->berjalan() . "<br>" ; //memanggil object 
echo $mobil1->getinfo() . "<br>" ; // mobil1 beserta
echo $mobil1->berhenti() . "<br>" ; // propertinya
echo "<br>";
echo $mobil2->berjalan() . "<br>" ; //memanggil object
echo $mobil2->getinfo() . "<br>" ;  // mobil2 beserta
echo $mobil2->berhenti() . "<br>";  // propertinya
echo "<br>";
echo $mobil3->berjalan() . "<br>" ;//memanggil object
echo $mobil3->getinfo() . "<br>" ; // mobil3 beserta
echo $mobil3->berhenti() . "<br>" ;//  propertinya
?>