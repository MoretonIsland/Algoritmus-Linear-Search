<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Hledání podle tří podmínek v PHP</title>
</head>
<body>

<h3>Výsledky hledání v PHP:</h3>

<?php
function linearSearch(array $arr, callable $callback): int {
  foreach ($arr as $index => $value) {
    if ($callback($value)) {
      return $index;
    }
  }
  return -1;
}

$cisla = [10, 50, 80, 999, 1200, 60, 1500];

$jeVetsiNez = function($limit) {
  return function($value) use ($limit) {
    return $value > $limit;
  };
};

$indexVetsiNez75 = linearSearch($cisla, $jeVetsiNez(75));
$indexVetsiNez1000 = linearSearch($cisla, $jeVetsiNez(1000));
$indexVetsiNez2000 = linearSearch($cisla, $jeVetsiNez(2000));

function vypisVysledek($podminka, $index, $pole) {
  if ($index !== -1) {
    return "První číslo větší než $podminka je {$pole[$index]} na indexu $index.";
  } else {
    return "Žádné číslo větší než $podminka nebylo nalezeno. Index: -1";
  }
}

echo "<p>" . vypisVysledek(75, $indexVetsiNez75, $cisla) . "</p>";
echo "<p>" . vypisVysledek(1000, $indexVetsiNez1000, $cisla) . "</p>";
echo "<p>" . vypisVysledek(2000, $indexVetsiNez2000, $cisla) . "</p>";
?>

</body>
</html>
