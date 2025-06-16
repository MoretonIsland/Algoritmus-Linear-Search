<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Test linearSearch v JS (ovoce)</title>
</head>
<body>

  <script>
    // Funkce pro sekvenční hledání (JS)
    function linearSearch(arr, target) {
      for (let i = 0; i < arr.length; i++) {
        if (arr[i] === target) {
          return i;
        }
      }
      return -1;
    }

    // Pole s ovocem
    const ovoce = ["jablko", "banán", "třešeň", "hruška", "jahoda"];

    // Hledaná slova
    const hledane1 = "třešeň";
    const hledane2 = "meloun";

    // Výsledky hledání
    const vysledek1 = linearSearch(ovoce, hledane1);
    const vysledek2 = linearSearch(ovoce, hledane2);

    // Výpis pouze do konzole
    console.log("Index ovoce '" + hledane1 + "': " + vysledek1);
    console.log("Index ovoce '" + hledane2 + "': " + vysledek2);
  </script>

</body>
</html>
