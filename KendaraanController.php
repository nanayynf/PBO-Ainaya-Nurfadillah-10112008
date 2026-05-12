<?php

require_once "KendaraanFactory.php";

class KendaraanController {

    public function getData(){

        $data = [
            ["merek"=>"Yamaha Mio","roda"=>2,"harga"=>10000000,"warna"=>"Merah","bbm"=>"Premium"],
            ["merek"=>"Toyota Yaris","roda"=>4,"harga"=>160000000,"warna"=>"Merah","bbm"=>"Premium"],
            ["merek"=>"Honda Scoopy","roda"=>2,"harga"=>13000000,"warna"=>"Putih","bbm"=>"Premium"],
            ["merek"=>"Isuzu Panther","roda"=>4,"harga"=>170000000,"warna"=>"Hitam","bbm"=>"Solar"]
        ];

        $hasil = [];

        foreach($data as $d){
            $hasil[] = KendaraanFactory::buat(
                $d["merek"],
                $d["roda"],
                $d["harga"],
                $d["warna"],
                $d["bbm"]
            );
        }

        return $hasil;
    }
}