<?php

    class kendaraan{
        
    public  $nama,
            $warna,
            $harga;

    public function mobil(){
        return "Nama: {$this->nama}<br> Warna: {$this->warna}<br> harga: {$this->harga}";
    }

    public function __construct($nama = "avanza", $warna = "merah", $harga = 12121){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    }


$mobilWahid = new kendaraan("lamborghini", "hijau", 12000);
$mobilIsnaini = new kendaraan("Pajero", "hitam", 978);
$mobilsalasa = new kendaraan("xpander", "putih", 56787654);

echo $mobilWahid->mobil() . "<br><br>";
echo $mobilIsnaini->mobil() . "<br><br>";
echo $mobilsalasa->mobil() . "<br><br>";




?>