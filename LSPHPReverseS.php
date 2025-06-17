<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Linear Search Reverse PHP</title>
</head>
<body>

<h3>Výsledky reverzního hledání:</h3>

<?php
// Funkce pro hledání odzadu (reverse search)
function reverseSearch(array $array, callable $callback): int {
    for ($i = count($array) - 1; $i >= 0; $i--) {
        if ($callback($array[$i])) {
            return $i;
        }
    }
    return -1;
}

// Pole čísel
$cisla = [10, 50, 80, 999, 1200, 60, 1500];

// Podmínky (anonymní funkce)
$jeVetsiNez75 = fn($x) => $x > 75;
$jeVetsiNez1000 = fn($x) => $x > 1000;
$jeVetsiNez2000 = fn($x) => $x > 2000;

// Výsledky hledání
$index75 = reverseSearch($cisla, $jeVetsiNez75);
$index1000 = reverseSearch($cisla, $jeVetsiNez1000);
$index2000 = reverseSearch($cisla, $jeVetsiNez2000);

// Výpis výsledků
if ($index75 !== -1) {
    echo "<p>Číslo větší než 75: {$cisla[$index75]} (index: $index75)</p>";
} else {
    echo "<p>Nenalezeno číslo větší než 75 (index: -1)</p>";
}

if ($index1000 !== -1) {
    echo "<p>Číslo větší než 1000: {$cisla[$index1000]} (index: $index1000)</p>";
} else {
    echo "<p>Nenalezeno číslo větší než 1000 (index: -1)</p>";
}

if ($index2000 !== -1) {
    echo "<p>Číslo větší než 2000: {$cisla[$index2000]} (index: $index2000)</p>";
} else {
    echo "<p>Nenalezeno číslo větší než 2000 (index: -1)</p>";
}
?>

</body>
</html>
