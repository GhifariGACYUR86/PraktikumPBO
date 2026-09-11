<?php

class produk{

    //Properti
    protected $merk;
    protected $harga;
    
    public function __construct($merk,$harga)
    {
        $this->merk = $merk;
        if ($harga < 0) {
            echo "<b>Error: Harga tidak boleh negatif!</b><br>";
            $this->harga = 0;
        } else {
            $this->harga = $harga;
        }
    }

    public function getInfo(){
        return "Merek: " . $this->merk . "<br>Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }
}

class Makanan extends produk{

    protected $tglkadaluarsa;

    public function __construct($merk,$harga,$tglkadaluarsa)
    {
        parent::__construct($merk,$harga);
        $this->tglkadaluarsa=$tglkadaluarsa;
    }

    public function getStatus()
    {
        $hariIni = date('Y-m-d');
        if ($this->tglkadaluarsa >= $hariIni) {
            return "Segar";
        } else {
            return "KADALUARSA";
        }
    }

    public function getInfo()
    {
        return "Produk: Makanan - Mie Instan<br>" .
            parent::getInfo() . "<br>" .
            "Tanggal Kadaluarsa: {$this->tglkadaluarsa}<br>" .
            "Status: " . $this->getStatus();
    }
}

class Elektronik extends produk{

    protected $garansi;
    
    public function __construct($merk,$harga,$garansi)
    {
        parent::__construct($merk,$harga);
        $this->garansi=$garansi;
    }

   public function getInfo()
    {
        return "Produk: Elektronik - Smart TV<br>" .
            parent::getInfo() . "<br>" .
            "Garansi: {$this->garansi} bulan";
    }
}

$makanan = new Makanan("Indomie", 3500, "2025-06-30");
echo $makanan->getInfo();

echo "<br><br>";

$elektronik = new Elektronik("Samsung", 5000000, 12);
echo $elektronik->getInfo();

?>