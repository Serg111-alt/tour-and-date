<?php
header("Refresh:1");
$now = time();  
$future = strtotime ("07-05-2020 15:00");
$dif = $future - $now;
$days = floor($dif/(24*60*60));
$hours = floor(($dif/(3600)));
$minutes = floor(($dif/(60)));
$milisec = floor(($dif*(1000)));
echo "До 07-05-2020 15:00 осталось:";
echo "</br>";
echo "Дней"." ".$days." "."Часов"." ".$hours." Минут"." ".$minutes." "."Секунд"." ".$dif." "."Милисекунд"." ".$milisec;
