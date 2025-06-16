<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Reverzní hledání - Výpis do DOM</title>

  <style>
  h3 {
    margin-left: 20px;
  }
</style>
  
</head>
<body>

<h3>Výsledky reverzního hledání:</h3>
<div id="vystup"></div>

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

  const cisla = [10, 50, 80, 999, 1200, 60, 1500];

  function jeVetsiNez75(hodnota) {
    return hodnota > 75;
  }

  function jeVetsiNez1000(hodnota) {
    return hodnota > 1000;
  }

  function jeVetsiNez2000(hodnota) {
    return hodnota > 2000;
  }

  const indexVetsiNez75 = reverseSearch(cisla, jeVetsiNez75);
  const indexVetsiNez1000 = reverseSearch(cisla, jeVetsiNez1000);
  const indexVetsiNez2000 = reverseSearch(cisla, jeVetsiNez2000);

  const vystupDiv = document.getElementById("vystup");

  function vypisVysledek(podminka, index, pole) {
    if (index !== -1) {
      return `První číslo větší než ${podminka} je ${pole[index]} na indexu ${index}.`;
    } else {
      return `Žádné číslo větší než ${podminka} nebylo nalezeno. Index: -1`;
    }
  }

  const vysledky = [
    vypisVysledek(75, indexVetsiNez75, cisla),
    vypisVysledek(1000, indexVetsiNez1000, cisla),
    vypisVysledek(2000, indexVetsiNez2000, cisla)
  ];

  vystupDiv.innerHTML = vysledky.join("<br>");
</script>                                                 

</body>
</html>
                                                                                                                                                                                                                                                                     