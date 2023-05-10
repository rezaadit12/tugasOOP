<?php

class transportasi{
    
    public      $jenis = "mobil";
    protected   $warna = "merah";
    private     $jmlhPenumpang = 6;

  
    public function muatan(){
        return $this->jmlhPenumpang;
    }

}

// ========= Protected===============
class darat extends transportasi{
    public function angkot(){
        return $this->warna;
    }
}




// =========== public
$kendaraan1 = new transportasi();
$kendaraan1->jenis = "motor";
echo "PUBLIC: ". $kendaraan1->jenis. "<br>";

// =========== protected
$kendaraan1 = new darat();
echo "PROTECTED: ". $kendaraan1->angkot(). "<br>";

// =========== private 
echo "PRIVATE: ". $kendaraan1->muatan(). "<br>";





?>