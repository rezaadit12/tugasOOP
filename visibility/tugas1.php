<?php

class sekolah{
    public      $nama,
                $alamat;
    protected   $jmlhSiswa = 0,
                $jmlhGuru = 0;
    private     $jmlhKelas = 5;

    // =======| Private |=============
    public function jmlh(){
        return $this->jmlhKelas;
    }
}

class kelas extends sekolah{

    public function setJmlhSiswa($jmlhSiswa){
        $this->jmlhSiswa = $jmlhSiswa;
    }

    public function getJmlhSiswa(){
        return $this->jmlhSiswa;
    }
    // ==============================================
    public function setJmlhGuru($jmlhGuru){
        $this->jmlhGuru = $jmlhGuru;
    }

    public function getJmlhGuru(){
        return $this->jmlhGuru;
    }
}

$data1 = new sekolah();
// ======================[1]============
$data1->nama = "Akademi Militer";
$data1->alamat = "Gotham City";


echo    "Nama Saya: " . $data1->nama. "<br>". 
        "Alamat Saya: " . $data1->alamat. "<hr>";
// =====================================


// ======================[2]============
$data2 = new kelas();
$data2->setJmlhSiswa(12);
echo "Jumlah Siswa: (". $data2->getJmlhSiswa().") orang <hr>";

$data2->setJmlhGuru(9);
echo "Jumlah Guru: (" .$data2->getJmlhGuru().") orang <hr>";
// =====================================



// ======================[3]============
echo "Jumlah Kelas: " . $data1->jmlh() ." kelas";
// =====================================
?>



