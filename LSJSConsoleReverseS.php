<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Reverse search - Console.log</title>
</head>
<body>

<script>
  // Funkce pro hledání odzadu (reverse search)
  function reverseSearch(arr, callback) {
    for (let i = arr.length - 1; i >= 0; i--) {
      if (callback(arr[i])) {
        return i;
      }
    }
    return -1;
  }

  // Pole čísel
  const cisla = [10, 50, 80, 999, 1200, 60, 1500];

  // Podmínky (callback funkce)
  const jeVetsiNez75 = x => x > 75;
  const jeVetsiNez1000 = x => x > 1000;
  const jeVetsiNez2000 = x => x > 2000;

  // Hledání pomocí podmínek
  const index75 = reverseSearch(cisla, jeVetsiNez75);
  const index1000 = reverseSearch(cisla, jeVetsiNez1000);
  const index2000 = reverseSearch(cisla, jeVetsiNez2000);

  // Výpis výsledků do konzole
  if (index75 !== -1) {
    console.log(`Číslo větší než 75: ${cisla[index75]} (index: ${index75})`);
  } else {
    console.log("Nenalezeno číslo větší než 75 (index: -1)");
  }

  if (index1000 !== -1) {
    console.log(`Číslo větší než 1000: ${cisla[index1000]} (index: ${index1000})`);
  } else {
    console.log("Nenalezeno číslo větší než 1000 (index: -1)");
  }

  if (index2000 !== -1) {
    console.log(`Číslo větší než 2000: ${cisla[index2000]} (index: ${index2000})`);
  } else {
    console.log("Nenalezeno číslo větší než 2000 (index: -1)");
  }
</script>

</body>
</html>
