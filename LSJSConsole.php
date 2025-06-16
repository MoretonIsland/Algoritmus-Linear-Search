<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Test linearSearch v konzoli</title>

  <style>
  h3, p {
    margin-left: 20px;
  }
</style>

</head>
<body>

<h3>Algoritmus sekvenčního hledání</h3>
<p>
Algoritmu sekvenčního hledání je jednoduchý algoritmus používaný k nalezení určité 
hodnoty v poli. Při hledání postupně prochází všechny prvky v poli a porovnává 
je s hledaným prvkem, a to od začátku až do konce, dokud hledaný prvek nenajde. 
Prvky v poli mají indexy (pořadová čísla) od nuly až do počtu prvků minus jedna. 
Když algoritmus najde hledaný prvek, ve výpisu výsledků zobrazí index tohoto 
nalezeného prvku. Pokud prvek v poli není, vrátí hodnotu -1, která znamená, že 
prvek nebyl nalezen. <br>
Algoritmus může prohledávat pole od začátku, nebo od konce, a jakmile najde první 
prvek, který vyhovuje hledání, okamžitě hledání ukončí. Je vhodný pro menší nebo 
neuspořádaná pole, kde není možné využít efektivnější metody jako je hledání 
birnárním půlením. <br>
Každý algoritmus musí být ukončený, proto nelze tímto způsobem prohledávat 
nekonečný seznam - sekvenční hledání by se nikdy neukončilo. Tento algoritmus je 
lineární, což znamená, že počet porovnání roste přímo úměrně s počtem prvků. 
Více prvků - více porovnání - více času. Sekvenční hledání může prohledávat 
i milion prvků, ale protože se jedná o lineární algoritmus, čas potřebný k hledání 
roste přímo úměrně s počtem prvků, což při velkém množství dat je časově náročné a 
pomalé.
</p>

  <script>
    // Definice funkce linearSearch
    function linearSearch(arr, target) {
      for (let i = 0; i < arr.length; i++) {
        if (arr[i] === target) {
          return i; // vrací index prvku
        }
      }
      return -1; // nenalezeno
    }

    // Pole s čísly
    const numbers = [5, 3, 8, 1, 9];

    // Hledání a výpis výsledků pouze do konzole
    console.log("Index čísla 8: " + linearSearch(numbers, 8)); // očekáváme 2
    console.log("Index čísla 4: " + linearSearch(numbers, 4)); // očekáváme -1
  </script>

</body>
</html>
