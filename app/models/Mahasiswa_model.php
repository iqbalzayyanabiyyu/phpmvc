<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "name" => "Iqbal Zayyan",
            "nim" => "12213443",
            "gmail" => "iqbalzayyan@gmail.com",
            "jurusan" => "Teknik Informatika" 
        ],
        [
            "name" => "Mad max",
            "nim" => "34436556",
            "gmail" => "madmax@gmail.com",
            "jurusan" => "Design Komunikasi Visual" 
        ],
        [
            "name" => "Bulan",
            "nim" => "23324554",
            "gmail" => "bulan@gmail.com",
            "jurusan" => "Teknik Mesin" 
        ],
        [
            "name" => "Alex",
            "nim" => "90098778",
            "gmail" => "alex@gmail.com",
            "jurusan" => "Public Speaking" 
        ],
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}