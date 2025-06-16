<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Vyhledání sudých čísel - Console</title>
</head>
<body>

  <script>
    const smisenyObsah = [
      "jablko", "2024-06-15", 8, "banán", 1004, 15, "2023-12-01",
      "kiwi", 210, 33, 16, "2022-10-10", "broskev", 4
    ];

    const sudaCisla = [];

    for (let i = 0; i < smisenyObsah.length; i++) {
      const prvek = smisenyObsah[i];

      if (typeof prvek === "number" && prvek % 2 === 0) {
        sudaCisla.push("Index " + i + ": " + prvek);
      }
    }

    if (sudaCisla.length > 0) {
      console.log("Výsledky hledání sudých čísel:");
      sudaCisla.forEach(vysledek => console.log(vysledek));
    } else {
      console.log("Žádná sudá čísla nebyla nalezena.");
    }
  </script>

</body>
</html>
