<?php
class product//class sebagai blueprintnya yaitu product
{
    public $nama;     //kita membuat
    public $harga;    //properti dari setiap
    public $kategori;//object unutukk diberikan nilai

    public function __construct($nama,$harga,$kategori) 
    //construct agar bisa dijalankan otomatis
    {
        $this->nama=$nama;            // membuat this agar
        $this->harga=$harga;          // setiap object sudah 
        $this->kategori=$kategori;  // memilki data data
    }
    public function getinfo() // method dalam get info
    {
        return "Produk yang dijual yaitu $this->nama dengan harga Rp.
        $this->harga barang tersebut termasuk $this->kategori"; // isi dari getinfo
    }

    public function ApplyDiskon($persen)  //method dalam ApplyDiskon
    {
        $diskon=$persen;//menyimpan nilai persen kedalam variabel diskon
        $jumlahDiskon=($this->harga*$diskon)/100;//Menghitung potongan diskon.
        $hargasetelahdiskon=$this->harga-$jumlahDiskon; //Menghitung harga setelah diskon
        return "Barang tersebut mendapatkan diskon sebesar $diskon% dan 
        Harga baru menjadi Rp. $hargasetelahdiskon";
    }

}

$produk1=new product("Macbook Air M5",25000000,"Barang elektronik");// menginisialisasi setiap
$produk2=new product("Sepatu Adidas Adizero Evo SL",2500000,"Barang Olahraga");// object beserta nilainya

//memanggil object 1
echo $produk1->getinfo() . "<br>" ; // produk1 beserta
echo $produk1->ApplyDiskon(10) . "<br>" ; // propertinya
echo "<br>";
//memanggil object 2
echo $produk2->getinfo() . "<br>" ;  // produk2 beserta
echo $produk2->ApplyDiskon(5) . "<br>";  // propertinya
?>