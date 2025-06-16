<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Test linearSearch</title>
</head>
<body>

  <div id="vystup"></div> <!-- místo, kam JS vypíše výsledek -->

  <script>
    // Definice funkce linearSearch v JavaScriptu
    function linearSearch(arr, target) {
      for (let i = 0; i < arr.length; i++) {
        if (arr[i] === target) {
          return i;
        }
      }
      return -1;
    }

    // Pole s čísly (stejné jako v prvním souboru)
    const numbers = [5, 3, 8, 1, 9];

    // Hledaná čísla
    const hledaneCislo1 = 8;
    const hledaneCislo2 = 4;

    // Výsledky hledání
    const vysledek1 = linearSearch(numbers, hledaneCislo1);
    const vysledek2 = linearSearch(numbers, hledaneCislo2);

    // Výpis na stránku - oba výsledky najednou
    document.getElementById('vystup').innerHTML = 
      "Index čísla " + hledaneCislo1 + ": " + vysledek1 + "<br>" +
      "Index čísla " + hledaneCislo2 + ": " + vysledek2;
  </script>

</body>
</html>
