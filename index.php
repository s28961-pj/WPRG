<!DOCTYPE html>
<html lang="en-EN">
<head>
    <title>PHP</title>
</head>
<body>




<?php
    echo "<h2>Zadanie 1</h2>";
    // 1. Stwórz tablicę zawierającą nazwy kilku owoców (np. "jabłko", "banan", "pomarańcza"). Napisz pętlę, która wyświetli każdy owoc w osobnej linii, pisany od tyłu (nie używaj żadnej funkcji wbudowanej) oraz informację, czy dany owoc zaczyna się literą "p".-->

    $fruits = array("Apple", "Banana", "Orange", "Mango", "Papaya");
    function startsWithP($fruit)
    {
        if ($fruit[0] == 'p' || $fruit[0] == 'P') {
            return "starts with 'P' letter";
        } else return "does not start with 'P' letter";
    }
    function reverse($fruit)
    {
        $result = "";
        for ($i = strlen($fruit) - 1; $i >= 0; $i--) {
            $result .= $fruit[$i];
        }
        return $result;
    }
    foreach ($fruits as $fruit) {
        print("<b>$fruit</b>" . " - " . reverse($fruit) . " - " . startsWithP($fruit) . "</br>");

    }
?>


    <hr><h2>Zadanie 2</h2>
    <form method="GET">
        Min: <input type="number" name="min">
        Max: <input type="number" name="max">
        <input type="submit">
    </form>

<?php
    // 2. Napisz program, który wypisze na ekranie wszystkie liczby pierwsze z zadanego zakresu.

    $minValue = $_GET["min"];
    $maxValue = $_GET["max"];

    for ($i = $minValue; $i <= $maxValue; $i++) {
        $p[$i] = true;
    }
    for ($i = 2; $i <= sqrt($maxValue); $i++) {
        if (!$p[$i]) continue;
        for ($j = $minValue * $i; $j <= $maxValue; $j += $i) {
            $p[$j] = false;
        }
    }
    for ($i = $minValue; $i <= $maxValue; $i++) {
        if ($p[$i]) echo "$i, ";
    }

?>


    <hr><h2>Zadanie 3</h2>
    <form method="GET">
        <input type="number" name="nthNumber" placeholder="nthNumber">
    </form>
<?php
    // 3. Dla zadanego N napisz program wyliczający N-tą liczbę Fibonacciego. Ciąg powinien zostać zapisany w tablicy, a następnie program wypisze nieparzyste elementy tablicy. Każdy element powinien być w nowej linii, a linie powinny być ponumerowane.

    $nthNumber = $_GET["nthNumber"];
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= $nthNumber; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    echo $nthNumber . " number of Fibonnacci: " . $fibonacci[$nthNumber] . "</br>";

    foreach ($fibonacci as $key => $value) {
        if ($value % 2 == 0) {
            continue;
        }
        echo "</br>" . $key . ". " . $value;
    }

?>


    <hr><h2>Zadanie 4</h2>
<?php
    // 4.Stwórz z tekstu tablicę (używając explode):
    // "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
    // Z utworzonej tablicy usuń wszystkie elementy ze znakami interpunkcyjnymi, używając pętli. Przeiteruj się przez każdy element tabeli, sprawdź, czy ten element jest znakiem interpunkcyjnym,  jeśli jest, to usuń go przez przesunięcie każdego następnego elementu o jeden do tyłu, nie używaj regexu, ale użyj pętli for i instrukcji if.
    // Na podstawie otrzymanej tablicy utwórz tablicę asocjacyjną przy pomocy pętli foreach, gdzie kolejne elementy parzyste będą kluczami, a elementy po nich następujące wartościami. Każdą parę wypisz w oddzielnej linii.

    $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    echo $text . " - words count - " . str_word_count($text) . "</br></br>";

    $arr = explode(" ", $text);
    foreach ($arr as $key => $value) {
        if ($value[strlen($value)-1] == '.' || $value[strlen($value)-1] == ',' || $value[strlen($value)-1] == '!' || $value[strlen($value)-1] == '?' || $value[strlen($value)-1] == '/') {
            unset($arr[$key]);
        }
    }
    echo "</br>" . count($arr);

    $arr2 = array();
    for ($i = 0; $i < count($arr) - 1; $i += 2) {
        $arr2[$arr[$i]] = $arr[$i + 1];
    }
    foreach ($arr2 as $key => $value) {
        echo "$key $value</br>";
    }
    echo count($arr2);
?>
</body>
</html>
