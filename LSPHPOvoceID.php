<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Linear Search podle ID PHP</title>
</head>
<body>

  <h3>Výsledky hledání ovoce podle ID:</h3>

  <?php
    // Pole s ovocem, každé má ID
    $ovocePole = [
      ["id" => 1, "ovoce" => "jablko"],
      ["id" => 2, "ovoce" => "banán"],
      ["id" => 3, "ovoce" => "kiwi"],
      ["id" => 4, "ovoce" => "broskev"],
      ["id" => 5, "ovoce" => "meloun"]
    ];

    // Hledané ID
    $hledaneID = 3;
    $nalezeno = false;

    foreach ($ovocePole as $index => $zaznam) {
      if ($zaznam["id"] === $hledaneID) {
        echo "<p>Ovoce s ID $hledaneID nalezeno na indexu $index: " . $zaznam["ovoce"] . "</p>";
        $nalezeno = true;
        break;
      }
    }

    if (!$nalezeno) {
      echo "<p>Ovoce s ID $hledaneID nebylo nalezeno.</p>";
    }
  ?>

</body>
</html>
