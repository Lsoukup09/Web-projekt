<h1>Úkol A</h1>
<?php
    for($i = 0;$i <=10;$i++){
        echo $i;
?>
    <br>
<?php
    }
?>
<h1>Úkol B</h1>
<?php
    for($i = 0;$i <=20;$i = $i + 2){

        echo $i;
?>
        <br>
<?php

}
?>
<h1>Úkol C</h1>
<?php
    $number = 7;
    for($i = 0;$i <=10;$i++){
        echo $number * $i
?>
    <br>
<?php
}
?>
<h1>Úkol D</h1>
<?php
$a=0;
for($i = 0;$i <=100;$i++){
    $a = $a + $i;
}
echo $a
?>
<br>
<h1>Úkol E</H1>
<br>
<?php
$counter = 10;
while ($counter >= 1){
    echo $counter;
    echo (", ");
    $counter --;
}
echo ("Hotovo!");
?>
<br>
<h1>Úkol F</h1>
</br>
<?php
$number = 8;
while ($number < 5){
    echo $number;
    echo (", ");
    $number ++;
}
?>
<br>
<?php
do {
    echo $number;
    echo (", ");
    $number ++;
}
while ($number < 5);
?>
<br>
<h1>Úkol G</h1>
</br>
<?php
$number = 0;
while ($number < 5){
    $number ++;
    echo $number;
    echo (", ");
}
?>
<br>
<?php
$number = 0;
do {
    echo $number;
    echo (", ");
    $number ++;
}
while ($number < 5);
?>