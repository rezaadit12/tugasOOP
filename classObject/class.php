<?php

    class kendaraan{
        
    public  $nama,
            $warna,
            $kecepatan;

    public function mobil(){
        return "Nama: {$this->nama}<br> 
                Warna: {$this->warna}<br>
                Kecepatan: {$this->kecepatan}<br>
                <br>";
        }
    } 

$mobilWahid = new kendaraan();
$mobilWahid->nama = "BMW";
$mobilWahid->warna = "Biru";
$mobilWahid->kecepatan = "4.000 CC";

$mobilIsnaini = new kendaraan();
$mobilIsnaini->nama = "Supra";
$mobilIsnaini->warna = "merah";
$mobilIsnaini->kecepatan = "7.000 CC";

echo $mobilWahid->mobil();
echo $mobilIsnaini->mobil();





?>