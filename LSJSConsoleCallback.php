<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Linear Search Callback</title>
</head>
<body>

<script>
  // Funkce linearSearch s callbackem - najde první prvek vyhovující podmínce
  function linearSearch(arr, callback) {
    for (let i = 0; i < arr.length; i++) {
      if (callback(arr[i])) {
        return i;
      }
    }
    return -1;
  }

  // Pole s čísly
  const cisla = [10, 50, 80, 999, 1200, 60, 1500];

  // Podmínky jako callback funkce
  function jeVetsiNez75(hodnota) {
    return hodnota > 75;
  }

  function jeVetsiNez1000(hodnota) {
    return hodnota > 1000;
  }

  function jeVetsiNez2000(hodnota) {
    return hodnota > 2000;
  }

  // Hledání podle podmínek
  const indexVetsiNez75 = linearSearch(cisla, jeVetsiNez75);
  const indexVetsiNez1000 = linearSearch(cisla, jeVetsiNez1000);
  const indexVetsiNez2000 = linearSearch(cisla, jeVetsiNez2000);

  // Výpis do konzole
  if (indexVetsiNez75 !== -1) {
    console.log(`První číslo větší než 75 je ${cisla[indexVetsiNez75]} na indexu ${indexVetsiNez75}.`);
  } else {
    console.log("Žádné číslo větší než 75 nebylo nalezeno. Index: -1");
  }

  if (indexVetsiNez1000 !== -1) {
    console.log(`První číslo větší než 1000 je ${cisla[indexVetsiNez1000]} na indexu ${indexVetsiNez1000}.`);
  } else {
    console.log("Žádné číslo větší než 1000 nebylo nalezeno. Index: -1");
  }

  if (indexVetsiNez2000 !== -1) {
    console.log(`První číslo větší než 2000 je ${cisla[indexVetsiNez2000]} na indexu ${indexVetsiNez2000}.`);
  } else {
    console.log("Žádné číslo větší než 2000 nebylo nalezeno. Index: -1");
  }
</script>

</body>
</html>
