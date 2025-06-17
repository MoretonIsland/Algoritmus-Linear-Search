<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Linear Search MixedArray</title>
</head>
<body>

  <div id="vystup"></div>

  <script>
    // Funkce sekvenčního hledání
    function linearSearch(arr, target) {
      for (let i = 0; i < arr.length; i++) {
        if (arr[i] === target) {
          return i;
        }
      }
      return -1;
    }

    // Smíchané pole: města, data jako stringy a čísla (čísla bez uvozovek)
    const mixedArray = [
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

    // Hledané hodnoty
    const hledane1 = "Praha";
    const hledane2 = 210;
    const hledane3 = "2024-07-07";
    const hledane4 = "Brno";  // neexistuje v poli

    // Výsledky hledání
    const vysledek1 = linearSearch(mixedArray, hledane1);
    const vysledek2 = linearSearch(mixedArray, hledane2);
    const vysledek3 = linearSearch(mixedArray, hledane3);
    const vysledek4 = linearSearch(mixedArray, hledane4);

    // Výpis výsledků na stránce
    document.getElementById('vystup').innerHTML = 
      "Index 'Praha': " + vysledek1 + "<br>" +
      "Index čísla 210: " + vysledek2 + "<br>" +
      "Index data '2024-07-07': " + vysledek3 + "<br>" +
      "Index 'Brno' (nenalezeno): " + vysledek4;
  </script>

</body>
</html>
