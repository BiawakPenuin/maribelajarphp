<?php
class No7
{
public function cariNilaiGanjilGenap ($inputnilai) {
if ($inputnilai % 2 == 0 ) {
echo "$inputnilai ADALAH NILAI GENAP";
}else{
echo "$inputnilai ADALAH NILAI GANJIL";
}
}
}

$obj = new No7();
echo $obj -> cariNilaiGanjilGenap (inputnilai: 100);
?>

<!-- output
100 ADALAH NILAI GENAP
-->