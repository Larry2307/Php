<?php
$mas = array();
$sum = $mas[0];
for($i=0;$i<50;$i++){$mas[]=rand(0,9999);
    echo $mas[$i].' ';
    $sum+=$mas[$i];
}
echo 'Минимум:'.min($mas);
echo 'Максимум:'.max($mas);
echo 'Среднее:'.$sum/50;