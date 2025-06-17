<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Linear Search MixedArray</title>
</head>
<body>

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

  // Hledané hodnoty (přesně tak, jak jsou v poli)
  const hledane1 = "Praha";
  const hledane2 = 210;
  const hledane3 = "2024-07-07";
  const hledane4 = "Brno";  // neexistuje v poli

  // Výpis výsledků hledání do konzole
  console.log("Index 'Praha':", linearSearch(mixedArray, hledane1));  // očekáváme index 6
  console.log("Index čísla 210:", linearSearch(mixedArray, hledane2)); // očekáváme index 5
  console.log("Index data '2024-07-07':", linearSearch(mixedArray, hledane3)); // očekáváme index 14
  console.log("Index 'Brno' (nenalezeno):", linearSearch(mixedArray, hledane4)); // očekáváme -1
</script>

</body>
</html>
