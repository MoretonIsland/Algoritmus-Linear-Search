<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Hledání ovoce podle ID - výstup do DOM</title>

  <style>
  h3 {
    margin-left: 20px;
  }
</style>
</head>
<body>

  <h3>Výsledek hledání ovoce podle ID (DOM):</h3>
  <div id="vystup"></div>

  <script>
    // Pole objektů ovoce s id a názvem
    const ovocePole = [
      { id: 1, ovoce: "jablko" },
      { id: 2, ovoce: "banán" },
      { id: 3, ovoce: "kiwi" },
      { id: 4, ovoce: "broskev" },
      { id: 5, ovoce: "meloun" }
    ];

    const hledaneID = 3;
    let nalezeno = false;
    let indexNalezeny = -1;
    let nazevOvoce = "";

    for (let i = 0; i < ovocePole.length; i++) {
      if (ovocePole[i].id === hledaneID) {
        nalezeno = true;
        indexNalezeny = i;
        nazevOvoce = ovocePole[i].ovoce;
        break;
      }
    }

    // Výpis pouze do DOM
    const vystup = document.getElementById("vystup");
    if (nalezeno) {
      vystup.textContent = `Ovoce s ID ${hledaneID} nalezeno na indexu ${indexNalezeny}: ${nazevOvoce}`;
    } else {
      vystup.textContent = `Ovoce s ID ${hledaneID} nebylo nalezeno.`;
    }
  </script>

</body>
</html>
