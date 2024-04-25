<?php
    //percabangan if, if else, if else if else, switch

    $angka = 20;
    if ($angka % 2== 0) {
        echo "$angka adalah bilangan genap";
    }else{
        echo "$angka adalah bilangan ganjil";
    }
print "<br>";
//if else..if else
$nilai = 78;
if ($nilai > 85){
    echo "Index nilai anda A";
}else if ($nilai >75 && $nilai < 85){
    echo "Index nilai anda B";
}else if ($nilai >60 && $nilai < 75){
    echo "Index nilai anda C";
}else if ($nilai >45 && $nilai < 60) {
echo "Index nilai anda D";
}else {
    echo "Index nilai anda E";
}
print "<br>";
//switch case
switch ($nilai) {
case ($nilai > 85):
    echo "Index nilai anda A";
    break;
    case ($nilai >75 && $nilai < 85):
        echo "Index nilai anda B";
        break;
        case ($nilai >60 && $nilai < 75):
            echo "Index nilai anda C";
            break;
            case ($nilai >45 && $nilai < 60):
                echo "Index nilai anda D";
                break;
               case ($nilai <= 45):
                echo "Index nilai anda E";
                break;
                default:
                echo "Index nilai anda tidak diketahui";
                break;
                  }
?>