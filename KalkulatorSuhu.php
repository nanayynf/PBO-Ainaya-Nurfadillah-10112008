<?php

class KalkulatorSuhu {
    public $suhu;

    public function __construct($suhu){
        $this->suhu = $suhu;
    }

    public function cToF(){
        return ($this->suhu * 9/5) + 32;
    }

    public function cToK(){
        return $this->suhu + 273.15;
    }
}

$data = new KalkulatorSuhu(35);

echo "<pre>";
echo "================== KALKULATOR SUHU ==================\n";
echo "Satuan   : Celsius (°C)\n";
echo "-----------------------------------------------------\n";
echo "SUHU (C)   : " . $data->suhu . "\n";
echo "FAHRENHEIT : " . $data->cToF() . "\n";
echo "KELVIN     : " . $data->cToK() . "\n";
echo "=====================================================\n";
echo "</pre>";

?>
