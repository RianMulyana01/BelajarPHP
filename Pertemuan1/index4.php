<?php
//1.for
for ( $i = 1; $i <= 10; $i++) {
    echo "Angka ke-$i <br>";
}

for ($j = 10; $j >= 0; $j--){
    echo "Angka ke-$j <br>";
}

//2.while
$k = 0 ;
while ($k <= 10){
    echo "bilangan ke-$k <br>";
    $k++;
}

//3.do while
$x = 0 ;
do {
    echo "bilangan ke-$x <br>";
    $x++;
}while ($x < 10);
?>