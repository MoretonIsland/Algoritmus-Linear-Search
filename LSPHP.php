<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Test linearSearch v PHP</title>
</head>
<body>

<?php
// Definice funkce linearSearch v PHP
function linearSearch($arr, $target) {
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] === $target) {
      return $i; // Vracíme index
    }
  }
  return -1; // Pokud prvek nenalezen
}

// Vstupní pole
$numbers = [5, 3, 8, 1, 9];

// Hledání čísla 8
$result1 = linearSearch($numbers, 8);

// Hledání čísla 4
$result2 = linearSearch($numbers, 4);

// Výpis výsledků
echo "<p>Index čísla 8 je: $result1</p>";
echo "<p>Index čísla 4 je: $result2</p>";
?>

</body>
</html>
