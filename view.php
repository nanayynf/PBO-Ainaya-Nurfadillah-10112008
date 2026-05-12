<?php
echo "<h2>DATA KENDARAAN</h2>";

echo "<table border='1' cellpadding='6'>";
echo "<tr>
<th>No</th>
<th>Merek</th>
<th>Roda</th>
<th>Harga</th>
<th>Warna</th>
<th>BBM</th>
</tr>";

$no = 1;

foreach($data as $obj){
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$obj->getMerek()."</td>";
    echo "<td>".$obj->getRoda()."</td>";
    echo "<td>Rp " . number_format($obj->getHarga(),0,',','.') . "</td>";
    echo "<td>".$obj->getWarna()."</td>";
    echo "<td>".$obj->getBbm()."</td>";
    echo "</tr>";
}

echo "</table>";