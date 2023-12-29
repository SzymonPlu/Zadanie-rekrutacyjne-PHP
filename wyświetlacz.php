<?php
$cyfry_lcd = [
    '0' => [" - ", "| |", "   ", "| |", " - "],
    '1' => ["   ", "  |", "   ", "  |", "   "],
    '2' => [" - ", "  |", " - ", "|  ", " - "],
    '3' => [" - ", "  |", " - ", "  |", " - "],
    '4' => ["   ", "| |", " - ", "  |", "   "],
    '5' => [" - ", "|  ", " - ", "  |", " - "],
    '6' => [" - ", "|  ", " - ", "| |", " - "],
    '7' => [" - ", "  |", "   ", "  |", "   "],
    '8' => [" - ", "| |", " - ", "| |", " - "],
    '9' => [" - ", "| |", " - ", "  |", " - "]
];

function wyswietl_lcd($liczba) {
    global $cyfry_lcd;
    $linie = ["", "", "", "", ""];
    for ($i = 0; $i < strlen($liczba); $i++) {
        $cyfra = $liczba[$i];
        for ($j = 0; $j < 5; $j++) {
            $linie[$j] .= $cyfry_lcd[$cyfra][$j] . " ";
        }
    }
    return implode("\n", $linie);
}

// Pobieranie liczby od użytkownika
$liczba = readline("Wpisz liczbę do wyświetlenia w stylu LCD: ");

// Wyświetlanie liczby w stylu LCD
echo wyswietl_lcd($liczba);
?>
