<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Linear Search podle ID</title>
</head>
<body>

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

  if (nalezeno) {
    const zprava = `Ovoce s ID ${hledaneID} nalezeno na indexu ${indexNalezeny}: ${nazevOvoce}`;
    console.log(zprava);
  } else {
    const zprava = `Ovoce s ID ${hledaneID} nebylo nalezeno.`;
    console.log(zprava);
  }
</script>
  
</body>
</html>
