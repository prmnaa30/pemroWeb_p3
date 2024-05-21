<?php
// $nilai = 60;
// if($nilai >= 90){
//  echo "Nilai Memuaskan";
// }elseif ($nilai >= 80){
//  echo "Nilai Bagus";
// }elseif($nilai >=50){
//  echo "Nilai Kurang";
// }else{
//  echo "Nilai Sangat Kurang";
// }

for ($i = 0; $i <= 100; $i++) {
    if ($i >= 80) {
        echo "$i - Nilai memuaskan <br />";
    } else if ($i >= 65) {
        echo "$i - Nilai Bagus <br />";
    } else if ($i >= 50) {
        echo "$i - Nilai Kurang <br />";
    } else {
        echo "$i - Nilai Sangat Kurang <br />";
    }
}

?>