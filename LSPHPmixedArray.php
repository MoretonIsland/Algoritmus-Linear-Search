<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Linear Search MixedArray PHP</title>
</head>
<body>

<?php
// Funkce pro sekvenční (lineární) hledání v PHP
function linearSearch(array $arr, $target) {
    foreach ($arr as $index => $value) {
        if ($value === $target) {
            return $index;
        }
    }
    return -1;
}

// Smíchané pole: města (stringy), data (stringy YYYY-MM-DD) a čísla (integer)
$items = [
    "Perth",
    "2024-06-15",
    100,
    "Adelaide",
    "2023-12-01",
    210,
    "Praha",
    "2022-11-23",
    "Gold Coast",
    305,
    "Kobenhavn",
    "2025-01-30",
    "Dresden",
    150,
    "2024-07-07",
    500
];

// Hledané hodnoty (typy odpovídají položkám v poli)
$search1 = "Praha";
$search2 = 210;
$search3 = "2024-07-07";
$search4 = "Brno";  // není v poli

// Provedeme hledání
$result1 = linearSearch($items, $search1);
$result2 = linearSearch($items, $search2);
$result3 = linearSearch($items, $search3);
$result4 = linearSearch($items, $search4);

// Výpis výsledků na stránku
echo "<h2>Výsledky sekvenčního hledání v PHP (smíchaná data)</h2>";
echo "<p>Index 'Praha': $result1</p>";
echo "<p>Index čísla 210: $result2</p>";
echo "<p>Index data '2024-07-07': $result3</p>";
echo "<p>Index 'Brno' (nenalezeno): $result4</p>";
?>

</body>
</html>
