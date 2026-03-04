<?php
$nilai = 75;

if ($nilai < 0 ) {
    echo "Nilai harus antara 0 sampai 100";
}elseif ($nilai > 100) {
    echo " Nilai harus antara 0 sampai 100" ;
} elseif ($nilai >= 60) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
?>