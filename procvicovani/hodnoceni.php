<?php
    $studentName = "Jan Novák";
    $test1 = 75;
    $test2 = 90;
    $test3 = 60;
    $znam = 0;
    $celk = $test1 + $test2 + $test3;
    $prum = $celk / 3;
    if ($prum >= 90) {
        $znam = 1;
    } elseif ($prum >= 75) {
        $znam = 2;
    } elseif ($prum >= 60) {
        $znam = 3;
    } elseif ($prum >= 40) {
        $znam = 5;
    } elseif ($prum < 90) {
        $znam = 1;
    }
?>

<h1>Hodnocení Studenta</h1>

<strong>
<?php
    echo $studentName;
?>
</strong>

<br>
<h2> Výsledky testů </h2>
<br>

<?php
    echo "Test1: ";
    echo $test1;
    echo " bodů";
?>
<br>
<?php
    echo "Test1: ";
    echo $test2;
    echo " bodů";
?>
<br>
<?php
    echo "Test1: ";
    echo $test3;
    echo " bodů";
?>
<br>
<br>
<?php
echo "celkový počet bodů: ";
echo $celk;
echo "/300";
?>
<br>
<?php
echo "Průměrný počet bodů: ";
echo $prum;
?>
<br>
<?php
echo "Procentuální úspěšnost: ";
echo $prum;
echo "%";
?>
<br>
<br>
<h3>
<?php
echo "Výsledná známka: ";
echo $znam;
?>
