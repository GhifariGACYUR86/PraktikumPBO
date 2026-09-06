<?php
function hitungNilaiAkhir(float $uts, float $uas, float $tugas ): float{
    return ($uts*0.30)+($uas*0.40)+($tugas*0.30);

}

$nilaiUTS=80;
$nilaiUAS=85;
$nilaiTugas=90;

$hasil=hitungNilaiAkhir($nilaiUTS,$nilaiUAS,$nilaiTugas);

echo "Nilai Akhir:". $hasil;
?>

