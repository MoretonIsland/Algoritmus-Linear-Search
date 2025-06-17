<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Linear Search Text PHP</title>
</head>
<body>

  <?php
  // Funkce pro sekvenční hledání v poli (PHP)
  function linearSearch($arr, $target) {
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] === $target) {
        return $i;
      }
    }
    return -1;
  }

  // Pole s ovocem
  $ovoce = ["jablko", "banán", "třešeň", "hruška", "jahoda"];

  // Hledaná slova
  $hledane1 = "třešeň";
  $hledane2 = "meloun";

  // Výsledky hledání
  $vysledek1 = linearSearch($ovoce, $hledane1);
  $vysledek2 = linearSearch($ovoce, $hledane2);

  // Výpis na stránce
  echo "<p>Index ovoce '" . $hledane1 . "': " . $vysledek1 . "</p>";
  echo "<p>Index ovoce '" . $hledane2 . "': " . $vysledek2 . "</p>";
  ?>

</body>
</html>
