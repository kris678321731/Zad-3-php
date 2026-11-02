<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Zadania PHP</title>
<style>
    body { font-family: Arial, sans-serif; max-width: 700px; margin: 20px auto; padding: 0 10px; }
    h2 { margin-bottom: 4px; }
    p { margin: 2px 0 6px; color: #555; }
    div { background: #eee; padding: 6px; margin-bottom: 6px; }
    input { width: 70px; }
    hr { margin: 16px 0; }
</style>
</head>
<body>

<h1>Zadania PHP</h1>

<h2>Zad 1</h2>
<p>10 kolejnych liczb od 1.</p>
<div><?php
for ($i = 1; $i <= 10; $i++) echo "$i ";
?></div>
<hr>

<h2>Zad 2</h2>
<p>10 liczb od 10 malejąco.</p>
<div><?php
for ($i = 10; $i >= 1; $i--) echo "$i ";
?></div>
<hr>

<h2>Zad 3</h2>
<p>Suma 10 kolejnych liczb od 1.</p>
<div><?php
$s = 0;
for ($i = 1; $i <= 10; $i++) $s += $i;
echo $s;
?></div>
<hr>

<h2>Zad 4</h2>
<p>10 parzystych liczb od 2.</p>
<div><?php
for ($i = 1; $i <= 10; $i++) echo ($i * 2) . " ";
?></div>
<hr>

<h2>Zad 5</h2>
<p>X miesięcy, co miesiąc Y zł, odsetki 8% od całej kwoty.</p>
<form method="post">
    X <input name="x5" value="12">
    Y <input name="y5" value="100">
    <button name="zad" value="5">Oblicz</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 5) {
    $k = 0;
    for ($m = 1; $m <= (int)$_POST['x5']; $m++) {
        $k += (float)$_POST['y5'];
        $k += $k * 0.08;
    }
    echo round($k, 2) . " zł";
}
?></div>
<hr>

<h2>Zad 6</h2>
<p>Suma 100 elementów ciągu (pierwszy 5, różnica 10).</p>
<div><?php
$s = 0; $a = 5;
for ($i = 1; $i <= 100; $i++) { $s += $a; $a += 10; }
echo $s;
?></div>
<hr>

<h2>Zad 7</h2>
<p>Cegły w piramidzie 10 x 10.</p>
<div><?php
$c = 0;
for ($b = 10; $b >= 1; $b--) $c += $b * $b;
echo $c;
?></div>
<hr>

<h2>Zad 8</h2>
<p>Cegły w ścianie: podstawa X, Y rzędów, każdy rząd o Z krótszy.</p>
<form method="post">
    X <input name="x8" value="10">
    Y <input name="y8" value="5">
    Z <input name="z8" value="1">
    <button name="zad" value="8">Oblicz</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 8) {
    $c = 0;
    for ($r = 0; $r < (int)$_POST['y8']; $r++) {
        $w = (int)$_POST['x8'] - $r * (int)$_POST['z8'];
        if ($w <= 0) break;
        $c += $w;
    }
    echo $c;
}
?></div>
<hr>

<h2>Zad 9</h2>
<p>Waga ściany z zad. 8, jedna cegła waży K kg.</p>
<form method="post">
    X <input name="x9" value="10">
    Y <input name="y9" value="5">
    Z <input name="z9" value="1">
    K <input name="k9" value="2.5">
    <button name="zad" value="9">Oblicz</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 9) {
    $c = 0;
    for ($r = 0; $r < (int)$_POST['y9']; $r++) {
        $w = (int)$_POST['x9'] - $r * (int)$_POST['z9'];
        if ($w <= 0) break;
        $c += $w;
    }
    echo "Cegły: $c, waga: " . ($c * (float)$_POST['k9']) . " kg";
}
?></div>
<hr>

<h2>Zad 10</h2>
<p>Prosty kalkulator.</p>
<form method="post">
    <input name="a10" value="2">
    <select name="op10"><option>+</option><option>-</option><option>*</option><option>/</option></select>
    <input name="b10" value="3">
    <button name="zad" value="10">Oblicz</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 10) {
    $a = (float)$_POST['a10']; $b = (float)$_POST['b10']; $o = $_POST['op10'];
    if ($o == '+') echo $a + $b;
    elseif ($o == '-') echo $a - $b;
    elseif ($o == '*') echo $a * $b;
    elseif ($b == 0) echo "Nie dzielimy przez 0";
    else echo $a / $b;
}
?></div>
<hr>

<h2>Zad 11</h2>
<p>Ciąg arytmetyczny: N elementów, pierwszy X, różnica Y.</p>
<form method="post">
    N <input name="n11" value="10">
    X <input name="x11" value="1">
    Y <input name="y11" value="3">
    <button name="zad" value="11">Wyświetl</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 11) {
    for ($i = 0; $i < (int)$_POST['n11']; $i++)
        echo ((float)$_POST['x11'] + $i * (float)$_POST['y11']) . " ";
}
?></div>
<hr>

<h2>Zad 12</h2>
<p>Suma dwóch liczb. Program kończy się, gdy suma = 0.</p>
<form method="post">
    <input name="a12" value="1">
    <input name="b12" value="2">
    <button name="zad" value="12">Dodaj</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 12) {
    $s = (float)$_POST['a12'] + (float)$_POST['b12'];
    echo $s == 0 ? "Suma = 0, koniec." : "Suma = $s, podaj kolejne liczby.";
}
?></div>
<hr>

<h2>Zad 13</h2>
<p>Silnia liczby.</p>
<form method="post">
    <input name="n13" value="5">
    <button name="zad" value="13">Oblicz</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 13) {
    $n = (int)$_POST['n13'];
    $f = 1;
    for ($i = 2; $i <= $n; $i++) $f *= $i;
    echo "$n! = $f";
}
?></div>
<hr>

<h2>Zad 14</h2>
<p>n liczb, każda kolejna to kwadrat poprzedniej.</p>
<form method="post">
    n <input name="n14" value="5">
    Pierwsza <input name="p14" value="2">
    <button name="zad" value="14">Wyświetl</button>
</form>
<div><?php
if (($_POST['zad'] ?? '') == 14) {
    $l = (float)$_POST['p14'];
    for ($i = 0; $i < (int)$_POST['n14']; $i++) {
        echo "$l ";
        $l = $l * $l;
    }
}
?></div>
<hr>

<h2>Zad 15</h2>
<p>Suma i średnia z 10 losowych liczb z &lt;50, 100&gt;.</p>
<div><?php
$s = 0;
for ($i = 0; $i < 10; $i++) {
    $l = rand(50, 100);
    echo "$l ";
    $s += $l;
}
echo "<br>Suma: $s<br>Średnia: " . $s / 10;
?></div>

</body>
</html>