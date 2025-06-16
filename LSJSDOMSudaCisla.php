<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Vyhledání sudých čísel</title>
</head>


  <style>
  h3 {
    margin-left: 20px;
  }
</style>
<body>

  <h3>Výsledky hledání sudých čísel:</h3>
  <div id="vystup"></div>

  <script>
    const smisenyObsah = [
      "jablko", "2024-06-15", 8, "banán", 1004, 15, "2023-12-01",
      "kiwi", 210, 33, 16, "2022-10-10", "broskev", 4
    ];

    const sudaCisla = [];

    for (let i = 0; i < smisenyObsah.length; i++) {
      const prvek = smisenyObsah[i];

      // Je to číslo a je sudé?
      if (typeof prvek === "number" && prvek % 2 === 0) {
        sudaCisla.push("Index " + i + ": " + prvek);
      }
    }

    // Výpis na stránku
    const vystup = document.getElementById("vystup");
    if (sudaCisla.length > 0) {
      vystup.innerHTML = sudaCisla.join("<br>");
    } else {
      vystup.textContent = "Žádná sudá čísla nebyla nalezena.";
    }
  </script>

</body>
</html>
