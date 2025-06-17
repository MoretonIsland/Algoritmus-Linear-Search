<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Linear Search Sudá Čísla PHP</title>
</head>
<body>

  <h3>Výsledky hledání sudých čísel:</h3>

  <?php
    $smisenyObsah = [
      "jablko", "2024-06-15", 8, "banán", 1004, 15, "2023-12-01",
      "kiwi", 210, 33, 16, "2022-10-10", "broskev", 4
    ];

    $sudaCisla = [];

    foreach ($smisenyObsah as $index => $prvek) {
      // Je to číslo a zároveň sudé číslo?
      if (is_int($prvek) && $prvek % 2 === 0) {
        $sudaCisla[] = "Index $index: $prvek";
      }
    }

    if (count($sudaCisla) > 0) {
      foreach ($sudaCisla as $vysledek) {
        echo "<p>$vysledek</p>";
      }
    } else {
      echo "<p>Žádná sudá čísla nebyla nalezena.</p>";
    }
  ?>

</body>
</html>
