<?php
 $array = array(267,-2, 0, 2, 306, -100,-200,0,108, 132, 0, 14, -213, 433, -1);
 $max = abs($array[0]);
for ($i=0;$i<count($array);$i++){
    if ($array[$i] > $max){
        $max = $array[$i];
    }
}
echo "Минимальный по модулю элемент:".$max."<br>";
$arraynew = [];
$arrayneww = [];
for ($i=0;$i<count($array);$i++){
    if ($array[$i] != 0){
    array_push($arraynew,$array[$i]);
    }
}
for ($i=0;$i<count($array);$i++){
    if ($array[$i] == 0){
    array_push($arrayneww,$array[$i]);
    }
}
array_push($arraynew,$arrayneww);
echo "Все элементы равные нулю перенесены в конец массива:".$arraynew."<br>";
$first = null;
$second = null;
$result = 0;
for ($i=0;$i<count($array);$i++){
    if($array[ $i ] > 0 && $first == null){
    $first = $i;
    }
    else if ($array[ $i ] > 0 && $second == null){
    $second = $i;
    }
}
for($i = $first; $i < $second; $i++){
        $result+=$array[ $i ];
}
echo "Сумма элемнтов массива, расположенных между первым и вторым положительными элементами:".$result."<br>";
?>